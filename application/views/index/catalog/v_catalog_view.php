<br/>
<table width="100%" border="0" cellpadding="10" cellspacing="10">
    <td width="150" align="center" valign="top">
        <?=html::image('media/img/book.png', array('width' => '150'))?>
        <div class="cost"><?=$product['cost']?> руб. </div>
        <?=html::image('media/img/buy.gif')?>
    </td>
    <td align="left" valign="top">
        <p><?=$product['description']?></p>
    </td>
</table>
<br/>

<?// print_r($comments);die;?>
<h3>Отзывы:</h3>
<? if (count($comments) > 0):?>
<?foreach($comments as $comment):?>
<div class="box">
    <h4><?//=$comment->name?></h4>
    <p><?=$comment->text?></p>
</div>
<?endforeach?>
<?else:?>
<div class="box">Нет отзывов</div>
<?endif?>