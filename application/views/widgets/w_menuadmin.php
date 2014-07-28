<!--<a href="/admin">Главная</a><a href="/admin/orders">Заказы</a><a href="/admin/pages">Страницы</a><a href="/admin/products">Товары</a><a href="/admin/users">Пользователи</a><a href="/admin/settings">Настройки</a>-->
<?=HTML::anchor('', HTML::image('media/img/home.png'))?>
<? foreach($menu as $name => $men):?>
    <? if(in_array($select, $men)):?>
        <?=HTML::anchor('admin/' . $men[0], $name, array('class' => 'select'))?>
    <? else:?>
        <?=HTML::anchor('admin/' . $men[0], $name)?>
    <? endif;?>
<? endforeach; ?>



