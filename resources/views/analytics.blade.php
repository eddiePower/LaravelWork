<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Google Analytics Laravel 5 test</title>
    <!-- Laravel Scripts -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/scriptStuff.js') }}" defer></script>
    <!-- Laravel Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Main Menu.</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Laravel Testing Ground Pages</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">General</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="/">Home</a></li>
                        </ul>
                    </li>
                    @auth
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Testing Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="/author">Authors</a></li>
                            <li><a href="/author/create">Create Author</a></li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        </div>
                    </div>
                </nav>
	<div class="site-content" style="right: 50%;">
	<h3>Google Analytics - Stuff.</h3>
	<div class="container">
	<div class="code col-md-8" style="border-style: ridge;">
	<h4>GA query on frank-dental.com.au</h4>
	   <code>
	   	'ga:sessions',
          [
	      'dimensions' => 'ga:country, ga:operatingSystem, ga:operatingSystemVersion,
			ga:browser,ga:browserVersion',
			'metrics' => 'ga:sessions, ga:sessionDuration',
		     'sort' => 'ga:country'
          ]
	   </code>
	   <br /><br />
	</div>
	
    <div class="row justify-content-center">   
    <div class="col-md-8">
	<div class="table">
       <table class="table table-striped">
         <tr>
         <th>Country</th>
         <th>Operating System</th>
         <th>OS Version</th>
         <th>Browser</th>
         <th>Browser Version</th>
         <th>Time on Site (minutes)</th>
         </tr>
         <?php $count = 0; ?>
         @foreach ($analyticsData as $ad)
         <?php $count++; ?>
       
         <td>{{ $ad[0] }}</td>
		 <td>{{ $ad[1] }}</td>
         <td>{{ $ad[2] }}</td>
         <td align="center">
         	@if($ad[3] == "Chrome")
         	  <img src="{{ asset('images/ChromeIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }}
         	@elseif($ad[3] == "Safari" || $ad[3] == "Safari (in-app)")         	  
         	  <img src="{{ asset('images/SafariIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }}         	
	        @elseif($ad[3] == "Firefox" || $ad[3] == "Mozilla Compatible Agent")
         	  <img src="{{ asset('images/FireFoxIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
	        @elseif($ad[3] == "Opera")
         	  <img src="{{ asset('images/OperaIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
         	@elseif($ad[3] == "Internet Explorer")
         	  <img src="{{ asset('images/MsEdgeIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
         	@elseif($ad[3] == "Samsung Internet")
         	  <img src="{{ asset('images/samsungInternetIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
         	@else
         	{{ $ad[3] }}
         	@endif
         </td>
         <td>{{ $ad[4] }}</td>
         <td>{{ $ad[6] }}</td>
         </tr>
        @endforeach
        <tr><th>Number of Rows: </th><th colspan="5" style="text-align: right;">{{ $count }}</th></tr>
       </table>
	</div>
        </div>
    </div>
	</div>
	</div>
	   <button onclick="topFunction()" id="myBtn" title="Go to top">
	   		<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
	   </button>	
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
