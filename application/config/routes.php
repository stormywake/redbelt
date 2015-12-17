<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//default route sends you to new session log in page
$route['default_controller'] = "sessions";

//create new user
$route['users/new'] = "users";


// 3: after register route to users create
$route['users/create'] = "Users/create_user";

// 4. log in button will take you to Sessions/create
$route['Sessions/create'] = "Sessions/create_session"; 

// 5. session created successfully go to home
$route['success'] = "sessions/success";

//go to home page
$route['home'] = "sessions/success";

//go to review page make new review
$route['reviews/new'] = "Reviews";


// create new review
$route['reviews/create'] = "reviews/create";

// log out destroy session
$route['destroy'] = "sessions/destroy";

//if not logged in return to login page
$route['sessions/new'] = "sessions";




$route['404_override'] = '';



$route['404_override'] = '';


