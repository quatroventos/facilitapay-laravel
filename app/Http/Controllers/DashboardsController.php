<?php

namespace App\Http\Controllers;

use Analytics;
use App\Models\Newsletter;
use Carbon\CarbonInterval;
use Spatie\Analytics\Period;
use App\Models\Dashboards;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('pt-BR');
        $startDate = Carbon::now()->subMonths(2);
        $endDate = Carbon::now()->subMonth(1);

        //Analytics now
        $analytics = Analytics::performQuery(
            Period::days(30),
            'ga:sessions',
            [
                'metrics' => 'ga:users, ga:newUsers, ga:avgSessionDuration, ga:bounceRate, ga:avgDomContentLoadedTime, ga:avgServerConnectionTime, ga:avgServerResponseTime',
                'dimensions' => 'ga:yearMonth,  ga:source'
            ]
        );

        $analyticsTotals = $analytics->totalsForAllResults;
        $avgTime = CarbonInterval::seconds($analyticsTotals['ga:avgSessionDuration'])->cascade()->forHumans();

        //Analytics for comparison
        $analyticsLastMonth = Analytics::performQuery(
            Period::create($startDate, $endDate),
            'ga:sessions',
            [
                'metrics' => 'ga:users, ga:newUsers, ga:avgSessionDuration, ga:bounceRate, ga:avgDomContentLoadedTime, ga:avgServerConnectionTime, ga:avgServerResponseTime',
                'dimensions' => 'ga:yearMonth'
            ]
        );

        $analyticsLastMonth = $analyticsLastMonth->totalsForAllResults;

        //Visitors Graph
        $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(30));
        $visitorsArray = array_column($analyticsData->toArray(), 'visitors');
        $visitors = implode(',', $visitorsArray);

        $datesArray = array_column($analyticsData->toArray(), 'date');
        $datesArrayFormatted = array();
        foreach($datesArray as $date ){
            $formattedDate = Carbon::parse($date);
            array_push($datesArrayFormatted, $formattedDate->format('d/m'));
        }
        $dates = '"'.implode('","', $datesArrayFormatted).'"';

        //Last month Graph
        $analyticsLastMonthData = Analytics::fetchTotalVisitorsAndPageViews(Period::create($startDate, $endDate));
        $visitorsArrayLastMonth = array_column($analyticsLastMonthData->toArray(), 'visitors');
        $visitorsLastMonth = implode(',', $visitorsArrayLastMonth);

        //Sources Graph
        $sortedSources = collect($analytics->rows)->sortBy(2)->reverse()->toArray();
        $sortedSources = array_splice($sortedSources, 0, 5);
        $sourceArray = array_column($sortedSources, '1');
        $sources = '"'.implode('","',$sourceArray).'"';
        $sourcesUsersArray = array_column($sortedSources, '2');
        $sourcesUsers = '"'.implode('","',$sourcesUsersArray).'"';



        //Referrals
        $sortedRef = collect($analytics->rows)->sortBy(2)->reverse()->toArray();

        $sortedRef = array_splice($sortedRef, 0, 10);
        $refArray = array_column($sortedRef, '1');
        $refUsersArray = array_column($sortedRef, '2');
        $refsCombined = array_combine($refArray,$refUsersArray);

        //Most Visited Pages
        $mostVisitedPages = Analytics::fetchMostVisitedPages(Period::days(30));
        $mostVisitedPages = array_slice($mostVisitedPages->toArray(), 0, 5);

        return view("backend.dashboard.index", compact('analyticsTotals', 'avgTime','analyticsLastMonth', 'visitors', 'dates', 'visitorsLastMonth','sources','sourcesUsers', 'mostVisitedPages', 'refsCombined'));
    }

}
