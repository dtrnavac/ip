<?php

session_start();

if($_SESSION["korisnik_id"]!="")
{

    $dao=new DAOStudent();
    echo $_SESSION["korisnik_id"];
    echo "<br>";
    echo $_SESSION["korisnik_ime"];
    echo "<br>";
}
else
{
    header("Location:../index.php");
}


?>