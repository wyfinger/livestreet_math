<?php
/**
 * Math for LiveStreet
 * Plugin for use math in topics in MathML format
 * (C) Wyfinger, wyfinger@yandex.ru
 *
 */

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
$aSetTagCallbackFull[] = array('math', array('_this_','CallbackTagMath'));
Config::Set('jevix.default.cfgSetTagCallbackFull', $aSetTagCallbackFull);

?>