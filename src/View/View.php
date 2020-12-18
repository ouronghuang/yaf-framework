<?php

namespace Orh\Yaf\View;

class View
{
    public static function make(string $name)
    {
        $engine = ucfirst(strtolower($name));
        $engine = "\\Orh\Yaf\View\\Engines\\{$engine}";

        return new $engine();
    }

    public static function __callStatic(string $name, array $arguments = [])
    {
        return self::make($name);
    }
}
