<?php

namespace App;

final class Team
{
	private const NAME_KEY = 'name';
    private const GITHUB_USERNAME_KEY = 'github_username';
    private const TWITTER_USERNAME_KEY = 'twitter_username';
    private const LOCATION_KEY = 'location';

    public static function getTeamMembers(): array
    {
        return [
            self::teamMember(
                name: 'Taylor Otwell',
                githubUsername: 'taylorotwell',
                twitterUsername: 'taylorotwell',
                location: 'United States'
            ),
            self::teamMember(
                name: 'Dries Vints',
                githubUsername: 'driesvints',
                twitterUsername: 'driesvints',
                location: 'Belgium'
            ),
            self::teamMember(
                name: 'James Brooks',
                githubUsername: 'jbrooksuk',
                twitterUsername: 'jbrooksuk',
                location: 'United Kingdom'
            ),
            self::teamMember(
                name: 'Nuno Maduro',
                githubUsername: 'nunomaduro',
                twitterUsername: 'enunomaduro',
                location: 'Portugal'
            ),
            self::teamMember(
                name: 'Mior Muhammad Zaki Mior Khairuddin',
                githubUsername: 'crynobone',
                twitterUsername: 'crynobone',
                location: 'Malaysia'
            ),
            self::teamMember(
                name: 'Jess Archer',
                githubUsername: 'jessarcher',
                twitterUsername: 'jessarchercodes',
                location: 'Australia'
            ),
            self::teamMember(
                name: 'Guus Leeuw',
                githubUsername: 'phpguus',
                twitterUsername: 'phpguus',
                location: 'Ireland'
            ),
            self::teamMember(
                name: 'Tim MacDonald',
                githubUsername: 'timacdonald',
                twitterUsername: 'timacdonald87',
                location: 'Australia'
            ),
            self::teamMember(
                name: 'Joe Dixon',
                githubUsername: 'joedixon',
                twitterUsername: '_joedixon',
                location: 'United Kingdom'
            ),
            self::teamMember(
                name: 'Christoph Rumpel',
                githubUsername: 'christophrumpel',
                twitterUsername: 'christophrumpel',
                location: 'Austria'
            ),
        ];
    }

	private static function teamMember(string $name, string $githubUsername, string $twitterUsername, string $location)
	{
		return [
			self::NAME_KEY => $name,
			self::GITHUB_USERNAME_KEY => $githubUsername,
			self::TWITTER_USERNAME_KEY => $twitterUsername,
			self::LOCATION_KEY => $location,
		];
	}
}
