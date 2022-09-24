<?php
$studentntsList = [
    'Группа1' => [
        'Попов Алексей Семенович' => 2,
        'Краснова Ирина Дмитриевна' => 4,
        'Моргунов Альберг Семенович' => 3,
        'Петрова Алла Павловна' => 4,
        'Иванов Иван Иванович' => 1,
    ],
    'Группа2' => [
        'Петров Петр Денисович' => 5,
        'Галкина Раиса Петровна' => 4,
        'Загребина Лариса Станиславовна' => 1,
        'Изольдов Игорь Алексеевич' => 2
    ]
];

$exclude = [];
$averageGrade = [];

foreach ($studentntsList as $group => $groups) {
    $averageGrade[$group] = array_sum($groups) / count($groups);

    foreach ($groups as $studentName => $ball) {
        if ($ball < 3) {
            $exclude[$group][] = $studentName;
        }
    }
}

$topGroup = array_keys($averageGrade, max($averageGrade))[0];

echo "Наивысший средний бал у группы:\n $topGroup = $averageGrade[$topGroup] ;" . PHP_EOL;
echo "Список студентов на отчисление:" . PHP_EOL;
print_r($exclude);