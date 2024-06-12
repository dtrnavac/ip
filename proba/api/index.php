<?php
require 'flight/Flight.php';
require_once '../student/DAOStudent.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('GET /student/@id', function(){
    $dao=new DAOStudent();
    $result=$dao->getStudentById($id);
    echo json_encode($result);
});
Flight::route('PUT /student/@id', function(){
    $dao=new DAOStudent();
    var_dump(Flight::request()->data->ime);
    $ime=Flight::request()->data->ime;
    $prezime=Flight::request()->data->prezime;
    $brIndexa=Flight::request()->data->brIndeksa;
    $result=$dao->update($id,$ime,$prezime,$brIndeksa);
    echo json_encode($result);
});


Flight::start();
