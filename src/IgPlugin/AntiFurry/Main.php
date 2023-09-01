<?php

namespace IgPlugin\AntiFurry;

use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public static function isCursedWords(string $string): bool {
		$cursedwords = ["UwU", "OwO", "furry"];
		foreach ($cursedwords as $cursedword) {
			if (str_contains($string, $cursedword)) {
				return true;
			} else {
				return false;
			}
		}
		return false;
	}

	public function onChat(PlayerChatEvent $event): void {
		$player = $event->getPlayer();
		$msg = $event->getMessage();
		if (self::isCursedWords($msg)) {
			$player->kick("Ew, Go Away");
		}
	}

	public function onJoin(PlayerJoinEvent $event): void {
		$player = $event->getPlayer();
		$playerName = $player->getName();
		if (self::isCursedWords($playerName)) {
			$player->kick("Ew, get outta here");
		}
	}
}
