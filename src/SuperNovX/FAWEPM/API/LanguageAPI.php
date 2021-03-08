<?php

namespace SuperNovX\FAWEPM\API;

use pocketmine\utils\Config;
use SuperNovX\FAWEPM\Loader;

class LanguageAPI
{

    public $baseLang;
    public $basCfg;

    public function __construct()
    {
        $this->baseLang = new Config(Loader::getInstance()->getDataFolder() . self::getSelectedLanguage() . ".yml", Config::YAML);
    }

    public static function getAPI()
    {
        return new LanguageAPI();
    }

    public function getBaseLang(): Config
    {
        return $this->baseLang;
    }

    public static function translateString(string $msg): string
    {
        $pl = self::getAPI();
        if ($pl->translateStringX($msg) == false) {
            return false;
        }
        return $pl->translateStringX($msg);
    }

    public function translateStringX(string $msg): string
    {
        if ($this->baseLang->exists($msg)) {
            $message = $this->baseLang->get($msg);
            return $message;
        } else {
            return false;
        }
    }

    public static function getSelectedLanguage(): string
    {
        $cfg = new Config(Loader::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        if ($cfg->exists("language")) {
            $lang == $cfg->get("language");
            if ($lang == "deu" || $lang == "ger") {
                return "deu";
            } elseif ($lang == "eng" || $lang == "gb") {
                return "eng";
            } elseif ($lang == "fra" || $lang == "fra") {
                return "fra";
            } else {
                return false;
            }
        }
        return false;
    }
}
