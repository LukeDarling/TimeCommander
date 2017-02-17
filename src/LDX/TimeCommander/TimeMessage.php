<?php
namespace NycuRO\TimeMessage;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
class TimeMessage extends PluginTask {
  public function __construct($plugin,$cmd) {
    $this->plugin = $plugin;
    $this->cmd = $cmd;
    $this->start = false;
    parent::__construct($plugin);
  }
  public function onRun($ticks) {
    if($this->start) {
      $this->plugin->sendMessage($this->msg);
    } else {
      $this->start = true;
    }
  }
}
?>
