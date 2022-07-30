<?php
/* Smarty version 4.1.0, created on 2022-07-23 03:45:12
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62db52a8791ec0_54911575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2eda6b6ddd1bfd5cff2f4fd8348aa1b3c24166e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\dashboard.tpl',
      1 => 1656462832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62db52a8791ec0_54911575 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/dashboard.css">
<?php $_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="dashboard">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Dashboard</h1>
        <div id="chartdiv"></div>
    </div>
</div><?php }
}
