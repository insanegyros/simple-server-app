<?php
abstract class BaseController implements IController {
    protected $env;
    public function __construct(array $environment){
        $this->env = $environment;
    }
}