<?php
require __DIR__ . '/../vendor/autoload.php';

var_dump(union_config('union.mid.test',''));
var_dump(union_config('union.mid.test.test',''));
var_dump(union_config('union.mid.test.test.test',[]));