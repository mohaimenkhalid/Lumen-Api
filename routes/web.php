<?php
$router->get('/test', function(){
    return "Done";
});
$router->get('/chart-data', 'ChartDataController@onAllSelect');
$router->get('/client-review', 'ClientReviewController@onAllSelect');
$router->get('/contact', 'ContactController@onAllSelect');
$router->get('/course', 'CourseController@onAllSelect');
$router->get('/footer', 'FooterController@onAllSelect');
$router->get('/home', 'HomeController@onAllSelect');
$router->get('/information', 'InformationController@onAllSelect');
$router->get('/service', 'ServiceController@onAllSelect');
