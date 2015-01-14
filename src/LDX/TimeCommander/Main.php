<?php
namespace LDX\TimeCommander;
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
    foreach ($c["Commands"] as $i) {
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new TimeCommand($this,$i["Command"]),$i["Time"] * 1200);
    }
  }
  public function runCommand($cmd) {
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(),$cmd);
  }
}
?>
