<?php
/*
    Entending SmartyView
*/
class SlimmyView extends SmartyView 
{
    function __construct() {
        //setup properties
       parent::$smartyDirectory = './vendor/smarty/smarty/distribution/libs/';
       parent::$smartyTemplatesDirectory = 'views';
       parent::__construct();
    }

}
?>