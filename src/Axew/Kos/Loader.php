<?php 

namespace Axew\Kos; 

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener; 
use pocketmine\command\Command;
use pocketmine\command\commandsender;
use pocketmine\item\ItemIdentifier;
use refaltor\customitemapi\CustomItemAPI;
use refaltor\customitemapi\items\BaseItem;
use Refaltor\CustomItemAPI\Items\BasicItem

class Loader extends PluginBase implements Listener { 

    public function onEnable() : void{ 
        $this->getLogger()->info("Kos esta habilitado");
    } 

    public function onLoad() : void{ 
        $this->getLogger()->info("Kos esta cargando"); 
        $item = new BasicItem(new ItemIdentifier(1000,0),"Ejemplo", "apple", /*max stack size*/16);
        $item->addToServer();
    } 

    public function onDisable() : void{ 
        $this->getLogger()->info("Kos está deshabilitado"); 
    } 
}
