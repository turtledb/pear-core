--TEST--
PEAR_Config->getLayers()
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
?>
--FILE--
<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';
$config = new PEAR_Config;
$phpunit->assertEquals(array (
  0 => 'user',
  1 => 'system',
), $config->getLayers(), 'layers');
echo 'tests done';
?>
--EXPECT--
tests done
