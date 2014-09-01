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
    if(!file_exists($this->getDataFolder() . "config.yml")) {
      @mkdir($this->getDataFolder());
      file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml"));
    }
    $c = yaml_parse(file_get_contents($this->getDataFolder() . "config.yml"));
    foreach ($c["Commands"] as $i) {
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new TimeCommand($this,$i["Command"]),$i["Time"] * 1200);
    }
  }
  public function runCommand($cmd) {
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(),$cmd);
  }
}
?>
