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
			$this->getServer()->broadcastMessage("And more.");
			$this->getServer()->broadcastMessage("Chat being cleared by $senderName (..");
			$this->getServer()->broadcastMessage("Please wait...");
			$this->getServer()->broadcastMessage("Chat being removed by $senderName (...");
			$this->getServer()->broadcastMessage("This should work pretty quickly now.");
			$this->getServer()->broadcastMessage("Welcome to VoidfactionsPE! :) We're just fixing the chat.");
			$this->getServer()->broadcastMessage("Chat removed. Adding messages.");
			$this->getServer()->broadcastMessage("ClearChat plugin, updated by Zeao. ;)");
			$this->getServer()->broadcastMessage("ChatClear is a wonderful system. :D");
			$this->getServer()->broadcastMessage("Did you know, Minecraft was created in 2009?");
			$this->getServer()->broadcastMessage("Did you know, VoidFactionsPE was created just 1 year ago in March?");
			$this->getServer()->broadcastMessage("Welcome to Season 2! Built by our amazing staff team");
			$this->getServer()->broadcastMessage("Chat Clear is now being produced.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("Clearing Chat.");
			$this->getServer()->broadcastMessage("§aClear Chat has been cleared by §b$senderName");
			return true;
		}
	}
}
