<?php
namespace LDX\TimeCommander;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class TimeCommand extends Task {
	public function __construct($plugin,$cmd) {
		$this->plugin = $plugin;
		$this->cmd = $cmd;
		$this->start = false;
	}
	
	public function onRun(int $currentTick) {
		if($this->start) {
			$this->plugin->runCommand($this->cmd);
		}else{
			$this->start = true;
		}
	}
}