<?php
namespace NycuRO\TimeMessage;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecuter;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
class Main extends PluginBase {
  public function onEnable() {
    $this->saveDefaultConfig();
    $c = $this->getConfig()->getAll();
    foreach ($c["Messages"] as $i) {
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new TimeMessage($this,$i["Message"]),$i["Time"] * 1200);
    }
  }
  public function sendMessage($msg) {
    $this->getServer()->broadcastMessage($msg, $level->getPlayers());
  }
}
?>
