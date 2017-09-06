<?php
class machine {
    public $car_name = "Название автомобиля";
    public function getInfo() {
        return "{$this->car_name}" . "<br>";
    }
}

$car1 = new machine();
$car2 = new machine();

$car1->car_name="Opel";
$car2->car_name="Audi";

echo "Ваш выбор: {$car1->getInfo()}";


class tv {
    public $tv_name = "Название телевизора";
    public function getInfo() {
        return "{$this->tv_name}" . "<br>";
    }
}

$tv1 = new tv();
$tv2 = new tv();

$tv1->tv_name="Sony";
$tv2->tv_name="Samsung";

echo "Ваш выбор: {$tv2->getInfo()}";

class pen {
    public $pen_name = "Название ручки";
    public function getInfo() {
        return "{$this->pen_name}" . "<br>";
    }
}

$pen1 = new pen();
$pen2 = new pen();

$pen1->pen_name="Parker";
$pen2->pen_name="Waterman";

echo "Ваш выбор: {$pen2->getInfo()}";

class duck {
    public $duck_name = "Имя утки";
    public function getInfo() {
        return "{$this->duck_name}" . "<br>";
    }
}

$duck1 = new duck();
$duck2 = new duck();

$duck1->duck_name="Donald";
$duck2->duck_name="Scrooge";

echo "Ваш любимый персонаж: {$duck1->getInfo()}";

class good {
    public $good_type= "Вид товара";
    public function getInfo() {
        return "{$this->good_type}" . "<br>";
    }
}

$good1 = new good();
$good2 = new good();

$good1->good_type="Laptop";
$good2->good_type="Smartphone";

echo "Вам нужен: {$good1->getInfo()}";

?>