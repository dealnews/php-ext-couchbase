--TEST--
Arithmetic - IncrDecrNonexistPositionalOO

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("Arithmetic", "testIncrDecrNonexistPositionalOO");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Arithmetic", "testIncrDecrNonexistPositionalOO");
--EXPECT--
PHP_COUCHBASE_OK