<?php
/* Smarty version 3.1.29, created on 2018-03-12 03:57:20
  from "/Library/WebServer/Documents/www/templates/side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa5faa09b9c00_16333606',
  'file_dependency' => 
  array (
    '9e56f09f90fe2c24dd110f69f46c4e34c0dfc48e' => 
    array (
      0 => '/Library/WebServer/Documents/www/templates/side_tools.html',
      1 => 1461110624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa5faa09b9c00_16333606 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

</div>
<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="tool.php?op=goods_form" class="btn btn-block btn-success">發布商品</a>
<a href="index.php?op=user_logout" class="btn btn-block btn-danger">登出</a><?php }
}
