<h2>Каталог</h2>
<div class="menu_links">
<? foreach($categories as $cat):?>
    <? if($select == $cat->id): ?>
        <?=HTML::anchor('catalog/cat/' . $cat->id, $cat->title, array('class' => 'select'));?>
    <? else:?>
        <?=HTML::anchor('catalog/cat/' . $cat->id, $cat->title);?>
    <? endif;?>
<? endforeach; ?>
</div>