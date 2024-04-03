<?php

class Chicken extends Animal {
    public function produce() {
        return rand(0, 1);
    }
}