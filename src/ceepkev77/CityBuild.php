<?php

namespace ceepkev77;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class CityBuild extends PluginBase implements Listener {
   public function onEnable(): void {
      $this->getServer()->getLogger()->notice(CityBuild::prefix . "§aPlugin wurde geladen!");
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getServer()->getCommandMap()->register("day", new Day($this));
      $this->getServer()->getCommandMap()->register("night", new Night($this));
  }
   public const prefix = "§8[§6CBSystem§8] ";
}
