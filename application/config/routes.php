<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route for Login
$route["Login"] = "Auth/index";
$route["Regis"] = "Auth/regis";
$route['Logout'] = "Auth/logout";

// Start Admin Routes
$route['Admin'] = "Admin/Dashboard/index";
// End Admin Routes

// Start Pegawai Routes
$route['Pegawai'] = "Admin/Pegawai/index";
$route['TambahPegawai'] = 'Admin/Pegawai/tambahP';
$route['EditPegawai/(:num)'] = 'Admin/Pegawai/editP/$1';
$route['DeletePegawai/(:num)'] = 'Admin/Pegawai/hapusP/$1';
// End Pegawai Routes

// Start Workshop Routes
$route['Workshop'] = "Admin/Workshop/index";
$route['TambahWorkshop'] = 'Admin/Workshop/tambahW';
$route['EditWorkshop/(:num)'] = 'Admin/Workshop/editW/$1';
$route['DeleteWorkshop/(:num)'] = 'Admin/Workshop/hapusW/$1';
// End Workshop Routes

// Start Instruktur Routes
$route['Instruktur'] = "Admin/Instruktur/index";
$route['TambahInstruktur'] = 'Admin/Instruktur/tambahI';
$route['EditInstruktur/(:num)'] = 'Admin/Instruktur/editI/$1';
$route['DeleteInstruktur/(:num)'] = 'Admin/Instruktur/hapusI/$1';
// End Instruktur Routes

// Start Ruangan Routes
$route['Ruangan'] = 'Admin/Ruangan/index';
$route['EditRuangan/(:num)'] = 'Admin/Ruangan/EditRuangan/$1';
$route['TambahRuang'] = 'Admin/Ruangan/TambahRuangan';
$route['HapusRuangan/(:num)'] = 'Admin/Ruangan/DeleteRuangan/$1';
// End Ruangan Routes

// Start Ruangan Api
$route['RuanganApi']['GET'] = 'Admin/Ruangan_Api/index';
// End Ruangan Api

// Start Department Routes
$route['Departemen'] = 'Admin/Departemen/index';
$route['TambahDepartmen'] = 'Admin/Departemen/tambahD';
$route['EditDepartmen/(:num)'] = 'Admin/Departemen/editD/$1';
 $route['HapusDepartemen/(:num)'] = 'Admin/Departemen/hapusD/$1';
// End Department Routes

// Start User Routes
$route['User'] = 'Admin/User/index';
$route['TambahUser'] = 'Admin/User/tambahU';
$route['EditUser/(:num)'] = 'Admin/User/editU/$1';
$route['HapusUser/(:num)'] = 'Admin/User/hapusU/$1';
// End User Routes

$route['banners'] = 'BannerController/index';