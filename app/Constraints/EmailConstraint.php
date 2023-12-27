<?php

namespace App\Constraints;

use App\Policies\RulePolicy;

class EmailConstraint implements RulePolicy
{
    public static function validate(mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function failedValidationMessage(): string
    {
        return "Email is not valid";
    }
}