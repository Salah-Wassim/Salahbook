<?php
    session_start();
    define('salt_token', '2551d67a269b3d55829a89059da19124c6f9ca3bece439dab48b034c3528a4ef58832b1384ffbfbfe350e9e4f1892e9d65e58d72612edcb83947e9cb3669ed81');
    include "connexion.php";
    include "forgetpassword.php";
    include "inscription.php";
    include "logout.php";
    include "page2.php";
    include "reset.php";
    include "test.php";
?>