<?php

namespace ceepkev77;

use pocketmine\command\Command;
use ceepkev77\CityBuild;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Night extends Command {

    public function __construct(CityBuild $pl) {
        $this->plugin = $pl;
        parent::__construct("night", "Macht Nacht!", "night");
        $this->setPermission("time.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if ($sender instanceof Player) {
            if ($sender->hasPermission("time.command")) {
                $sender->sendMessage(CityBuild::prefix . "§aDu hast §bNacht §agemacht!");
                $sender->getLevel()->setTime(16000);
            } else {
                $sender->sendMessage(CityBuild::prefix . "§cDafür hast du keine Rechte!");
            }
        } else {
            $sender->sendMessage(CityBuild::prefix . "§cBitte benutze den Command In-Game!");
        }
        return true;
    }
}
