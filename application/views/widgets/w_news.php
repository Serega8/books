
<h2>Новости магазина</h2>
<?foreach($news as $title => $content):?>
<br/>
<a href="/news"><h3><?=$title?></h3></a>
<p><?=$content?></p>
<?endforeach?>
