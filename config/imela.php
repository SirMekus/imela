<?php 

use App\Providers\RouteServiceProvider;

return [
  //After verification of email user will be redirected to this page
  'home' => RouteServiceProvider::HOME,
  
  //middlewares to be associatd to this route
	'middleware' => ['web'],
	
	'duration' => 15,

 ]
?>