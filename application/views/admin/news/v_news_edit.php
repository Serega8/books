<br/>

<?if(isset($errors)):?>
    <? foreach($errors as $error):?>
        <div class="error"><?=$error?></div>
    <?endforeach;?>
<?endif;?>

<?=Form::open('admin/news/edit/'. $news['id'])?>
<table width="100%" cellspacing="3">
    <tr>
        <td ><?=Form::label('title', 'Название')?>:</td>
        <td><?=Form::input('title', $news['title'], array('size' => 100))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('date', 'Дата')?>:</td>
        <td><?=Form::input('date', $news['date'], array('size' => 100))?></td>
    </tr>
    <tr>
        <td valign="top"><?=Form::label('intro', 'Вступительный текст')?>:</td>
        <td><?=Form::textarea('intro', $news['intro'], array('cols' => 100, 'rows' => 10))?></td>
    </tr>
    <tr>
        <td valign="top"><?=Form::label('content', 'Основной текст')?>: </td>
        <td><?=Form::textarea('content', $news['content'], array('cols' => 100, 'rows' => 20))?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
</table>
<?=Form::close()?>

   