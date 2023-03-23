<?php

class Prodotti
{
    public $name;
    public $price;
    public $for;
    public $pic;

    public function __construct(
        string $_name,
        float $_price,
        string $_for,
        string $_pic
    ) {
        $this->name = $_name;
        $this->price = $_price;
        $this->for = $_for;
        $this->pic = $_pic;
    }
}

class Cibo extends Prodotti
{
    public $rack;
    public $expir;

    public function __construct(
        string $_name,
        float $_price,
        string $_for,
        string $_pic,
        string $_rack,
        float $_expir,
    ) {
        parent::__construct($_name, $_price, $_for, $_pic);
        $this->rack = $_rack;
        $this->expir = $_expir;
    }
}
$my_meal = new Cibo("Crocchette", 4.99, "cat", "img", "scaffale C-15", 2023.03);

class Giochi extends Prodotti
{
    public $type;
    public $age;

    public function __construct(
        string $_name,
        float $_price,
        string $_for,
        string $_pic,
        string $_type,
        int $_age,
    ) {
        parent::__construct($_name, $_price, $_for, $_pic);
        $this->type = $_type;
        $this->age = $_age;
    }
}
$my_toy = new Giochi("Osso di gomma", 9.99, "dog", "img", "gommoso", 0);

class Cucce extends Prodotti
{
    public $material;
    public $builder;

    public function __construct(
        string $_name,
        float $_price,
        string $_for,
        string $_pic,
        string $_material,
        string $_builder,
    ) {
        parent::__construct($_name, $_price, $_for, $_pic);
        $this->material = $_material;
        $this->builder = $_builder;
    }
}
$my_cuccia = new Cucce("Cuccia in legno", 59.99, "dog", "img", "Legno", "artDog s.r.l");

// ARRAY DEI PRODOTTI:
$products = [
    $my_meal,
    $my_toy,
    $my_cuccia,
];
var_dump($products);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>php-oop-2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            //foreach ($products as $product) 
            //{echo $product;}
            ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="$pic" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">$name</h5>
                        <p class="card-text">$price</p>
                        <p class="card-text">$for</p>
                        <p class="card-text">$price</p>
                        <p class="card-text">$materials</p>
                        <p class="card-text">$building</p>
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>