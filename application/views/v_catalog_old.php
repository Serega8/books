<table border="1" width="100%" class="tb1" cellpadding="0">
    <thead>
        <tr >
            <th >Наименование</th>
            <th>Цена</th>
        </tr>
    </thead>
    <tbody>
        <? foreach($products as $product => $cost):?>
            <tr>
                <td><?=$product?></td>
                <td align="center"><?=$cost?> руб.</td>
            </tr>
        <? endforeach;?>
    </tbody>
</table>