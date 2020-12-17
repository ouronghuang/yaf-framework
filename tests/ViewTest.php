<?php

namespace Orh\Yaf\Tests;

use Orh\Yaf\View\View;
use PHPUnit\Framework\TestCase;
use Yaf\Registry;

class ViewTest extends TestCase
{
    public function testSmarty()
    {
        $config = [
            'smarty' => [
                'templateDir' => 'template/',
                'compileDir' => 'compile/',
                'configDir' => 'config/',
                'cacheDir' => 'cache/',
            ],
        ];
        $config = json_decode(json_encode($config));
        Registry::set('config', $config);

        $smarty = View::smarty();

        $this->assertInstanceOf(\Smarty::class, $smarty);
    }
}
