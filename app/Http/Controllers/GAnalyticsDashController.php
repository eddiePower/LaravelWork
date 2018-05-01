<?php
namespace EddiesBlog\Http\Controllers;
use Illuminate\Http\Request;
use EddiesBlog\Http\Requests;
use EddiesBlog\Http\Controllers\Controller;
use Analytics;
use Spatie\Analytics\Period;

class GAnalyticsDashController extends Controller 
{
   public function index()
   {
     // echo "<br />Google Analytics Dashboard<br /> <a href=" . url('/') . ">Home Page</a>";
      
      //retrieve visitors and pageview data for the current day and the last seven days
	  //$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

	  
      //retrieve top browsers used in 6 month period
	  //$analyticsData = Analytics::fetchTopBrowsers(Period::months(12));

      //retrieve sessions and pageviews with yearMonth dimension since 1 year ago 
      $analyticsData = Analytics::performQuery(
          Period::months(12),
          'ga:sessions',
          [
	          'dimensions' => 'ga:country, ga:operatingSystem, ga:operatingSystemVersion, ga:browser, ga:browserVersion',
			  'metrics' => 'ga:sessions, ga:sessionDuration',
			  'sort' => 'ga:country'
              //'metrics' => 'ga:sessions,ga:sessionDuration'//,
              //'dimensions' => 'ga:operatingSystem, ga:operatingSystemVersion, ga:browser, ga:browserVersion'
          ]
      );


	    return view('analytics', ['analyticsData' => $analyticsData]);
      
   }
}