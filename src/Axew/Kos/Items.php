use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\Item;

class ExampleItem extends Item implements ItemComponents {
	use ItemComponentsTrait;
	public function __construct(ItemIdentifier $identifier, string $name = "Unknown") {
		parent::__construct($identifier, $name);
		$this->initComponent("example_item", 64);
	}
}
