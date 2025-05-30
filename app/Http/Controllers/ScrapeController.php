<?php

namespace App\Http\Controllers;

use App\Services\WebScraper;
use Illuminate\Http\Request;
use App\Services\SerpScraper;

class ScrapeController extends Controller
{
    protected $scraper;

    public function __construct(SerpScraper $scraper)
    {
        $this->scraper = $scraper;
    }

    public function scrape(Request $request)
    {
        $request->validate([
            'job' => 'required|string',
            'location' => 'required|string',
        ]);

        $job = $request->input('job');
        $location = $request->input('location');
        $googleResults = $this->scraper->getGoogleJobs($job, $location);
        $linkedinResults = $this->scraper->getLinkedInJobs($job, $location);
        $results = true;
        return view('portfolio.salarySurvey', compact('job', 'location', 'googleResults', 'linkedinResults','results'));
    }
}
