<?php

namespace App\Models;

use App\Constraints\EmailRuleConstraint;
use App\Constraints\ValidAgeConstraint;

class User
{
    protected $fields = [
        'email' => [EmailRuleConstraint::class],
        'age' => [ValidAgeConstraint::class]
    ];

    /*
     *
     * TESTING PURPOSES - WILL BE MOVED TO PARENT CLASS
     *
     *
     */

    public function __set($field, $value)
    {
        if(!array_key_exists($field, $this->fields)) {
            throw new \Error("Field $field does not exist.");
        }

        foreach ($this->fields[$field] as $constraint) {
            if(!$constraint::validate($value)) {
                throw new \Error($constraint::failedValidationMessage());
            }
        }
    }
}