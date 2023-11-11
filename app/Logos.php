<?php

namespace App;

use Illuminate\Support\Collection;

final class Logos
{
    private const COMPANY_KEY = 'company';
    private const LOGO_HEIGHT_KEY = 'logo-height';

    public static function get(): Collection
    {
        return collect([
            self::logo(
                company: 'Bankrate',
                logoHeight: 24
            ),
            self::logo(
                company: 'WWE',
                logoHeight: 42
            ),
            self::logo(
                company: 'twitch',
                logoHeight: 32
            ),
            self::logo(
                company: 'The New York Times',
                logoHeight: 31
            ),
            self::logo(
                company: 'Disney',
                logoHeight: 39
            ),
            self::logo(
                company: 'Warner Bros',
                logoHeight: 37
            ),
            self::logo(
                company: 'About You',
                logoHeight: 28
            ),
            self::logo(
                company: 'St. Jude',
                logoHeight: 61
            ),
        ]);
    }

    private static function logo(string $company, int $logoHeight): array
    {
        return [
            self::COMPANY_KEY => $company,
            self::LOGO_HEIGHT_KEY => $logoHeight,
        ];
    }
}
