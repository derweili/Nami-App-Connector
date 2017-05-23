<?php

class NamiAppConnector{

    private $nami_connector;
    private $groups = array();


    function __construct( $nami_connector ){

        $this->nami_connector = $nami_connector;
        $this->get_groups();

    }


    private function get_groups(){

        

    }


}