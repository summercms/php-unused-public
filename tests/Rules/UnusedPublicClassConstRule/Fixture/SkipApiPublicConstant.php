<?php

declare(strict_types=1);

namespace TomasVotruba\UnusedPublicPHPStanRules\Tests\Rules\DeadCode\UnusedPublicClassConstRule\Fixture;

final class SkipApiPublicConstant
{
    /**
     * @api
     */
    public const PATHS = 'paths';
}
