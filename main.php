<?php



require 'src/Animal/Animal.php';
require 'src/Animal/Cow.php';
require 'src/Animal/Chicken.php';
require 'src/Farm.php';

// экземпляр фермы
$farm = new Farm();

// добавляем животных на ферму
for ($i = 1; $i <= 10; $i++) {
    $farm->addAnimal(new Cow($i));
}
for ($i = 1; $i <= 20; $i++) {
    $farm->addAnimal(new Chicken($i));
}

// количесто животных на ферме
echo "На ферме животных: " . PHP_EOL;
echo "Коров: " . $farm->getCountByType('Cow') . PHP_EOL;
echo "Кур: " . $farm->getCountByType('Chicken') . PHP_EOL;

// Собираем продукцию за неделю
for ($day = 1; $day <= 7; $day++) {
    $farm->collectProducts();
}

// количество собранной продукции
$production = $farm->getProduction();
echo "Собрано за неделю: " . PHP_EOL;
echo "Молока: {$production['milk']} литров" . PHP_EOL;
echo "Яиц: {$production['eggs']} штук" . PHP_EOL;

// добавляем дополнительных животных
$farm->addAnimal(new Cow(11));
for ($i = 21; $i <= 25; $i++) {
    $farm->addAnimal(new Chicken($i));
}

// обновленная информацию о животных
echo "После покупки на рынке: " . PHP_EOL;
echo "Коров: " . $farm->getCountByType('Cow') . PHP_EOL;
echo "Кур: " . $farm->getCountByType('Chicken') . PHP_EOL;

// количество собранной продукции за еще одну неделю
$farm->resetProduction();
for ($day = 1; $day <= 7; $day++) {
    $farm->collectProducts();
}

// общее количество собранной продукции за вторую неделю
$production = $farm->getProduction();
echo "Собрано за вторую неделю: " . PHP_EOL;
echo "Молока: {$production['milk']} литров" . PHP_EOL;
echo "Яиц: {$production['eggs']} штук" . PHP_EOL;

?>
