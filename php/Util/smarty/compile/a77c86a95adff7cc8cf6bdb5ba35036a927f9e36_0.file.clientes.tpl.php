<?php
/* Smarty version 4.1.0, created on 2022-07-22 03:08:27
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d9f88b66a027_69635729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77c86a95adff7cc8cf6bdb5ba35036a927f9e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\clientes.tpl',
      1 => 1657169307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62d9f88b66a027_69635729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="clientes">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Clientes</h1>
        <section>
            <form id="formRoles">
                <div class="row">
                    <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                        <div class="disenoInput">
                            <label class="disenoLabel" for="txtDocumento">Documento</label>
                            <input type="text" id="txtDocumento" name="txtDocumento">
                        </div>
                    </div>
                    <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-danger" id="btnActualizar">Actualizar</button>
                    </div>
                </div>
            </form>
        </section>
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Documento</th>
                <th>Nombres</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Correo</th>
                <th>Celular</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Documento</th>
                <th>Nombres</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Correo</th>
                <th>Celular</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div><?php }
}
