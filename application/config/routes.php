<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| T
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



///// ui page routing here///
//// ui page UiController  functoin loading here

$route['about'] = 'UiController/loadUIabout';
$route['contact'] = 'UiController/loadUIcontact';
$route['service'] = 'UiController/loadUIservice';
$route['project'] = 'UiController/loadUIproject';
$route['signup'] = 'UiController/loadUIregister';
$route['form'] = 'UiController/loadUIform';
$route['send'] = 'UiController/loadUIsend';
$route['start'] = 'UiController/loadUIstart';
$route['registration'] = 'UiController/loadUIregistration';
$route['login'] = 'UiController/loadUIlogin';








///// ui page routing here Contact Model ///
$route['verfiy'] = 'UiController/datasubmit';

///// ui page routing here Form  Model ///
$route['uVerfiyPortal'] = 'UiController/loadFormModel';

/// ui page routing here Send Model
$route['Portal'] = 'UiController/loadSendModel';

/// ui page routing here Start Model
$route['SecondPortal'] = 'UiController/loadStartModel';

/// ui page routing here Registration Model
$route['submit'] = 'UiController/loadRegistrationModel';






//// Dashboard page DashboardController 
$route['welDashboard'] = 'DashboardController/loadDashboarddashboard';

/// uicontroller function name  routing here for Login Model
$route['verifyChecking'] = 'UiController/loadLoginModel';


// routeing for uicontroller function name for login model 
$route['logout'] = 'UiController/loaDlogoutDashboard';





?>