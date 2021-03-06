<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/products/edit/' . $id)?>
<table width="100%" cellspacing="5">
    <tr>
        <td ><?=Form::label('title', 'Название')?>: <br/><?=Form::input('title', $data['title'], array('size' => 80))?></td>
        <td rowspan="3" valign="top">
        <?=Form::label('cat', 'Категории')?>: <br/><br/><?=Form::select('cat[]', $cats, $data['cat'], array('multiple' => 'multiple', 'size' => 5))?><br/><br/>
        <?=Form::label('cost', 'Цена')?>: <br/><br/><?=Form::input('cost', $data['cost'], array('size' => 20))?> руб.<br/><br/>
        <?=Form::label('status', 'Статус')?>:<br/><br/><?=Form::checkbox('status', 1, (bool) $data['status'])?> Активен
        </td>
    </tr>

    <tr>
        <td><?=Form::label('description', 'Описание')?>: <br/><?=Form::textarea('description', $data['description'], array('cols' => 80, 'rows' => 20))?></td>
    </tr>

    <tr>
        <td align="center"><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
</table>
<?=Form::close()?>
