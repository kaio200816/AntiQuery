<?php

namespace AntiQuery;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onQueryRegenerate(QueryRegenerateEvent $event): void {
        $queryInfo = $event->getQueryInfo();
        $queryInfo->setPlugins([]);
    }
}
