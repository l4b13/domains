<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class OnlineStore {
            protected $author;
            protected $productName;
            protected $discount;
            protected $price;
            public function __construct(string $author, string $productName, int $discount, int $price) {
                $this->author = $author;
                $this->productName = $productName;
                $this->discount = $discount;
                $this->price = $price;
            }
            public function getProduct() {
                return "<b>Автор:</b> ".$this->author."<br/><b>Наименование:</b> ".$this->productName."<br/><b>Цена в рублях с учетом скидки:</b> ".$this->price."<br/>";
            }
            public function getPrice() {
                return "<b>Цена без скидки:</b> ".$this->price."<br/>";
            }
        }

        class MusicStore extends OnlineStore {
            private $playTime;
            public function __construct(string $author, string $productName, int $discount, int $price, int $playTime) {
                parent::__construct($author, $productName, $discount, $price);
                $this->playTime = $playTime;
            }
            public function getProduct() {
                return parent::getProduct()."<b>Длительность в минутах: </b> ".$this->playTime."<br/>";
            }
        }

        class BookStore extends OnlineStore {
            private $publishingHouse;
            public function __construct(string $author, string $productName, int $discount, int $price, string $publishingHouse) {
                parent::__construct($author, $productName, $discount, $price);
                $this->publishingHouse = $publishingHouse;
            }
            public function getProduct() {
                return parent::getProduct()."<b>Издатель: </b> ".$this->publishingHouse."<br/>";
            }
        }

        $hsy = new MusicStore("Surf Curse", "Heaven Surrounds You", 10, 1400, 2274);
        $dr = new MusicStore("Blink-182", "Dude Ranch", 5, 1200, 2700);
        $idi = new BookStore("Лев Николаевич Толстой", "Идиот", 20, 800, "Бичик");
        $wf = new BookStore("Джек Лондон", "Белый клык", 0, 400, "Махаон");

        echo "<h3><b>Hello world! Lab 12</b></h3><br/>";
        echo $hsy->getProduct()."<br/>";
        echo $hsy->getPrice()."<br/>";
        echo $dr->getProduct()."<br/>";
        echo $dr->getPrice()."<br/>";
        echo $idi->getProduct()."<br/>";
        echo $idi->getPrice()."<br/>";
        echo $wf->getProduct()."<br/>";
        echo $wf->getPrice()."<br/>";
    ?>
</body>
</html>