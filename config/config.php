<?php

// Добавление тега <math> в разрешенные теги
$aAllowTags = Config::Get('jevix.default.cfgAllowTags');
$aAllowTags[0][0][] = 'math';
Config::Set('jevix.default.cfgAllowTags', $aAllowTags);

// в преформатированные
$aSetTagPreformatted = Config::Get('jevix.default.cfgSetTagPreformatted');
$aSetTagPreformatted[0][0][] = 'math';
Config::Set('jevix.default.cfgSetTagPreformatted', $aSetTagPreformatted);

// содержимое не типографировать
$aTagNoTypography = Config::Get('jevix.default.cfgSetTagNoTypography');
$aTagNoTypography[0][0][] = 'math';
Config::Set('jevix.default.cfgSetTagNoTypography', $aTagNoTypography);

// и не расставлять <br/>
$aSetTagNoAutoBr = Config::Get('jevix.default.cfgSetTagNoAutoBr');
$aSetTagNoAutoBr[0][0][] = 'math';
Config::Set('jevix.default.cfgSetTagNoAutoBr', $aSetTagNoAutoBr);

// обрабатываем содержимое тега фуловым калбеком
$aSetTagCallbackFull = Config::Get('jevix.default.cfgSetTagCallbackFull');
$aSetTagCallbackFull[0][] = array('math', 'CallbackTagMath');
Config::Set('jevix.default.cfgSetTagCallbackFull', $aSetTagCallbackFull);

// в калбеке добавляем спецификацию внутрь тега
function CallbackTagMath($sTag,$aParams,$content) {
    $ret = "<$sTag xmlns=\"http://www.w3.org/1998/Math/MathML\">$content</$sTag>";
    return $ret;
}