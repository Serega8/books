<?if($products->count() > 0):?>
<br/>
<table border="0" width="100%"  cellpadding="0" cellspacing="10">
    <tr>
    <?foreach($products as $i => $product):?>
        <?if ($i % 3 == 0):?>
            </tr><tr>
        <?endif?>

       <td align="center" width="33%">
           
            <?=html::anchor("catalog/view/$cat/$product->id",
                    html::image('media/img/book.png', array('width' => '150')))?><br/>
                     <?=html::anchor("catalog/view/$cat/$product->id", "<h4>$product->title</h4><br/>")?>
            <div class="cost"><?=$product->cost?> руб.</div>
        </td>
        
    <?endforeach?>
    </tr>
</table>
<?else:?>
<div class="empty">Нет товаров в этой категории</div>
<?=$search_form?>
<?endif?>


