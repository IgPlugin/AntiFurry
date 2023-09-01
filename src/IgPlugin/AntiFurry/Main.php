<?php

namespace IgPlugin\AntiFurry;

use pocketmine\event\PlayerChatEvent;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

public function onChat(PlayerChatEvent $event){
  $plr = $event->getPlayer();
$msg = $plr->getMessage();
  $cursedwords = "UwU" , "OwO";
  if (str_contains($msg , $cursedwords)){
$this->getServer()->getPlayer($plr)->kick("Ew, Go Away");
  
}
}
  public function onJoin(PlayerJoinEvent $event){
$plr = $event->getPlayer();
    $pname = $plr->getName();
$cursedwords = "UwU", "OwO", "furry";
    if (str_contains($pname, $cursedwords)){
$this->getServer()->getPlayer($plr)->kick("Ew, get outta here");
    }
  }

}

