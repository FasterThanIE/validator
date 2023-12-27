<?php

namespace App\Constraints\Emails;

use App\Policies\RulePolicy;

class EmailTopLevelConstraint implements RulePolicy
{
    const AVAILABLE_EXTENSIONS = [
        '.com', '.org', '.rs'
    ];

    public static function validate(mixed $value): bool
    {
        $pattern = '/(' . implode('|', array_map(function (string $ext) {
                return preg_quote($ext, '/');
            }, self::AVAILABLE_EXTENSIONS)) . ')$/';

        return preg_match($pattern, $value) === 1;
    }

    public static function failedValidationMessage(): string
    {
        return "Email extension must be one of ".implode(',', self::AVAILABLE_EXTENSIONS);
    }
}