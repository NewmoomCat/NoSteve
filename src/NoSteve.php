<?php
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

/*
 * @name NoSteve
 * @main NoSteve\NoSteve
 * @version 7
 * @api [2.0.0, 2.1.0, 3.0.0, 3.0.1]
 * @author NewmoonNeko
 */

class NoSteve extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::AQUA."NoSteve Plugin is Enable");
    }

    public function onDisable()
    {
        $this->getServer()->getLogger()->info(TextFormat::AQUA."NoSteve Plugin is Disable");
    }

    public function onJoin(PlayerPreLoginEvent $event)
    {
        if (strtolower($event->getPlayer()->getName()) === 'steve')
        {
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."禁止使用默认Steve名称进入游戏\n请到游戏设置进行更改\n\n出错了");
        }
        $noName = array('nazi', 'hitler', 'chinaman', 'maruta', 
                        '731', 'nigger', 'colie', 'ting_tong', 
                        'ching_chong', 'gook', 'gook_eye', 'gooky',
                        'chick', 'minecraftcccp', 'dick', 'fuck',
                       'bitch');
        if (in_array(strtolower($event->getPlayer()->getName()), $noName))
        {
            $event->setCancelled();
            $event->setKickMessage(TextFormat::RED."你使用了违规名称\n\n出错了");
        }
    }

}

