--TEST--
Bug #68735 fileinfo out-of-bounds memory access
--SKIPIF--
<?php require_once(__DIR__ . '/skipif.inc'); ?>
--FILE--
<?php
	$test_file = __DIR__ . DIRECTORY_SEPARATOR . "bug68735.jpg";
	$f = new finfo;

	var_dump($f->file($test_file));

?>
===DONE===
--EXPECTF--
string(%d) "JPEG image data, JFIF standard 1.01, resolution (DPI), density 180x52, segment length 16, comment: "%S""
===DONE===
