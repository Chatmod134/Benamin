--TEST--
zend multibyte (3)
--EXTENSIONS--
mbstring
--INI--
zend.multibyte=On
zend.script_encoding=UTF-8
internal_encoding=EUC-JP
--FILE--
<?php
var_dump(bin2hex("ใในใ"));
?>
--EXPECT--
string(12) "a5c6a5b9a5c8"
