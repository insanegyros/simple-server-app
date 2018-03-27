<?php
interface IController {
    public function __construct(Container $container);
    public function render();
}