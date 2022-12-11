<?php 

namespace Axew\Kos; 

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener; 
use pocketmine\command\Command;
use pocketmine\command\commandsender;
use customiesdevs\customies\item\CustomiesItemFactory;

class Loader extends PluginBase implements Listener { 

    public function onEnable() : void{ 
        $this->getLogger()->info("Kos esta habilitado"); 
        CustomiesItemFactory::getInstance()->registerItem(Item::class, "customies:Pico-Hacha_de_los_enanos", "Pico-Hacha de los enanos");
    } 

    public function onLoad() : void{ 
        $this->getLogger()->info("Kos esta cargando"); 
    } 

    public function onDisable() : void{ 
        $this->getLogger()->info("Kos está deshabilitado"); 
    } 
}
