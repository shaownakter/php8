<?php
require_once 'vendor/autoload.php';

use App\classes\calculator;
use app\classes\Prime;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
       include "pages/home.php";
    }
    elseif ($_GET['pages'] == 'home')
    {
        include "pages/prime.php";
    }
}
elseif (isset($_POST['btn']))
{
    $calculator = new calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';

}

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
    elseif ($_GET['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
}
elseif (isset($_POST['btn']))
{
    $prime = new prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';

}




