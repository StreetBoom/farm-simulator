<?php

abstract class Animal {
    protected $id;

    public function __construct($id) {
        $this->id = $id;
    }

    // Метод для сбора продукции, переопределение в подклассах
    abstract public function produce();
}
