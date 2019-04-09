<?php
/* Smarty version 3.1.29, created on 2018-03-12 03:56:33
  from "/Library/WebServer/Documents/www/templates/index_side.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa5fa71da1b78_32500174',
  'file_dependency' => 
  array (
    '95452743f5b0ae482c2ac81ad476ad02b9da950e' => 
    array (
      0 => '/Library/WebServer/Documents/www/templates/index_side.html',
      1 => 1461110710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tools.html' => 1,
    'file:side_login.html' => 1,
  ),
),false)) {
function content_5aa5fa71da1b78_32500174 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
  <div class="panel-heading">功能表</div>
  <div class="panel-body">
    <?php if (isset($_smarty_tpl->tpl_vars['user_name']->value)) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tools.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
   </div>
</div><?php }
}
