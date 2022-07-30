<html>
<head>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
<div id="invitados" class="container">
    <div class="row">
        <div class="col">
            <h1>Invitados</h1>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-6">
            <label for="txtNombre">Nombres</label>
            <input type="text" class="form-control" id="txtNombres">
        </div>
        <div class="col-6">
            <label for="txtApellido">Apellidos</label>
            <input type="text" class="form-control" id="txtApellidos">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-12">
            <input type="text" class="form-control" id="txtLink" placeholder="Link...">
        </div>
    </div>
    <div class="row m-5">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
        </div>
    </div>
    <div class="row m-5">
        <div class="col">
            <table id="tblInvitados" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Accion</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="js/unpkg/uuid.js"></script>
<script type="text/javascript" src="js/invitados.js"></script>
</body>
</html>