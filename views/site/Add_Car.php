<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Request;
?>
<?php
if ($marka_model && $color) { ?>
<p>Автомобиль сохранен:</p><br>
<p>
    Марка и модель: <?=$marka_model?><br>
Цвет: <?=$color?><br>
Год выпуска: <?=$year?><br>
Тип топлива: <?=$fuel?><br>
Расход топлива: <?=$rashod?> л/100км.<br>
Мощность: <?=$moschnost?> л.с.<br>
Регистрационный номер: <?=$reg_nomer?><br>
Цена: <?=$price?> $/сут.<br>
</p>
<?php } ?>

<?php $f = ActiveForm::begin(); ?>
<?= $f->field($Add_car,'marka_model')->label('Марка и модель')->input('string',[ 'value' =>  $_GET['marka_model']]) ?>
<?= $f->field($Add_car,'color')->label(Цвет)->input('string', ['value' =>  $_GET['color']])?>
<?= $f->field($Add_car,'year')->label('Год выпуска')->input('number', ['min' => 1970, 'max' => 2017, 'value' =>  $_GET['year']])?>
<?= $f->field($Add_car,'fuel')->label('Тип топлива')->input('string', ['value' =>  $_GET['fuel']])?>
<?= $f->field($Add_car,'rashod')->label('Расход топлива л\100км.')->input('real', ['min' => 3, 'max' => 25, 'value' =>  $_GET['rashod']])?>
<?= $f->field($Add_car,'moschnost')->label('Мощность л.с.')->input('number', ['min' => 50, 'max' => 1000, 'value' =>  $_GET['moschnost']])?>
<?= $f->field($Add_car,'reg_nomer')->label('Регистрационный номер')->input('string', ['value' =>  $_GET['reg_nomer']])?>
<?= $f->field($Add_car,'price')->label('Цена $\сут.')->input('real', ['min' => 1, 'max' => 1000, 'value' =>  $_GET['price']])?>
<?= Html::submitButton('Сохранить'); ?>

    <?php ActiveForm::end(); ?>








