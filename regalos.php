<html>
<head>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
<div id="regalos" class="container">
    <div class="row">
        <div class="col">
            <h1>Regalos</h1>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-6">
            <label for="txtDescripcion">Descripcion</label>
            <input type="text" class="form-control" id="txtDescripcion">
        </div>
        <div class="col-6">
            <label for="txtDescripcion">Categoria</label>
            <select class="form-select mb-4" id="slCategoria" aria-label=".form-select-lg example">
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
        </div>
    </div>
    <div class="row m-5">
        <div class="col">
            <table id="tblRegalos" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
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
<script type="text/javascript" src="js/regalos.js"></script>
</body>
</html>