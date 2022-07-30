<?php
/* Smarty version 4.1.0, created on 2022-07-23 18:35:29
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dc23511646f0_92026130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea3e82b9595fa4fa1934d661fe60760ae064f9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\productos.tpl',
      1 => 1658261299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62dc23511646f0_92026130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="productos">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Productos</h1>
        <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
            <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                <select class="form-select form-select-lg mb-3" id="slTipoFormulario">
                    <option selected>Seleccione...</option>
                    <option value="1">Cargue masivo</option>
                    <option value="2">Producto unitario</option>

                </select>
            </div>
        </div>
        <section>
            <div class="formProductoUnitario">
                <form id="formRoles">
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">No item</label>
                                <input type="text" id="txtItem" name="txtItem">
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Referencia</label>
                                <input type="text" id="txtReferencia" name="txtReferencia">
                            </div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Descripcion</label>
                                <input type="text" id="txtDescripcion" name="txtDescripcion">
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Marca</label>
                                <input type="text" id="txtMarca" name="txtMarca">
                            </div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Sublinea</label>
                                <input type="text" id="txtSublinea" name="txtSublinea">
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Precio</label>
                                <input type="text" id="txtPrecio" name="txtPrecio">
                            </div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtItem">Cantidad</label>
                                <input type="text" id="txtCantidad" name="txtCantidad">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtDescripcion">Observacion</label>
                                <input type="text" id="txtObservacionProducto" name="txtObservacionProducto">
                            </div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            <div class="col-12">
                                <button class="btn btn-danger" id="btnGuardarProducto">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="formProductoArchivo">
                <form id="formInventario" enctype="multipart/form-data" method="POST">
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <input type='file' id='fileFacturas' class="form-control file-caption"
                                   accept=".csv" name='fileFacturas' value="Examinar"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtDescripcion">Observacion</label>
                                <input type="text" id="txtObservacion" name="txtObservacion">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger" id="btnGuardarArchivo">Guardar</button>
                    </div>
                </form>
            </div>
        </section>
        <table id="tblProductos" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Item</th>
                <th>Referencia</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Item</th>
                <th>Referencia</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Accion</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitud modificacion item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="txtIdProducto">
                    <input type="hidden" id="txtCantidadActual">
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="articulo"></div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtModificarCantidad">Cantidad</label>
                                <input type="text" id="txtModificarCantidad" name="txtModificarCantidad">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <select class="form-select form-select-lg mb-3" id="slUsuarioAprueba">
                                <option value="-1" selected>Seleccione...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USUARIOS_PERMISO_EDITAR']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value["primernombre"];?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value["segundonombre"];?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value["primerapellido"];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnSolicitar" class="btn btn-primary">Solicitar</button>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
