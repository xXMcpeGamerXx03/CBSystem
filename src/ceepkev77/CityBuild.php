<?php

namespace ceepkev77;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class CityBuild extends PluginBase implements Listener {
   public function onEnable(): void {
      $this->getServer()->getLogger()->notice(Main::prefix . "§aPlugin wurde geladen!")
      $this->getServer()->getPluginManager()->registerEvents($this, $this)
  }
}
public const prefix = "§8[§6CBSystem§8] ";
}
