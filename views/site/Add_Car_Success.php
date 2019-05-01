<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
use yii\helpers\Html;
?>
<p>Вы добавили автомобиль</p>

<ul>
    <li><label>Марка модель</label>: <?= Html::encode($model->marka_marka) ?></li>
    <li><label>Цвет</label>: <?= Html::encode($model->color) ?></li>
</ul>