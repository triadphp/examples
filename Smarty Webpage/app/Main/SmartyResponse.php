<?php

namespace SmartyProject\Main;

use \Triad\Responses\HttpResponse;

class SmartyResponse extends HttpResponse {
    private $templateDir = null;
    private $compileDir = null;

    private $template = null;

    public function __construct($templateDir, $compileDir) {
        $this->templateDir = $templateDir;
        $this->compileDir = $compileDir;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function before() {
        $this->addHeader("X-Frame-Options: DENY");
        $this->addHeader("Content-type: text/html; charset=UTF-8");
    }

    public function outputBody() {
        // lazy load when outputing template
        require_once(LIBS_DIR . "/Smarty/libs/Smarty.class.php");
        $smarty = new \Smarty();
        $smarty->setTemplateDir($this->templateDir);
        $smarty->setCompileDir($this->compileDir);

        // assign data
        $smarty->assign($this->container);
        $template = !is_null($this->template) ? $this->template : "index";

        $smarty->muteExpectedErrors();
        $smarty->display($template . ".tpl");
    }
}
