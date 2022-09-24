<?php
$wishes = ['счастья', 'здоровья', 'богатства', 'терпения'];
$epithets =['бесконечного', 'крепгого', 'большого', 'великого'];

$name = readLine("Как Вас зовут? ");
$wishLimit = 3;
$wishChosen = [];

for ($i = 1; $i <= $wishLimit; $i++) {
    $wishChosen[] = $epithets[array_rand($epithets)] . " " . $wishes[array_rand($wishes)];
}

$lastWish = array_pop($wishChosen);

$text = "«Дорогой $name, от всего сердца поздравляю тебя с днем рождения, 
желаю " . implode(', ', $wishChosen) . " и " . $lastWish . "».";

echo $text;