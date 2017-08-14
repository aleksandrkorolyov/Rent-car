<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
<?= $f->field($Add_car,'marka_model')->label('Марка и модель') ?>
<?= $f->field($Add_car,'color')->label(Цвет)?>
<?= $f->field($Add_car,'year')->label('Год выпуска')?>
<?= $f->field($Add_car,'fuel')->label('Тип топлива')?>
<?= $f->field($Add_car,'rashod')->label('Расход топлива л\100км.')?>
<?= $f->field($Add_car,'moschnost')->label('Мощность л.с.')?>
<?= $f->field($Add_car,'reg_nomer')->label('Регистрационный номер')?>
<?= $f->field($Add_car,'price')->label('Цена $\сут.')?>
<?= Html::submitButton('Добавить'); ?>

    <?php ActiveForm::end(); ?>








