<?php
/* Smarty version 4.1.0, created on 2022-07-23 20:35:47
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dc3f831e1c52_82451626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '141b2c959601fb4bbc6d8db519b7edcc91e1e31c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\inicio.tpl',
      1 => 1658600666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dc3f831e1c52_82451626 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electro</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/fontAwesome/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
<nav class="">
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
        <img src="./img/logo.png" class="logo" alt="">
        <h3 class="hide m-2">Rueda Negocio</h3>
    </div>

    <div>
            </div=>

    <div class="sidebar-links mt-3">
        <ul>
            <div class="active-tab"></div>
            <?php if (in_array(1,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" class="active" data-active="0" data-page="Roles">
                        <div class="icon">
                            <i class='bx bx-id-card'></i>
                            <i class='bx bxs-id-card'></i>
                        </div>
                        <span class="link hide">Gestion Roles</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(2,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="1" data-page="Usuario">
                        <div class="icon">
                            <i class='bx bx-user'></i>
                            <i class='bx bxs-user'></i>
                        </div>
                        <span class="link hide">Gestion Usuario</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(3,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="2" data-page="Dashboard">
                        <div class="icon">
                            <i class='bx bx-bar-chart-square'></i>
                            <i class='bx bxs-bar-chart-square'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(4,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="#" data-active="3" data-page="Clientes">
                        <div class="icon">
                            <i class='bx bx-id-card'></i>
                            <i class='bx bxs-id-card'></i>
                        </div>
                        <span class="link hide">Clientes</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(5,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="4">
                    <a href="#" data-active="4" data-page="Productos">
                        <div class="icon">
                            <i class='bx bx-cart'></i>
                            <i class='bx bxs-cart'></i>
                        </div>
                        <span class="link hide">Productos</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(6,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="5">
                    <a href="#" data-active="5" data-page="Inventario">
                        <div class="icon">
                            <i class='bx bx-bar-chart-square'></i>
                            <i class='bx bxs-bar-chart-square'></i>
                        </div>
                        <span class="link hide">Inventario</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(7,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="6">
                    <a href="#" data-active="6" data-page="Ordenes">
                        <div class="icon">
                            <i class='bx bx-layer-minus'></i>
                            <i class='bx bxs-layer-minus'></i>
                        </div>
                        <span class="link hide">Ordenes</span>
                    </a>
                </li>
            <?php }?>
            <li class="tooltip-element" data-tooltip="6">
                <a href="#" data-active="6" data-page="OrdenesPendientes">
                    <div class="icon">
                        <i class='bx bx-layer-minus'></i>
                        <i class='bx bxs-layer-minus'></i>
                    </div>
                    <span class="link hide">Ordenes pendientes</span>
                </a>
            </li>
            <?php if (in_array(8,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="7">
                    <a href="#" data-active="7" data-page="AdminRol">
                        <div class="icon">
                            <i class='bx bx-bookmark-minus'></i>
                            <i class='bx bxs-bookmark-minus'></i>
                        </div>
                        <span class="link hide">Reportes</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(9,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="8">
                    <a href="#" data-active="8" data-page="notificaciones">
                        <div class="icon">
                            <i class='bx bx-bell'></i>
                            <i class='bx bxs-bell'></i>
                        </div>
                        <span class="link hide">Notificaciones</span>
                    </a>
                </li>
            <?php }?>
            <?php if (in_array(10,$_smarty_tpl->tpl_vars['OPCIONES']->value)) {?>
                <li class="tooltip-element" data-tooltip="9">
                    <a href="#" data-active="9" data-page="AdminRol">
                        <div class="icon">
                            <i class='bx bx-downvote'></i>
                            <i class='bx bxs-downvote'></i>
                        </div>
                        <span class="link hide">Exportacion pedidos</span>
                    </a>
                </li>
            <?php }?>
            <div class="tooltip z-index-1">
                <span class="show">Gestion Roles</span>
                <span>Gestion Usuario</span>
                <span>Dashboard</span>
                <span>Clientes</span>
                <span>Productos</span>
                <span>Inventario</span>
                <span>Ordenes</span>
                <span>Reportes</span>
                <span>Notificaciones</span>
                <span>Exportacion Pedidos</span>
            </div>
        </ul>

        
            </div>
    <div class="sidebar-footer">
        <a href="#" class="account tooltip-element" data-tooltip="0">
            <i class='bx bx-user'></i>
        </a>
        <div class="admin-user tooltip-element" data-tooltip="1">
            <div class="admin-profile hide">
                <img src="img/imagenPersona.png" alt="">
                <div class="admin-info">
                    <h3>Nombre: <?php echo $_smarty_tpl->tpl_vars['USUARIO']->value["nombre"];?>
</h3>
                    <h5>Rol: <?php echo $_smarty_tpl->tpl_vars['USUARIO']->value["rol"];?>
</h5>
                </div>
            </div>
            <a href="#" class="log-out" id="btnsalir">
                <i class='bx bx-log-out'></i>
            </a>
        </div>
        <div class="tooltip">
            <span class="show">Nombre: <?php echo $_smarty_tpl->tpl_vars['USUARIO']->value["nombre"];?>
</span>
            <span>Rol: <?php echo $_smarty_tpl->tpl_vars['USUARIO']->value["rol"];?>
</span>
        </div>
    </div>

</nav>

<main id="main" class="bg-light z-index-n1">
</main>
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/boostrap/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/sweetalert2/sweetalert2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/fontAwesome/all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/inicio.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/xy.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/themes/Animated.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/locales/es_ES.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/geodata/colombiaLow.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/amcharts5/notosans-sc.js"><?php echo '</script'; ?>
>
</html><?php }
}
