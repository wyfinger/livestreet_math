<?php
if (!class_exists('Plugin')) {
    die('You are bad hacker, try again, baby!');
}

class PluginMathjax extends Plugin {

    /** Инициализация плагина */
    public function Init() {
        parent::Init();
        /** Для добавления кнопки в редатктор запустим скрипт, корректирующий markitup */
        $this->Viewer_AppendScript(dirname(__FILE__) . "/js/MathjaxScript.js");
        /** Добавление стилей */
        $this->Viewer_AppendStyle(dirname(__FILE__) . "/styles/style.css");
    }

}