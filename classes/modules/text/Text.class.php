<?php
/**
 * Math for LiveStreet
 * Plugin for use math in topics in MathML format
 * (C) Wyfinger, wyfinger@yandex.ru
 *
 */

class PluginMath_ModuleText extends Math_Inherit_ModuleText {

    /**
     * Обработка тега math в тексте, внутри удаляются все теги, не начинающиеся с "m"
     * @param $sTag Тег на ктором сработал колбэк
     * @param $aParams Список параметров тега
     * @param $content Содержимое тега
     * @return string Результат
     */
    public function CallbackTagMath($sTag,$aParams,$content) {
        $content = preg_replace('%</?[^m/].*?>%im', '', $content);
        return "<$sTag xmlns=\"http://www.w3.org/1998/Math/MathML\">$content</$sTag>";
    }

}

?>