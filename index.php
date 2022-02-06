

<?php

    require_once 'vendor/autoload.php';
    use App\classes\home;
    use App\classes\PasswordGenerator;

    $home = new Home();
    $home->index();
