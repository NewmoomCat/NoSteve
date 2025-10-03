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
            $event->setKickMessage(TextFormat::RED."Prohibit Steve from joining the game\n\nAn error occurred");
        }

        if (strtolower($event->getPlayer()->getName()) === 'nazi')
        {//防止某些人用纳粹和希特勒取名
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."This username is politically sensitive\n\nAn error occurred");
        }

        if (strtolower($event->getPlayer()->getName()) === 'hitler')
        {//同上
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."This username is politically sensitive\n\nAn error occurred");
        }

        if (strtolower($event->getPlayer()->getName()) === 'maruta')
        {//辱华名字
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."You are insulting China.\n\nAn error occurred");
        }

        if (strtolower($event->getPlayer()->getName()) === '731')
        {//每个中国人的伤痛
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."The Pain of the Chinese People\n\nAn error occurred");
        }

        if (strtolower($event->getPlayer()->getName()) === 'nigger')
        {//种族歧视
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."Racial discrimination\n\nAn error occurred");
        }
    }
}