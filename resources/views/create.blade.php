<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a dummy author </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
      <h2>Create Author:</h2><br />
     <form action = "/author" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" align="left">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="first_name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" align="left">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="birthdate">Date of Birth:</label>
              <input type="text" class="form-control" name="birthdate">
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">
            Add New Author
            </button>
            <a href="/" class="btn btn-info">Return Home</a>
            <a href="/author" class="btn btn-info">Author list</a>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
