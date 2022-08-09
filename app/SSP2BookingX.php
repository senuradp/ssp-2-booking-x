<?php

namespace App;

class SSP2BookingX{

    private $version = '1.0.0';
    private $url;

    public function __construct(){

    }

    public function getUrl(){
        return $this-> url;
    }

    public function setUrl(string $url){
        $this-> url = $url;
    }

}

?>
