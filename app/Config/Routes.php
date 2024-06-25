<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//user interface
$routes->get('home','UIController::home');
$routes->get('about','UIController::about');
$routes->get('contact','UIController::contact');
$routes->post('insertsubscribe','UIController::insertsubscribe');
$routes->post('insertcontact','UIController::insertcontact');





//login
$routes->get('login','LoginController::loginpage');
$routes->get('register','LoginController::registerpage');
$routes->post('insertregister','LoginController::insert_into_register');
$routes->post('checklogincredentials','LoginController::checklogincredentials');
$routes->get('logout','LoginController::logout');






//users
$routes->get('userhome','UserController::userhome');
//cloudapplication
$routes->get('cloudapplication','UserController::cloudapplication');
$routes->get('downloadcloudapplicationcontent/(:num)','UserController::downloadcloudapplicationcontent/$1');
//software
$routes->get('oraclesoftware','UserController::oraclesoftware');
$routes->get('downloadsoftwarecontent/(:num)','UserController::downloadsoftwarecontent/$1');
//hardware
$routes->get('oraclehardware','UserController::oraclehardware');
$routes->get('downloadhardwarecontent/(:num)','UserController::downloadhardwarecontent/$1');
//enterprise
$routes->get('oraclenterprise','UserController::oraclenterprise');
$routes->get('downloadenterprisecontent/(:num)','UserController::downloadenterprisecontent/$1');
//blockchain
$routes->get('oracleblockchain','UserController::oracleblockchain');
$routes->get('downloadblockchaincontent/(:num)','UserController::downloadblockchaincontent/$1');
//cloudinfra
$routes->get('oraclecloudinfra','UserController::oraclecloudinfra');
$routes->get('downloadcloudinfracontent/(:num)','UserController::downloadcloudinfracontent/$1');
//team
$routes->get('team','UserController::team');
//queryform
$routes->get('userqueryform','UserController::userqueryform');
$routes->post('insertquery','UserController::insertquery');





//newui
$routes->get('newui','NewUIController::newui');





//admin
$routes->get('adminhome','AdminController::home');
//cloudinfra
$routes->get('addcloudinfrastructure','AdminController::addcloudinfrastructure');
$routes->post('insertcloudinfrastructure','AdminController::insertcloudinfrastructure');
//cloudapplication
$routes->get('addcloudapplication','AdminController::addcloudapplication');
$routes->post('insertcloudapplication','AdminController::insertcloudapplication');
//software
$routes->get('addsoftware','AdminController::addsoftware');
$routes->post('insertsoftware','AdminController::insertsoftware');
//hardware
$routes->get('addhardware','AdminController::addhardware');
$routes->post('inserthardware','AdminController::inserthardware');
;//enterprise
$routes->get('addenterprise','AdminController::addenterprise');
$routes->post('insertenterprise','AdminController::insertenterprise');
//blockchain
$routes->get('addblockchain','AdminController::addblockchain');
$routes->post('insertblockchain','AdminController::insertblockchain');
//repair
$routes->get('repair','AdminController::repair');
//viewcontactform
$routes->get('viewcontactform','AdminController::viewcontactform');
$routes->get('deleteContact/(:num)','AdminController::deleteContact/$1');
$routes->get('printContact/(:num)','AdminController::printContact/$1');
//viewqueryform
$routes->get('viewqueryform','AdminController::viewqueryform');
$routes->get('deleteQuery/(:num)','AdminController::deleteQuery/$1');
$routes->get('printQuery/(:num)','AdminController::printQuery/$1');
//viewsubscribe
$routes->get('viewsubscribe','AdminController::viewsubscribe');
//developer
$routes->get('developer','AdminController::developer');






//demo
$routes->get('form','DemoController::form');
$routes->post('upload','DemoController::upload');
$routes->get('downloadcloud/(:num)', 'DemoController::download/$1');
//$routes->get('cloudinfra','DemoController::cloudinfra');


//Payment
$routes->get('pay','QRControlller::pay');
$routes->get('process','QRControlller::process');
$routes->get('success','QRControlller::success');
$routes->get('failure','QRControlller::failure');
