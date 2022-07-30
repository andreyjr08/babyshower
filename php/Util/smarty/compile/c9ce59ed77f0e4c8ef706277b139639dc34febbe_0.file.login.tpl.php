<?php
/* Smarty version 4.1.0, created on 2022-07-24 02:14:48
  from 'C:\xampp\htdocs\electroRuedaNegocio\tpl\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dc8ef88b2c95_36280432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ce59ed77f0e4c8ef706277b139639dc34febbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\electroRuedaNegocio\\tpl\\login.tpl',
      1 => 1656346631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dc8ef88b2c95_36280432 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="d-flex">
<div class="mx-auto w-100 d-flex align-items-center h-100" id="login">
    <div class="container w-50 bg-danger rounded shadow justify-content-center align-items-center">
        <div class="row align-items-lg-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white rounded-end">
                <div class="text-end">
                    <img src="" alt="" width="48">
                </div>
                <h2 class="fw-bold text-center ">Bienvenido</h2>
                <form  id="frmLogin" action=" " class="p-5 mb-4">
                    <div class="mb-4">
                        <div class="disenoInput">
                            <label for="usuario" class="disenoLabel">Usuario</label>
                            <input type="email" id="usuario" name="usuario" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="disenoInput">
                            <label for="contrasena" class="disenoLabel">Constraseña</label>
                            <input type="password" id="contrasena" name="contrasena">
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-danger" id="btnsubmit">Iniciar sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/sweetalert2/sweetalert2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/fontAwesome/all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</html><?php }
}
