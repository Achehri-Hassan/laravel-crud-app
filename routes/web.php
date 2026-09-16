<?php


use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\PostController;

// Get route example
Route::get('/', function () {
    return view('welcome');

});

Route::resource("posts" , PostController::class);



// Route::resourcec("posts" , PostController::class);



// Route::get("/contact" , function(){
//       return view("contact");
// });


//  started to learn routes


// Parameters using routes
// Route::get('/contact', function(){
//      return view('contact');
// });


// Route::get('/navBar' , function(){
//      return  view("navBar");
// });



// Route::get('/portfolio/{firstname}/{lastname}' , function($firstname , $lastname){
//       return $firstname . "   " .  "  " . $lastname;
// });


// named routes 
// Route::get("/test" , function(){
//      return view("this is test");
// })->name("testpage");




// Grouped routes portfolio 
// Route::get("/portfolio" , function(){
//       return view("portfolio");
// });


// Route::prefix("portfolio")->group(function(){
       
//   Route::get("/company" , function(){
//       return view("company");
//  });

//   Route::get("/organization" , function(){
//       return view("organization");
//   });

 
// });


//  Route::prefix("/work")->group(function(){

//      Route::get("company", function(){
//            return view("company");
//      });

//      Route::get("testing" ,function(){
//            return view('testing');
//      });
     
//   });

//finally to learn routes



// Post Route example 
// Route::post("/formsubmited" , function(Request $request) {
     
//       $request->validate([

//           "full_name" => "required|min:3|max:30",
//           "email" => "required|min:3|max:30|email",
     
//       ]);
     

//      $full_name = $request->input("full_name");
//      $email = $request->input("email");

//      // return "Your full name is $full_name, and your email is $email";
//      return "your full name is $full_name , and  your email is $email";
     
       
// })->name("formsubmited");





?> 