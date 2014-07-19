88
<!DOCTYPE html>
<html>
    <head>
        <title><?=$site_name?> | <?=$page_title?></title>
         <meta content="text/html; charset=utf-8">
         <? foreach($styles as $file_style):?>
            <?=HTML::style($file_style)?>
         <? endforeach;?>
         <? foreach($scripts as $file_script):?>
            <?=HTML::script($file_script)?>
         <? endforeach;?>
    </head>
    <body>
        <center>
            <table align="center" border="1" width="790" cellpadding="0">
                <thead>
                    <tr>
                        <th align="left" colspan="3">
                            <div id="head">
                                <a href="/"><h1><?=$site_name?></h1></a>
                                <h3><?=$site_description?></h3>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr valing="top">
                        <!--левый блок-->
                        <? if(isset($block_left)):?>
                        <td width="230">
                            <? foreach($block_left as $lblock):?>
                                <?=$lblock?>
                            <? endforeach;?>
                        </td>
                        <? endif;?>
                        <!--левый блок-->
                        
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
                        
                        <!--правый блок блок-->
                            <? if(isset($block_right)):?>
                                <td width="200">
                                    <? foreach($block_right as $rblock):?>
                                        <?=$rblock?>
                                    <? endforeach;?>
                                </td>
                            <? endif;?>
                        <!--правый блок блок-->
                    </tr>
                    <tr align="center">
                        <td colspan="3" id="footer">
                            Copyright
                        </td>
                    </tr>
                </tbody>
            </table>
        
    </body>
</html>