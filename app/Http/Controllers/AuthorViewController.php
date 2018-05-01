<?php

namespace EddiesBlog\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use EddiesBlog\Http\Requests;
use EddiesBlog\Http\Controllers\Controller;

class AuthorViewController extends Controller
{
    //display the complete authors list / tabel
    public function index()
    {
	    $authors = DB::select('select * from authors');
	    return view('authors_view', ['authors' => $authors]);
    }
    
    
    //show the create new author view.
    public function create()
    {
	    return view('create');
    }

	
	//save a new author to the db fed from the above create view.
   public function store(Request $request)
   {
      $fname = $request->input('first_name');
      $lname = $request->input('last_name');
      $email = $request->input('email');
      $dob = $request->input('birthdate');
            
      DB::insert('insert into authors (first_name, last_name, email, birthdate) values(?,?,?,?)',[$fname, $lname, $email, $dob]);
            
      echo "Record inserted successfully.<br/>";
      echo '<a href="/author/create" class="btn btn-info">Create Another</a>';
   }
   
   //edit a current author record in the db by its id key
   public function edit(Request $request, $id) 
   {
      $fname = $request->input('first_name');
      $lname = $request->input('last_name');
      $email = $request->input('email');
      $dob = $request->input('birthdate');
      
      DB::update('update authors set first_name = ?, last_name = ?, email = ?, birthdate = ? where id = ?',[$fname,$lname,$email,$dob,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href="/author">Click Here</a> to go back to list.';
   }
   
   //delete and destroy a author record from db
   //todo: could pass to a confirm/cancel page rather then just wipe on accidental click!!
   public function destroy($id)
   {
	  DB::delete('delete from authors where id = ?', [$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href="/author">Click Here</a> to go back to list.';
   }
   
   
   //show a specific author for editing
   //return to edit view with param authors array -> of 1 in this case due to db constraint
   public function show($id) 
   {
      $authors = DB::select('select * from authors where id = ?', [$id]);
      return view('edit', ['authors' => $authors]);
   }
   
}
