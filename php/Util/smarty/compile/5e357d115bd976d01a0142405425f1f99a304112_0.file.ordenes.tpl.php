<?php
/* Smarty version 4.1.0, created on 2022-07-23 20:35:50
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\ordenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dc3f861d1671_84061050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e357d115bd976d01a0142405425f1f99a304112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\ordenes.tpl',
      1 => 1658600536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_css_js_includes.tpl' => 1,
  ),
),false)) {
function content_62dc3f861d1671_84061050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_css_js_includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="ordenes">
    <div class="container vh-100 p-4 card text-center z-index-n1">
        <h1>Ordenes</h1>
        <section>
            <form id="formOrdenes">
                <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="form-select form-select-lg mb-3" id="slClientes">
                            <option selected>Clientes...</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value["nombres"];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="infoCliente" id="infoCliente">
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtDescripcion">Documento</label>
                                <input type="text" id="txtDocumento" name="txtDocumento">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtNombre">Nombre</label>
                                <input type="text" id="txtNombre" name="txtNombre">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtCorreo">Correo</label>
                                <input type="text" id="txtCorreo" name="txtCorreo">
                            </div>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtCelular">Celular</label>
                                <input type="text" id="txtCelular" name="txtCelular">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtCupo">Cupo disponible</label>
                                <input type="text" id="txtCupo" name="txtCupo">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="datosOrden">
                    <hr>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <select class="form-select form-select-lg mb-3" id="slProductos">
                                <option value="-1" selected>Productos...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTOS']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value["descripcion"];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <select class="form-select form-select-lg mb-3" id="slLista">
                                <option value="-1" selected>Lista de precios...</option>
                                <option value="17">Lista 17</option>
                                <option value="18">Lista 18</option>
                                <option value="99">Lista 99</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtValorUnitario">Valor unitario</label>
                                <input type="text" id="txtValorUnitario" name="txtValorUnitario">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtDescripcion">Cantidad</label>
                                <input type="text" id="txtCantidad" name="txtCantidad">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 col-lg-1">
                            <button type="button" class="btn btn-primary" id="btnAdicionar">+</button>
                        </div>
                    </div>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <table id="tblProductosOrden" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>referencia</th>
                                    <th>descripcion</th>
                                    <th>cantidad</th>
                                    <th>valor unitario</th>
                                    <th>lista</th>
                                </tr>
                                </thead>
                                <tbody id="tbdProductosOrden">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row px-0 px-md-5 px-lg-5 mt-0 mt-md-3 mt-lg-3">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtFechaEntrega">Fecha entrega</label>
                                <input type="date" id="txtFechaEntrega" name="txtFechaEntrega">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtIva">Iva</label>
                                <input type="text" id="txtIva" name="txtIva">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="disenoInput">
                                <label class="disenoLabel" for="txtTotal">Total</label>
                                <input type="text" id="txtTotal" name="txtTotal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-danger" id="btnGuardar">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="modalProductos" data-bs-backdrop="static" tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" style="max-width: 60%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Listado productos orden</h5>
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <table id="tblProductosOrdenById" class="table-secondary" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>referencia</th>
                                            <th>descripcion</th>
                                            <th>cantidad</th>
                                            <th>valor unitario</th>
                                            <th>lista</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbdProductosOrdenById">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <table id="tblOrdenes" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
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
                <th>id</th>
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
