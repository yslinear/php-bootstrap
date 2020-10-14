# PHP Bootstrap

## Requirements

- PHP 5.2 and above

## Setup

First of all, Include Bootstrap 4 by yourself.

```bash
composer require esangtek/php-bootstrap
```

## Usage

### initialize the class with Carousel HTML element ID prefix

```php
<?php
$bsCarousel = new Carousel();
$bsCarousel->init('prefix');
```

### add Item

```php
<?php
$bsCarousel->add('example.jpg', 'title', 'content');
```

### set carousel interval (default value: 5000)

```php
<?php
$bsCarousel->setCarouselInterval(2500);
```

### if you want to hide carousel control

```php
<?php
$bsCarousel->showIndicators(false);
```

### if you want to hide carousel indicators

```php
<?php
$bsCarousel->showIndicators(false);
```

## show Carousel in page

```php
<?php
$bsCarousel->display();
```

## Example

```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPbootstrap\Carousel;

$bsCarousel = new Carousel();
$bsCarousel->init('example')
    ->add('image1.png', 'title_1', 'content_1')
    ->add('image2.png', 'title_2', 'content_2')
    ->add('image3.png', null, 'content_3')
    ->add('image4.png', 'title_4')
    ->add('image5.png')
    ->showIndicators(false)
    ->showControl(false)
    ->setCarouselInterval(2000);
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">PHP-bootstrap</a>
</nav>
<div class="container">
    <?php $bsCarousel->display(); ?>
</div>
```
