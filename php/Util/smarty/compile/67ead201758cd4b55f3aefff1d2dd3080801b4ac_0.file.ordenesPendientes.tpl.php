<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:52:05
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\ordenesPendientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62db46357aa9f2_94286076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ead201758cd4b55f3aefff1d2dd3080801b4ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\ordenesPendientes.tpl',
      1 => 1658464048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62db46357aa9f2_94286076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="ordenesPendientes">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Ordenes pendientes</h1>
        <table id="tblOrdenesPendientes" class="display" style="width:100%">
            <thead>
            <tr>
                <th>hora</th>
                <th>fecha</th>
                <th>valor</th>
                <th>iva</th>
                <th>cliente</th>
                <th>vendedor</th>
                <th>accion</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>hora</th>
                <th>fecha</th>
                <th>valor</th>
                <th>iva</th>
                <th>cliente</th>
                <th>vendedor</th>
                <th>accion</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div><?php }
}
