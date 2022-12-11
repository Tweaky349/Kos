<?php 

namespace Axew\Kos; 

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener; 
use pocketmine\command\Command;
use pocketmine\command\commandsender;

class Loader extends PluginBase implements Listener { 

    public function onEnable() : void{ 
        $this->getLogger()->info("Kos esta habilitado"); 
    } 

    public function onLoad() : void{ 
        $this->getLogger()->info("Kos esta cargando"); 
    } 

    public function onDisable() : void{ 
        $this->getLogger()->info("Kos está deshabilitado"); 
    } 
}
