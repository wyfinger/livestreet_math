<?php
/**
 * Math for LiveStreet
 * Plugin for use math in topics in MathML format
 * (C) Wyfinger, wyfinger@yandex.ru
 *
 */


// Настройки Jevix

$aMathTag = 'math';
$aMathSubTags = array('maction','matrixrow','menclose','merror','mfenced','mfrac','mi','mmultiscripts',
    'mn','mo','mover','mphantom','mprescripts','mroot','mrow','mspace','msqrt','mstyle','msub',
    'msubsup','msup','mtable','mtd','mtext','mtr','munder','munderover');

// Разрешенные теги
$aAllowTags = array_merge(array($aMathTag),$aMathSubTags);

// Разрешённые параметры тегов
$aAllowTagParams = array(
    array(
        'math',
        array('dir', 'indentalign', 'overflow', 'wrs:positionable')
    ),
    array(
        'maction',
        array('actiontype')
    ),
    array(
        'menclose',
        array('notation')
    ),
    array(
        'mfenced',
        array('close', 'open', 'separators')
    ),
    array(
        'mfrac',
        array('bevelled', 'linethickness')
    ),
    array(
        'mi',
        array('mathcolor', 'mathsize', 'mathvariant')
    ),
    array(
        'mn',
        array('mathcolor', 'mathsize', 'mathvariant')
    ),
    array(
        'mo',
        array('largeop', 'lspace', 'mathcolor', 'rspace', 'stretchy')
    ),
    array(
        'mover',
        array('wrs:positionable')
    ),
    array(
        'mrow',
        array('wrs:positionable')
    ),
    array(
        'mspace',
        array('linebreak', 'width')
    ),
    array(
        'mstyle',
        array('displaystyle', 'indentalign', 'mathcolor', 'mathsize')
    ),
    array(
        'mtable',
        array('align', 'columnalign', 'columnlines', 'columnspacing', 'equalcolumns', 'equalrows', 'frame',
            'framespacing', 'rowalign', 'rowlines', 'rowspacing')
    ),
    array(
        'mtext',
        array('mathcolor', 'mathvariant')
    ),
    array(
        'munder',
        array('wrs:positionable')
    ),
);

// Вложенные теги, все теги MathML могут быть в теге math и друг в друге, но не вне тега math
$aTagChilds = array(array($aMathTag, $aMathSubTags, false, true));
foreach ($aMathSubTags as $sTag) {
    $aTagChilds[] = array($sTag, $aMathSubTags, false, true);
}

// Не нужна авто-расстановка <br>
$aTagNoAutoBr = array('math');

// Теги с обязательными параметрами
$aTagParamDefault = array(
        array('math','xmlns','http://www.w3.org/1998/Math/MathML',true)
    );

// Нетипографируемые теги
$aTagNoTypography = array('math');


// Загружаем конфиг Jevix
$aJevixConfig = Config::Get('jevix.default');

// Добавляем свои настройки
$aJevixConfig['cfgAllowTags'][0][0] = array_merge($aJevixConfig['cfgAllowTags'][0][0], $aAllowTags);
$aJevixConfig['cfgAllowTagParams'] = array_merge($aJevixConfig['cfgAllowTagParams'], $aAllowTagParams);
$aJevixConfig['cfgSetTagChilds'] = array_merge($aJevixConfig['cfgSetTagChilds'], $aTagChilds);
$aJevixConfig['cfgSetTagNoAutoBr'][0][0] = array_merge($aJevixConfig['cfgSetTagNoAutoBr'][0][0], $aTagNoAutoBr);
$aJevixConfig['cfgSetTagParamDefault'] = array_merge($aJevixConfig['cfgSetTagParamDefault'], $aTagParamDefault);
$aJevixConfig['cfgSetTagNoTypography'][0][0] = array_merge($aJevixConfig['cfgSetTagNoTypography'][0][0], $aTagNoTypography);

// Сохраняем
Config::Set('jevix.default',$aJevixConfig);

// Настройки самого плагина
$config['use_mahjax'] = true;  // Использовать MathJax для красивого отображения формул

return $config;

?>