<?php

echo "<pre>";

// ЗАДАНИЕ №1

class Rectangle
{
    public readonly float $width;
    public readonly float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}

echo "=== Задание №1 ===\n";
$rect = new Rectangle(5, 10);
echo "Ширина: " . $rect->width . "\n";
echo "Высота: " . $rect->height . "\n";
echo "Площадь: " . $rect->area() . "\n";

try {
    $rect->width = 20;
} catch (Error $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}


// ЗАДАНИЕ №2

class Counter
{
    private static int $count = 0;
    private int $number;

    public function __construct()
    {
        self::$count++;
        $this->number = self::$count;
    }
    
    public function getNumber(): int
    {
        return $this->number;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}

echo "\n=== Задание №2 ===\n";
$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();

echo "Объект №" . $c1->getNumber() . "\n";
echo "Объект №" . $c2->getNumber() . "\n";
echo "Объект №" . $c3->getNumber() . "\n";
echo "Всего создано: " . Counter::getCount() . "\n";


// ЗАДАНИЕ №3

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
    }

    public static function create(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __clone()
    {
        throw new Exception("Клонирование запрещено!");
    }
}

echo "\n=== Задание №3 ===\n";
$obj1 = Singleton::create();
$obj2 = Singleton::create();
echo "Объект 1: " . spl_object_id($obj1) . "\n";
echo "Объект 2: " . spl_object_id($obj2) . "\n";
echo "Это один и тот же объект: " . ($obj1 === $obj2 ? "Да" : "Нет") . "\n";

try {
    $obj3 = clone $obj1;
} catch (Exception $e) {
    echo "Ошибка клонирования: " . $e->getMessage() . "\n";
}


// ЗАДАНИЕ №4

interface Drawable
{
    public function draw(): string;
}

class Circle implements Drawable
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function draw(): string
    {
        return "Круг с радиусом " . $this->radius;
    }
}

class Square implements Drawable
{
    private float $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function draw(): string
    {
        return "Квадрат со стороной " . $this->side;
    }
}

echo "\n=== Задание №4 ===\n";
$circle = new Circle(5);
$square = new Square(4);
echo $circle->draw() . "\n";
echo $square->draw() . "\n";


// ЗАДАНИЕ №5

abstract class Animal
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function makeSound(): string;
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return $this->getName() . " говорит: Мяу!";
    }
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return $this->getName() . " говорит: Гав!";
    }
}

echo "\n=== Задание №5 ===\n";
$cat = new Cat("Барсик");
$dog = new Dog("Шарик");
echo $cat->makeSound() . "\n";
echo $dog->makeSound() . "\n";


// ЗАДАНИЕ №6

trait HasTimestamp
{
    private DateTime $createdAt;

    public function initTimestamp(): void
    {
        $this->createdAt = new DateTime();
    }

    public function getAge(): int
    {
        $now = new DateTime();
        return $now->getTimestamp() - $this->createdAt->getTimestamp();
    }
}

class Post
{
    use HasTimestamp;

    private string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->initTimestamp();
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}

echo "\n=== Задание №6 ===\n";
$post = new Post("Мой первый пост");
echo "Заголовок: " . $post->getTitle() . "\n";
echo "Возраст поста (секунд): " . $post->getAge() . "\n";

echo "</pre>";