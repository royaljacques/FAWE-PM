<?php

namespace SuperNovX\FAWEPM;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase
{

    protected static $instance;

    public function onEnable()
    {
        self::$instance = $this;
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}