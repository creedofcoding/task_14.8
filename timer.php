<?php
$datetime1 = new DateTime(date("H:i:s")); //Получаем текущее время
$datetime2 = new DateTime('23:59:59'); //Время, до которого действует акция

$interval1 = $datetime1->diff($datetime2); // И считаем разницу для времени

echo $interval1->format('Time remaining until the end of the promotion: %h h. %i min. %s sec.');
