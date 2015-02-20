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
     * Переопределяем класс ModuleText, т.к. нам нужен метод для обработчика тега <math> Jevix-а
     */
    protected $aInherits=array(
        'module'  =>array('ModuleText'=>'PluginMath_ModuleText')
    );

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
    }
}

?>