<?php

namespace App\Constraints;

use App\Policies\RulePolicy;

class ValidAgeConstraint implements RulePolicy
{

    public static function validate(mixed $value): bool
    {
        return is_numeric($value) && $value >= 18;
    }

    public static function failedValidationMessage(): string
    {
        return "You are not an adult";
    }
}