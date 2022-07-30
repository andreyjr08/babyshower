<?php
/* Smarty version 4.1.0, created on 2022-07-23 18:35:34
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dc2356a59a12_84490726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4930c11e50e28b17799d2934adcbb984fcde7b57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\inventario.tpl',
      1 => 1657254785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62dc2356a59a12_84490726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="inventario">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Productos</h1>
        <section>
            <form id="formInventario" enctype="multipart/form-data" method="POST">
                <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                    <input type='file' id='fileFacturas' class="form-control file-caption"
                           accept=".csv" name='fileFacturas' value="Examinar"/>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-danger" id="btnActualizar">Actualizar</button>
                </div>
            </form>
        </section>
        <table id="tblInventario" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Referencia</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Referencia</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Accion</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div><?php }
}
