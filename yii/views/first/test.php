<?php 

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets;
echo $name;
echo "<pre>";
print_r($operations);
// /<?= DatePicker::widget(['name' => 'date'])  need to install yii\jui using composer after that it will work

?>
<h2>This is Test View</h2>

<?php 
$formatter = \Yii::$app->formatter;

// output: January 1, 2014
echo $formatter->asDate('2014-01-01', 'long');
//to add custom javascript for this particular page
// $this->registerJs('alert("ok");');

?>

