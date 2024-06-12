<?php
require_once "DAOStudent.php";
session_start();

class controllerStudent
{
    function update()
    {

        $id=isset($_POST["id"])?$_POST["id"]:"";
        $ime=isset($_POST["ime"])?$_POST["ime"]:"";
        $prezime=isset($_POST["prezime"])?$_POST["prezime"]:"";
        $brIndeksa=isset($_POST["brIndeksa"])?$_POST["brIndeksa"]:"";

        if (!empty($id)&&!empty($ime)&&!empty($prezime)&&!empty($brIndeksa))
        {
            $dao=new DAOStudent();
            $postoji=$dao->studentExist($id);
            if($postoji==true)
            {
                $dao->update($id,$ime,$prezime,$brIndeksa);
                $_SESSION["korisnik_id"]=$id;
                $_SESSION["korisnik_ime"]=$ime;
                include "../public/prikaz.php";
            }
            else
            {
                $msg="Ne postoji student sa trazenim id";
                include "../public/viewForma.php";
            }
        }
        else
        {
            $msg="Morate popuniti sva polja";
            include "../public/viewForma.php";
        }
    }

    function logout()
    {
        if ($_SESSION["korisnik"]!="")
        {
            session_unset();
            session_destroy();
            include "../public/viewForma.php";
        }
    }
 
}






?>