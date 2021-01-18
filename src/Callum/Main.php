<?php

namespace Callum;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase as Plugins;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

use DevAkya\Command\Motd;

class Main extends PluginBase implements Listener {

	const PLUGIN_NAME = "MotdUI";

	public function onEnable() {
		$this->getLogger()->info("§aON");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getServer()->getCommandMap()->register("motd", new Commands\Motd($this));
	}

	public function onDisable() {
		$this->getLogger()->info("§cOFF");
	}
}
