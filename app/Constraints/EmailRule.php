<?php

namespace App\Constraints;

use App\Policies\RulePolicy;

class EmailRule implements RulePolicy
{
    public function validate(string $field, mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}