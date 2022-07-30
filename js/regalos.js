var Regalos = null;
let codigoRegalo = null;

$(function () {
    try {
        var _PAGE_ = $('#regalos');
        Regalos = {
            pp: {
                grid: null
            },
            init: function () {
                this.load();
                this.events();
                this.finish();

            },
            load: function () {
                Regalos.pp.grid = $('#tblRegalos').DataTable({
                    processing: true,
                    ajax: 'php/Handler/Regalos.php?action=GetRegalos',
                    info: true,
                    scrollY: '50vh',
                    scrollCollapse: true,
                    paging: false,
                    columns: [
                        {data: 'id'},
                        {data: 'descripcion'},
                        {data: 'nombrecategoria'},
                        {
                            data: 'id',
                            render: function (data, type) {
                                if (type === 'display') {
                                    return `<button class="btn btn-outline-dark  w-100" id="actionEditar" data-id="${data}" data-action="btnEditar">Editar</button>`;
                                }
                                return data;
                            }
                        },
                    ],
                });

                Regalos.behaviors.getCategorias.call();

            },
            events: function () {
                $(_PAGE_).delegate('#btnGuardar', 'click', Regalos.behaviors.guardarRegalo.call);
                $('#tblRegalos tbody').delegate(':button[data-action="btnEditar"]', 'click', Regalos.behaviors.getRegaloById.call)

            },
            finish: function () {
            },
            behaviors: {
                guardarRegalo: {
                    call: function () {
                        $.post('php/Handler/Regalos.php', {
                            codigoRegalo: codigoRegalo,
                            descripcion: $('#txtDescripcion').val(),
                            categoria: $('#slCategoria').val(),
                            action: 'GuardarRegalo',
                        }, Regalos.behaviors.guardarRegalo.response, 'json').always(function () {
                        });

                    }, response: function () {
                        Regalos.pp.grid.ajax.reload();
                        Regalos.behaviors.resetForm();
                    }
                },
                getRegaloById: {
                    call: function () {
                        let data = Regalos.pp.grid.row($(this).parents('tr')).data();
                        codigoRegalo = data.id;

                        $.post('php/Handler/Regalos.php', {
                            codigoRegalo: data.id,
                            action: 'GetRegalos',
                        }, Regalos.behaviors.getRegaloById.response, 'json').always(function () {
                        });

                    }, response: function (value) {
                        $('#txtDescripcion').val(value.data[0].descripcion);
                        $('#slCategoria').val(value.data[0].idcategoria);
                    }
                },
                getCategorias: {
                    call: function () {
                        $.post('php/Handler/Regalos.php', {
                            action: 'GetCategorias',
                        }, Regalos.behaviors.getCategorias.response, 'json').always(function () {
                        });

                    }, response: function (value) {
                        value.data.map(data => {
                            let opcion = "<option value='" + data.id + "'>" + data.descripcion + "</option>";
                            document.getElementById("slCategoria").innerHTML += opcion;
                        })

                    }
                },
                resetForm: function () {
                    codigoRegalo = null;
                    $('#txtDescripcion').val('');
                }
            },
        };

        Regalos.init();
    } catch (Exception) {
        alert(Exception);
    }
});