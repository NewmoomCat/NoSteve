<?php
namespace NoSteve;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
class NoSteve extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::AQUA."NoSteve is Enable");
    }

    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::AQUA."NoSteve Plugin is Disable");
    }

    public function onPlayerPreLogin(PlayerPreLoginEvent $event)
    {
        if (strtolower($event->getPlayer()->getName()) === 'steve')
        {
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."禁止Steve加入游戏\n\n出错了");
        }
    }
}