<?php

use Models\Brand;
use Models\Stock;
use Models\Person;
use Models\Car;
use Models\Track;

require_once 'vendor/autoload.php';

$stock=new Stock();
$bmw=new Brand('BMW');
$mercedes=new Brand('Mercedes');
$vasya=new Person('Вася',90);
$ivan=new Person('Иван',80);
$car1=new Car($bmw,2000,$vasya);
$car2=new Car($mercedes,2100,$ivan,true,200);
$truck1=new Track($mercedes, 20000, $ivan, 15000);
$truck2=new Track($mercedes, 20000, $ivan, 15000,3);
$stock
    ->register($car1)
    ->register($car2)
    ->register($truck1)
    ->register($truck2)
;
?>
<html>
<table>
    <tr>
        <th>Марка</th>
        <th>Водитель</th>
        <th>Вес ТС</th>
    </tr>
    <?php
    foreach ($stock->getAll() as $transport) {
        ?>
    <tr>
        <td><?= $transport->getModel()?></td>
        <td><?= $transport->getPersonName()?></td>
        <td><?= $transport->getWeight()?></td>
    </tr>
    <?php
    }
    ?>

</table>
</html>
