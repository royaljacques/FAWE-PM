<?php

namespace SuperNovX\FAWEPM;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase
{

    protected static $instance;

    public function onEnable()
    {
        self::$instance = $this;
        $this->getLogger()->info("§a§aFAWE-PM was enable!");
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
    
    public function onDisble()
    {
        $this->getLogger()->info("§c§lFAWE-PM was disable!");
    }
}
