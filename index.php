<?php

class Prodotti
{
    public $name;
    public $price;
    public $for;
    public $pic;
    protected $codice;

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
        $this->codice = 123;
    }

    public function getCodice()
    {
        return $this->codice;
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

$my_meal = new Cibo("Crocchette Super", 4.99, "gatto", "./food.gatto.webp", "scaffale C-15", 2023.03);
$my_toy = new Giochi("Osso di gomma", 9.99, "cane", "./bones.jpg", "gommoso", 0);
$my_cuccia = new Cucce("Cuccia in legno", 59.99, "cane", "./cuccia.webp", "Legno", "artDog s.r.l");

// ARRAY DEI PRODOTTI:
$products = [
    $my_meal,
    $my_toy,
    $my_cuccia,
];
//var_dump($products);
//echo $produc->name;
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
    <div class="container bg-secondary p-5">

        <div class="row ">
            <h1 class="text-center m-4">PET SHOP</h1>
            <?php foreach ($products as $product) : ?>
                <div class="col justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->pic; ?>" class="card-img-top w-50" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <?php echo $product->name; ?></h5>
                            <p class="card-text">Prezzo: <?php echo $product->price ?> $</p>
                            <p class="card-text">Per il tuo <?php echo $product->for ?></p>

                            <?php if ($product instanceof Cibo) : ?>
                                <p class="card-text">Scadenza: <?php echo $product->expir ?></p>
                                <p class="card-text">Scaffale: <?php echo $product->rack ?></p>
                            <?php endif; ?>

                            <?php if ($product instanceof Giochi) : ?>
                                <p class="card-text">Tipo: <?php echo $product->type ?></p>
                                <p class="card-text">Età: <?php echo $product->age ?></p>
                            <?php endif; ?>

                            <?php if ($product instanceof Cucce) : ?>
                                <p class="card-text">Materiale: <?php echo $product->material ?></p>
                                <p class="card-text">Costruttore: <?php echo $product->builder ?></p>
                            <?php endif; ?>

                            <a href="#" class="btn btn-primary">Aggiunci al carrello</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>