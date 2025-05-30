<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class WebScraper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function scrapeAll(string $jobtitle, string $location): array
    {
        return [
            'indeed' => $this->scrapeIndeed($jobtitle, $location)
        ];
    }
    public function scrapeIndeed(string $job, string $location): array
    {
        $query = urlencode($job);
        $loc = urlencode($location);

        $url = "https://ca.indeed.com/salaries/{$query}-Salaries,-{$loc}";

        try {
            $response = Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0',
            ])->get($url);

            if (!$response->ok()) {
                return ['error' => 'Failed to fetch Indeed page'];
            }

            $html = $response->body();
            $crawler = new Crawler($html);

            $salaries = [];

            // This selector might change — inspect Indeed's HTML structure to adjust
            $crawler->filter('.cmp-SalaryChart-chartWrapper .cmp-SalaryChart-title')->each(function ($node) use (&$salaries) {
                $salaries[] = $node->text();
            });

            return $salaries ?: ['message' => 'No salaries found (HTML structure may have changed)'];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
