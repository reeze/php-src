--TEST--
JIT ASSIGN: 019
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.file_update_protection=0
opcache.jit_buffer_size=64M
;opcache.jit_debug=257
--EXTENSIONS--
opcache
--FILE--
<?php
function foo() {
    $c = array();
    $d =& $c;
    $a = 1;
    $b = 2;
    $c = $a = $b;
    var_dump($c, $d);
}
foo();
?>
--EXPECT--
int(2)
int(2)
