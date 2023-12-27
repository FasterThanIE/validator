<?php

namespace App\Constraints\Emails;

use App\Policies\RulePolicy;

class EmailValidConstraint implements RulePolicy
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