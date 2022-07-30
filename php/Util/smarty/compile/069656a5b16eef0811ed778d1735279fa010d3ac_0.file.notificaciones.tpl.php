<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:51:12
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\notificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62db46003f27d2_07048140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069656a5b16eef0811ed778d1735279fa010d3ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\notificaciones.tpl',
      1 => 1658534694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62db46003f27d2_07048140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="notificaciones">
    <div class="container p-4 card text-center z-index-n1">
        <h1>Notificaciones</h1>
        <section>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTIFICACIONES']->value, 'notificacion');
$_smarty_tpl->tpl_vars['notificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notificacion']->value) {
$_smarty_tpl->tpl_vars['notificacion']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['notificacion']->value["tipo"] == 1) {?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['notificacion']->value["descripcion"];?>

                        <button class="btn btn-primary" data-id="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["iddocinventario"];?>
"
                                data-producto="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["producto"];?>
"
                                data-cantidadactual="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["cantidadactual"];?>
"
                                data-cantidadmodificacion="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["cantidadmodificacion"];?>
"
                                data-solicita="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["primernombre"];?>
 <?php echo $_smarty_tpl->tpl_vars['notificacion']->value["segundonombre"];?>
 <?php echo $_smarty_tpl->tpl_vars['notificacion']->value["primerapellido"];?>
"
                                id="btnVerificar">Verificar
                        </button>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['notificacion']->value["tipo"] == 2) {?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['notificacion']->value["descripcion"];?>

                        <button class="btn btn-success" data-id="<?php echo $_smarty_tpl->tpl_vars['notificacion']->value["id"];?>
">Eliminar</button>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
    </div>
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitud modificacion producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="txtIdProducto">
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtProducto">Producto</label>
                                <input type="text" id="txtProducto" name="txtProducto" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtCantidadActual">Cantidad Actual</label>
                                <input type="text" id="txtCantidadActual" name="txtCantidadActual" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtCantidadSolicitada">Cantidad Solicitada</label>
                                <input type="text" id="txtCantidadSolicitada" name="txtCantidadSolicitada" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtSolicitante">Solicitante</label>
                                <input type="text" id="txtSolicitante" name="txtSolicitante" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" id="btnSolicitar" class="btn btn-danger">Cancelar</button>
                    <button type="button" id="btnSolicitar" class="btn btn-primary">Aprobar</button>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
