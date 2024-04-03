<?php

class Farm {
    private $animals = [];
    private $production = ['milk' => 0, 'eggs' => 0];

    // добавление животного на ферму
    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    // сбор продукции со всех животных
    public function collectProducts() {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Cow) {
                $this->production['milk'] += $animal->produce();
            } elseif ($animal instanceof Chicken) {
                $this->production['eggs'] += $animal->produce();
            }
        }
    }

    // получение количества животных по типу
    public function getCountByType($type) {
        return count(array_filter($this->animals, function($animal) use ($type) {
            return $animal instanceof $type;
        }));
    }

    // вывод общего количества собранной продукции
    public function getProduction() {
        return $this->production;
    }

    // Сброс счетчика
    public function resetProduction() {
        $this->production = ['milk' => 0, 'eggs' => 0];
    }
}
