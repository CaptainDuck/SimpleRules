<?php

namespace SimpleRules;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Server;
use pocketmine\plugin\pluginBase;

class Main extends PluginBase implements Listener{
	public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->saveDefaultConfig();
     $this->getServer()->getPluginManager()->registerEvents($this,$this); // THIS LINE
     $this->getLogger()->info(TextFormat::GREEN."SimpleRules Has Been Enabled!");
    }
    public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
    	if($cmd->getName() == "rules"){//EDIT COMMAND NAME
    		$sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#1"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#2"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#3"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#4"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#5"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#6"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#7"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#8"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#9"));
            $sender->sendMessage(TEXTFORMAT::GOLD . "- " . $this->getConfig()->get("rule#10"));
        }else{
    	     if(!$sender instanceof Player){ // Basically this checks if the Command Sender is NOT a player
          $sender->sendMessage(TextFormat::RED."Run Command In-Game");

        }
        return true;
    }
}
}