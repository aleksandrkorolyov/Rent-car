<?php
use yii\widgets\LinkPager;
use yii\db\ActiveRecord;d

?>


<h1>Автомобили</h1>
<table border ="0"  cellspacing="100">
<tr>
<th>Автомобиль</th>
<th>Цвет</th>
<th>Год выпуска</th>
<th>Тип топлива</th>
<th>Расход топлива, l\100km</th>
<th  margin-right = '10'>Мощность, л.с.</th>
<th>Цена , $\сут.</th>
<th>Место нахождения</th>
</tr>

<?php $i=1;
 foreach ($avtos as $avto) {
	$i=$i*(-1);
	if ($i<0)
	 $color = 255;
	else $color=230;?>
	<tr style= 'background:rgb(<?=$color?>,<?=$color?>,<?=$color?>)'>
 
<td align='left'><?=$avto->marka_model?></td>
<td><?=$avto->color?></td>
<td><?=$avto->year?></td>
<td><?=$avto->fuel?></td>
<td><?=$avto->rashod?></td>
<td><?=$avto->moschnost?></td>
<td><?=$avto->price?></td>
<td><?=$avto->place?></td>
<!--        <td>--><?//= html::a('Удалить', Url::to(['test/delete', 'id' => $avto->id])) ?><!--</td>>-->
</tr>



<?php } ?>
</tr>
</table>

<?=LinkPager::widget(['pagination' => $pagination])?>