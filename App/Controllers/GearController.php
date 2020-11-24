<?php

namespace Controllers;

class GearController implements ControllerInterface
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new GearController();
        }
        return self::$instance;
    }

    public function runCode()
    {
        // TODO: .... logic....
    }

}