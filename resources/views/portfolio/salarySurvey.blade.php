@extends('portfolio.layouts.main')
@section('mainBody')
    <div class="container">
        <form method="POST" action="{{ route('runScraper') }}">
            @csrf
            <input type="text" name="job" placeholder="Job title" required>
            <input type="text" name="location" placeholder="Location" required>
            <button type="submit">Scrape Jobs</button>
        </form>
    </div>

    @if ($results == true)
        <div class="container">
            <h1>Results for {{ $job }} in {{ $location }}</h1>

            <h2>Google Jobs</h2>
            @if (isset($googleResults['jobs_results']))
                <ul>
                    @foreach ($googleResults['jobs_results'] as $job)
                        <li>
                            <strong>{{ $job['title'] ?? 'N/A' }}</strong><br>
                            {{ $job['company_name'] ?? '' }} — {{ $job['location'] ?? '' }}<br>
                            <a href="{{ $job['via'] ?? '#' }}" target="_blank">View Job</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No results or error: {{ $googleResults['error'] ?? 'No data' }}</p>
            @endif

            <h2>LinkedIn Jobs</h2>
            @if (isset($linkedinResults['jobs_results']))
                <ul>
                    @foreach ($linkedinResults['jobs_results'] as $job)
                        <li>
                            <strong>{{ $job['title'] ?? 'N/A' }}</strong><br>
                            {{ $job['company_name'] ?? '' }} — {{ $job['location'] ?? '' }}<br>
                            <a href="{{ $job['link'] ?? '#' }}" target="_blank">View Job</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No results or error: {{ $linkedinResults['error'] ?? 'No data' }}</p>
            @endif
        </div>
    @endif
@endsection
