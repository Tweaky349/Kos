<?php 

namespace Axew\Kos; 

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener; 
use pocketmine\command\Command;
use pocketmine\command\commandsender;
use pocketmine\utils\Text Format as TE; 

class Loader extends PluginBase implements Listener { 

    public function onEnable ( ) { 
        $this->getLogger()->info("Kos esta habilitado"); 
    } 

    public function onLoad ( ) { 
        $this->getLogger()->info("Kos esta cargando"); 
    } 

    public function onDisable ( ) { 
        $this->getLogger()->info("Kos está deshabilitado"); 
    } 
}
