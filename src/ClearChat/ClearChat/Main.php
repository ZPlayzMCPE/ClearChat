<?php

namespace ClearChat\ClearChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\sound\LaunchSound;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener{
	
		public function onEnable(){
			$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if(strtolower($command->getName()) == "cc"){
			$senderName = $sender->getName();
			$this->getServer()->broadcastMessage("Chat Being cleared");
			$this->getServer()->broadcastMessage("this can lead to many things");
			$this->getServer()->broadcastMessage("Such as:");
			$this->getServer()->broadcastMessage("Advertising");
			$this->getServer()->broadcastMessage("Spamming");
			$this->getServer()->broadcastMessage("Swearing");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage(" ");
			$this->getServer()->broadcastMessage("§aClear Chat has been cleared by  §b$senderName");
			return true;
		}
	}
}
