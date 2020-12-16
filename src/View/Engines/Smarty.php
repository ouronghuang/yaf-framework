<?php

namespace Orh\Yaf\View\Engines;

use Yaf\Registry;
use Yaf\View_Interface;

class Smarty extends \Smarty implements View_Interface
{
    public function __construct()
    {
        parent::__construct();

        $config = Registry::get('config')->smarty;

        $this->setTemplateDir($config->templateDir);
        $this->setCompileDir($config->compileDir);
        $this->setConfigDir($config->configDir);
        $this->setCacheDir($config->cacheDir);
    }

    public function render($tpl, $tplVars = null)
    {
        $this->display($tpl);
    }

    public function setScriptPath($templateDir)
    {
    }

    public function getScriptPath($request = null)
    {
    }
}
