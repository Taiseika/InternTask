<?php

$x = function ($a) {
    return  $a * 2;
};

 assert(true === is_callable($x));
 assert(4 == $x(2));

function foo($bar) {
    return $bar * 2;
}

$x = 'foo';

assert(true === is_callable($x));
assert(4 == $x(2));

class Foo {
    public static function bar() {
        return 42;
    }
}

$x = 'Foo::bar';

assert(true === is_callable($x));
assert(42 == call_user_func($x));

class Foo2 {

    public static function bar() {
        return 42;
    }

    public function baz() {
        return 1.46;
    }

}

assert(true === is_callable([Foo2::class, 'bar']));
assert(42 == call_user_func([Foo2::class, 'bar']));

$x = new Foo2;

assert(true === is_callable([$x, 'baz']));
assert(1.46 == call_user_func([$x, 'baz']));