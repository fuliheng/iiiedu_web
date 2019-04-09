<?php
/* Smarty version 3.1.29, created on 2018-03-16 02:36:32
  from "/Library/WebServer/Documents/www/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aab2db01d67c7_47652458',
  'file_dependency' => 
  array (
    '5c0dfa3e1c81c31951f1d567b9c3fa61ebd8a662' => 
    array (
      0 => '/Library/WebServer/Documents/www/templates/index.html',
      1 => 1521094026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_5aab2db01d67c7_47652458 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div id="shop_head">
        <a href="index.php">
          <img src="images/001-01.png" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive">
        </a>
      </div>

      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
            <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } else { ?>
            主內容區
            <?php }?>
        </div>
        <div class="col-md-3 col-sm-4">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>

      <div id="shop_foot" >
        <div>宜蘭縣礁溪鄉林尾路160號U219</div>
        <div>電話：</div>
        <div>版權所有 copyright © 2016 AISA.org. All Rights Reserved. </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
