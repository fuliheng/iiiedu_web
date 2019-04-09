<?php
/* Smarty version 3.1.29, created on 2018-03-12 03:56:33
  from "/Library/WebServer/Documents/www/templates/side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa5fa71da5f46_02500017',
  'file_dependency' => 
  array (
    'd8ea9211ce2ffb14992edb79ede54b27b84717dc' => 
    array (
      0 => '/Library/WebServer/Documents/www/templates/side_login.html',
      1 => 1461110541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa5fa71da5f46_02500017 ($_smarty_tpl) {
?>
<form action="index.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-4 control-label">帳號：</label>
    <div class="col-md-8">
      <input type="text" name="user_name" value="" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4"></label>
    <div class="col-md-8">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form><?php }
}
