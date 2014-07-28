<!--<a href="">Страницы</a><a href="">Новости</a><a href="">Статьи</a>-->
<? foreach($menu as $name => $men):?>
    <? if(in_array($select, $men)):?>
        <?=HTML::anchor('admin/' . $men[0], $name, array('class' => 'select'))?>
    <? else:?>
        <?=HTML::anchor('admin/' . $men[0], $name)?>
    <? endif;?>
<? endforeach; ?>
