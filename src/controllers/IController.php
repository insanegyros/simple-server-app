<?php
interface IController {
    public function __construct(array $environment);
    public function render();
}