# TimeCommander
| Description |
| ------------|
| **TimeCommander** is a pocketmine plugin for executing commands at a set interval, via console.


### How to use
- Simply place this plugin in your PMMP /plugins/ directory
- Restart your server so the files can generate.
- Edit config.yml with your commands & time intervals!
- Download the latest .phar here: https://poggit.pmmp.io/ci/LDX-MCPE/TimeCommander

### Example Config
```
# Config file for TimeCommander by LDX;

# List of commands for the plugin to execute at the given times;
# Command: Command to execute;
# Time: Amount of time in minutes between command executions;
Commands:
  - Command: save-all
    Time: 5
  - Command: lagg clear
    Time: 30
  - Command: say server is restarting in ONE minute
    Time: 59
  - Command: restart
    Time: 60
    ```
