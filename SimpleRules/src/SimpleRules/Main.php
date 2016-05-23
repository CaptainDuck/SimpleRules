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
        $player = $this->getServer()->getPlayer($sender->getName());
        if ($player->hasPermission("simplerules.rules")){
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
          $sender->sendMessage(TextFormat::RED."No Permssion");

        }
        return true;

        //color translate from § to &
	
	public function translateColors($symbol, $message){
		$message = str_replace($symbol."0", TextFormat::BLACK, $message);
		$message = str_replace($symbol."1", TextFormat::DARK_BLUE, $message);
		$message = str_replace($symbol."2", TextFormat::DARK_GREEN, $message);
		$message = str_replace($symbol."3", TextFormat::DARK_AQUA, $message);
		$message = str_replace($symbol."4", TextFormat::DARK_RED, $message);
		$message = str_replace($symbol."5", TextFormat::DARK_PURPLE, $message);
		$message = str_replace($symbol."6", TextFormat::GOLD, $message);
		$message = str_replace($symbol."7", TextFormat::GRAY, $message);
		$message = str_replace($symbol."8", TextFormat::DARK_GRAY, $message);
		$message = str_replace($symbol."9", TextFormat::BLUE, $message);
		$message = str_replace($symbol."a", TextFormat::GREEN, $message);
		$message = str_replace($symbol."b", TextFormat::AQUA, $message);
		$message = str_replace($symbol."c", TextFormat::RED, $message);
		$message = str_replace($symbol."d", TextFormat::LIGHT_PURPLE, $message);
		$message = str_replace($symbol."e", TextFormat::YELLOW, $message);
		$message = str_replace($symbol."f", TextFormat::WHITE, $message);
		$message = str_replace($symbol."k", TextFormat::OBFUSCATED, $message);
		$message = str_replace($symbol."l", TextFormat::BOLD, $message);
		$message = str_replace($symbol."m", TextFormat::STRIKETHROUGH, $message);
		$message = str_replace($symbol."n", TextFormat::UNDERLINE, $message);
		$message = str_replace($symbol."o", TextFormat::ITALIC, $message);
		$message = str_replace($symbol."r", TextFormat::RESET, $message);
		return $message;
	}
    }
}
}
