use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\Item;

class ExampleItem extends Item implements ItemComponents {
	use ItemComponentsTrait;
	public function __construct(ItemIdentifier $identifier, string $name = "customies:Pico-Hacha_de_los_enanos") {
		parent::__construct($identifier, $name);
		$this->initComponent("customies:Pico-Hacha_de_los_enanos", 1);
	}
}
