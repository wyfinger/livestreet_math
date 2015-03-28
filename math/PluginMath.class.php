<?php
/*
 * Math for LiveStreet
 * Plugin for use math in topics in MathML format
 * (C) Wyfinger, wyfinger@yandex.ru
 *
 */

if (!class_exists('Plugin')) {
    die('You are bad hacker, try again, baby!');
}

class PluginMath extends Plugin {

    /**
     * Активация плагина
     * @return bool Удалось ли активизироваться
     */
    public function Activate() {
        return true;
    }

    /**
     * Инициализация плагина
     */
    public function Init() {
        parent::Init();
        // Внедряем свой JavaScript и Css на страницу
        $this->Viewer_AppendScript(Plugin::GetTemplateWebPath(__CLASS__) . 'js/math.js');
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath(__CLASS__) . 'css/math.css');
        if(Config::Get('plugin.math.use_mahjax')) {
            $this->Viewer_AppendScript('https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML', array('merge' => false));
        }
    }
}

?>