var Invitados = null;
let codigoInvitado = null;

$(function () {
    try {
        var _PAGE_ = $('#invitados');
        Invitados = {
            pp: {
                grid: null
            },
            init: function () {
                this.load();
                this.events();
                this.finish();

                $("#txtLink").prop("disabled", true);

            },
            load: function () {
                Invitados.pp.grid = $('#tblInvitados').DataTable({
                    processing: true,
                    ajax: 'php/Handler/Invitados.php?action=GetInvitados',
                    info: true,
                    scrollY: '50vh',
                    scrollCollapse: true,
                    paging: false,
                    columns: [
                        {data: 'id'},
                        {data: 'nombres'},
                        {data: 'apellidos'},
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
            },
            events: function () {
                $(_PAGE_).delegate('#btnGuardar', 'click', Invitados.behaviors.guardarInvitados.call);
                $('#tblInvitados tbody').delegate(':button[data-action="btnEditar"]', 'click', Invitados.behaviors.getInvitadoById.call)

            },
            finish: function () {
            },
            behaviors: {
                guardarInvitados: {
                    call: function () {
                        let llaveUnicaInvitado = uuid.v4();
                        let urlInvitado = window.location.origin + '/babyshower/listaregalos.php?invitado=' + llaveUnicaInvitado;

                        $.post('php/Handler/Invitados.php', {
                            id: codigoInvitado,
                            nombres: $('#txtNombres').val(),
                            apellidos: $('#txtApellidos').val(),
                            codigoUnico: llaveUnicaInvitado,
                            url: urlInvitado,
                            action: 'GuardarInvitados',
                        }, Invitados.behaviors.guardarInvitados.response, 'json').always(function () {
                        });

                    }, response: function () {
                        Invitados.pp.grid.ajax.reload();
                        Invitados.behaviors.resetForm();
                    }
                },
                getInvitadoById: {
                    call: function () {
                        let data = Invitados.pp.grid.row($(this).parents('tr')).data();
                        codigoInvitado = data.id;

                        $.post('php/Handler/Invitados.php', {
                            codigoInvitado: data.id,
                            action: 'GetInvitados',
                        }, Invitados.behaviors.getInvitadoById.response, 'json').always(function () {
                        });

                    }, response: function (value) {
                        $('#txtNombres').val(value.data[0].nombres);
                        $('#txtApellidos').val(value.data[0].apellidos);
                        $('#txtLink').val(value.data[0].link);
                        $('#btnGuardar').val('Actualizar');

                    }
                },
                resetForm: function () {
                    codigoInvitado = null;
                    $('#txtNombres').val('');
                    $('#txtApellidos').val('');
                    $('#txtLink').val('');
                    $('#btnGuardar').val('Guardar');
                }
            },
        };

        Invitados.init();
    } catch (Exception) {
        alert(Exception);
    }
});