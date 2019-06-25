<?php

require_once "vendor/autoload.php";

header('Content-Type: application/json');

try{
    $class = new \VMSConnect\Integrations\Digifort("192.168.7.211", [
        'auth' => [
            'user' => 'smartcam',
            'password' => 'scMunicipio2017!'
        ]
    ]);

    $files = $class->export("Entrada Pladema", \Carbon\Carbon::now(), \Carbon\Carbon::now(), "tmp_folder");
    var_dump($files);

}
catch(Exception $e)
{
    print_r($e);
}