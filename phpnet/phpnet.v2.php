<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(int $baz);
}

// This will work
class c implements b
{
    public function foo()
    {
    }

    public function baz(int $baz)
    {
    }
}

// This will not work and result in a fatal error
class d implements b
{
    public function foo()
    {
    }

    public function baz(int $foo)
    {
    }
}

// Fatal error:
// Declaration of d::baz()
// must be compatible with that of b::baz()
// in /home/drupalpro/websites/plugin.dev/phpnet/phpnet.v2.php on line 27


$test = new c();
print_r($test);
