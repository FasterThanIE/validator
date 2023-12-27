<?php

namespace App\Policies;

interface RulePolicy
{
    public static function validate(mixed $value): bool;
    public static function failedValidationMessage(): string;
}