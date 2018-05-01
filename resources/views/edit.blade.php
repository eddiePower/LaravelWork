<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Author {{ $authors[0]->email }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
   <body>
   <div style="left:30%" class="col-md-4">
   <h4>Update the Author: {{ $authors[0]->first_name . " " . $authors[0]->last_name }}</h4>
   </div>
   <br /><br />
   
	 <form action="edit" method="post">
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		 <div class="row justify-content-center">
        <div class="col-md-8">
		<div class="table-responsive" style="padding-left:30%">
         <table>
            <tr>
            </tr>
            <tr>            
               <td>First Name</td>
               <td>
                  <input type='text' name='first_name' value='<?php echo $authors[0]->first_name; ?>'/>
               </td>               
            </tr>
            <tr>
               <td>Last Name</td>
               <td>
                  <input type='text' name='last_name' value='<?php echo $authors[0]->last_name; ?>'/>
               </td>
            </tr>
            <tr>
               <td>Email</td>
               <td>
                  <input type='text' name='email' value='<?php echo $authors[0]->email; ?>'/>
               </td>
               </tr>
               <tr>
               <td>DOB</td>
               <td>
                  <input type='text' name='birthdate' value='<?php echo $authors[0]->birthdate; ?>'/>
               </td>
            </tr>
            <tr>
               <td>Update</td>
               <td>
                  <input type='submit' value="Update Author" />
               </td>
            </tr>
         </table>
		</div>
        </div>
		 </div>
	 
      </form>
   
   </body>
 </html>
