<?php

namespace App\Policies;

interface RulePolicy
{
    public function validate(string $field, mixed $value): bool;
}