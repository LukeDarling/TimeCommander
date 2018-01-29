<?php
namespace LDX\TimeCommander;

use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class TimeCommand extends PluginTask {
	public function __construct($plugin,$cmd) {
		$this->plugin = $plugin;
		$this->cmd = $cmd;
		$this->start = false;
		parent::__construct($plugin);
	}
	
	public function onRun(int $currentTick) {
		if($this->start) {
			$this->plugin->runCommand($this->cmd);
		}else{
			$this->start = true;
		}
	}
}