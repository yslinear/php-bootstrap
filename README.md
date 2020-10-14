# PHP Bootstrap

## Requirements

- PHP 5.2 and above

## Setup

Include Bootstrap 4 by yourself.

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

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">PHP-bootstrap</a>
</nav>
<div class="container">
    <?php $bsCarousel->display(); ?>
</div>
```
