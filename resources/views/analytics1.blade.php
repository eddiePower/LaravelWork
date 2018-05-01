<!DOCTYPE html>
 <html>
  <head>
	<title>Google Analytics Dashboard - </title>
	
	
    <!-- Laravel Scripts -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <!-- Laravel Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	
	
<!-- Bootstrap core CSS -->
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  </head>
   <body>
	<div class="site-content" align="center">
	<h3>Google Analytics - Stuf.</h3>
	<div class="container">
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
         </tr>
         @foreach ($analyticsData as $ad)
         <td>{{ $ad[0] }}</td>
		 <td>{{ $ad[1] }}</td>
         <td>{{ $ad[2] }}</td>
         <td align="center">
         	@if($ad[3] == "Chrome")
         	  <img src="{{ asset('images/ChromeIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }}
         	@elseif($ad[3] == "Safari")         	  
         	  <img src="{{ asset('images/SafariIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }}         	
	        @elseif($ad[3] == "Firefox")
         	  <img src="{{ asset('images/FireFoxIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
	        @elseif($ad[3] == "Opera")
         	  <img src="{{ asset('images/OperaIcon.png') }}" height="30px" width="30px" /><br />
         	  {{ $ad[3] }} <br />
         	@else
         	{{ $ad[3] }}
         	@endif
         </td>
         <td>{{ $ad[4] }}</td>
         </tr>
        @endforeach
       </table>
	</div>
        </div>
    </div>
	</div>
	</div>
   </body>
 </html>
