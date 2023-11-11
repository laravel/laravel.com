<?php

namespace App;

use App\Documentation;

final class DocsLink
{
	/**
     * Get the URL for a specific documentation section.
     */
	public static function get(string $section, string $version = null): string
	{
		$latestLaravelVersion = $version ?? Documentation::getLatestLaravelVersion();

		return '/docs/' . $latestLaravelVersion . '/' . $section;
	}
}
