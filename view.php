<?php
require_once 'vendor/autoload.php';

use App\classes\prime;



if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
}
elseif (isset($_POST['prime']))
{
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';

}



