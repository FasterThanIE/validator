<?php

namespace App\Models;


use App\Constraints\Emails\EmailTopLevelConstraint;
use App\Constraints\Emails\EmailValidConstraint;
use App\Constraints\ValidAgeConstraint;
use Error;

class User
{
    protected $fields = [
        'email' => [EmailValidConstraint::class, EmailTopLevelConstraint::class],
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
            throw new Error("Field $field does not exist.");
        }

        foreach ($this->fields[$field] as $constraint) {
            if(!$constraint::validate($value)) {
                die($constraint::failedValidationMessage());
            }
        }
    }
}