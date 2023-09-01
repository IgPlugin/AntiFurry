<?php

namespace IgPlugin\AntiFurry;

use pocketmine\event\PlayerChatEvent;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

public function onChat(PlayerChatEvent $event){
  $plr = $event->getPlayer();
$msg = $plr->getMessage():
  if (str_contains($msg , "UwU")){
$this->getServer()->getPlayer($plr)->kick("Ew, Go Away");
  
}
}
  public function onJoin(PlayerJoinEvent $event){
$plr = $event->getPlayer();
    $pname = $plr->getName();
$cursedwords = "UwU", "furry";
    if (str_contains($pname, $cursedwords)){
$this->getServer()->getPlayer($plr)->kick("Ew, get outta here");
    }
  }

}

