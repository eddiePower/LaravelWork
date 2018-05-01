<!DOCTYPE html>
 <html>
  <head>
	<title>View Authors Dummy DB Records</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  </head>
   <body>
	<div class="site-header" align="center">
		<h2>Authors Records</h2>
	</div>
	<div class="site-content" align="center">
	<h3>Dummy Data view - Authors.</h3>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
	<div class="table">
       <table class="table table-striped">
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of birth</th>
            <th>Join Date</th>
            <th>Edit</th>
            <th>Delete</th>
         </tr>
         @foreach ($authors as $author)
         <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->first_name }}</td>
            <td>{{ $author->last_name }}</td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->birthdate }}</td>
            <td>{{ $author->added }}</td>
            <td><a href = 'author/{{ $author->id }}/edit' class='btn btn-info'>Edit</a></td>
            <td><a href = 'author/{{ $author->id }}/delete' class='btn btn-danger'>Delete</a></td>
         </tr>
         @endforeach
       </table>
	</div>
    <div class="card">
    	<div class="card-header">
    	@auth
    		{{Auth::user()->name }}'s Dashboard
		@endauth
    	</div>
		<div class="card-body">
		<ul class="list-group">
           <li class="list-group-item"> <a href="/">Home</a></li>
           @auth
           <li class="list-group-item"><a href="/home">User Dashboard</a></li>
           @endauth
		</ul>
		</div>
	</div>
    </div>
    </div>
	</div>
	</div>
	<br /><br /><br />
   </body>
 </html>
 