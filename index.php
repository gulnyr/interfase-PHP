<?php

// Подписываем как-бы договор:)

interface Flower {
    public function grass();
    public function mushroom();
    public function nettle();
}

// Исполняем этот договор

class FlowerNew implements Flower {

    // Сделаем для примера простейший код, чтобы понять работу механизма

    public $a = 5;
    public $b = 10;

    // Здесь мы обязательно должны создать 3 метода, которые внесли в интерфейс
    // Если хотя-бы одну упустим, то будет фатальная ошибка

    public function grass() {
        return $this->a + $this->b;
    }
    public function mushroom() {
        return $this->a * $this->b;
    }
    public function nettle() {
        return $this->a / $this->b;
    }
}

// На этом все, создадим объект и любуемся результатом:)

$res = new FlowerNew();
echo 'Сложение: ' . $res->grass().'<br>';
echo 'Умножение: ' . $res->mushroom().'<br>';
echo 'Деление: ' . $res->nettle();

?>