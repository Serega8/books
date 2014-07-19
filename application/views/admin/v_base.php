<!DOCTYPE html>
<html>
<head>
    <title><?=$site_name?> | <?=$page_title?></title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
    
    <?foreach ($styles as $file_style):?>
        <?=HTML::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_script):?>
        <?=HTML::script($file_script)?>
    <?endforeach?>
</head>

    <body>
        <center>
        <div class="menu_admin"><?=$menu_admin?></div>
        <div id="main_content">
            <!--центральный блок-->
                <? if(isset($block_center)):?>
                    <td>
                        <h2><?=$page_title?></h2>
                        <? foreach($block_center as $cblock):?>
                            <?=$cblock?>
                        <? endforeach;?>
                    </td>
                <? endif;?>
            <!--центральный блок-->
        </div>
        </center>
    </body>
</html>