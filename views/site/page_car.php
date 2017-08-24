<?php
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php
var_dump($avtos);
?>
<table border ="0"  cellspacing="100">

    <tr> <td align='left'><?=$avtos->marka_model?></td></tr>
    <tr><td><?=$avtos->color?></td></tr>
    <tr><td><?=$avtos->year?></td></tr>
    <tr><td><?=$avtos->fuel?></td></tr>
    <tr><td><?=$avtos->rashod?></td></tr>
    <tr><td><?=$avtos->moschnost?></td></tr>
    <tr><td><?=$avtos->price?></td></tr>
    <tr><td><?=$avtos->place?></td></tr>

</table>