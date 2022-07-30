var ListaRegalos = null;
let codigoInvitado = null;

$(function () {
    try {
        var _PAGE_ = $('#listaRegalos');
        ListaRegalos = {
            pp: {
                grid: null
            },
            init: function () {
                this.load();
                this.events();
                this.finish();

            },
            load: function () {
                ListaRegalos.behaviors.getListaRegalos.call();
            },
            events: function () {
                $(_PAGE_).delegate('#btnGuardar', 'click', ListaRegalos.behaviors.validarRegalos.call);
                //$('#tblInvitados tbody').delegate(':button[data-action="btnEditar"]', 'click', Invitados.behaviors.getInvitadoById.call)

            },
            finish: function () {
            },
            behaviors: {
                getListaRegalos: {
                    call: function () {
                        $.post('php/Handler/ListaRegalos.php', {
                            action: 'getListaRegalos',
                        }, ListaRegalos.behaviors.getListaRegalos.response, 'json').always(function () {
                        });
                    },
                    response: function (value) {

                        const groupBy = (arr, key) => {
                            const initialValue = {};
                            return arr.reduce((acc, cval) => {
                                const myAttribute = cval[key];
                                acc[myAttribute] = [...(acc[myAttribute] || []), cval]
                                return acc;
                            }, initialValue);
                        };

                        let atributosAdicionales = '';


                        if (value.completo) {
                            atributosAdicionales = 'checked disabled';
                            $("#btnGuardar").prop("hidden", true);
                        }

                        const res = groupBy(value.data, "nombrecategoria");

                        let contador = 0;
                        for (const property in res) {

                            let hash = {};
                            res[property] = res[property].filter(o => hash[o.id] ? false : hash[o.id] = true);

                            let contenedores = "<div class='principal' id='listasRegalo_" + property + "'>" +
                                " <div class='tituloCategoria'>" + property + "</div></div>";

                            let listaHtml = "<ul class='list-group' id='regalos_" + property + "'></ul>"
                            $("#container").append(contenedores);

                            res[property].map(value => {
                                contador += 1;
                                let opcion = "<li class='list-group-item'>" +
                                    "<input class='form-check-input me-1' " + atributosAdicionales + " type='checkbox' value='" + value.id + "' id='regalo_" + contador + "'>" +
                                    "<label class='form-check-label stretched-link' for='regalo_" + contador + "'> " + value.descripcion + "</label>" +
                                    "</li>";

                                document.getElementById("listasRegalo_" + property).innerHTML += listaHtml;
                                document.getElementById("regalos_" + property).innerHTML += opcion;
                            });

                        }

                    },
                    resetForm: function () {
                    }
                },
                validarRegalos: {
                    call: function () {
                        let regalosInvitado = [];
                        let checkboxes = document.querySelectorAll('input[type=checkbox]:checked')
                        for (let i = 0; i < checkboxes.length; i++) {
                            regalosInvitado.push(checkboxes[i].value)
                        }
                        ;
                        let codigosRegalo = '';

                        regalosInvitado.forEach(value => {
                            codigosRegalo += `${value},`;

                        });

                        console.log(codigosRegalo)

                        $.post('php/Handler/ListaRegalos.php', {
                            codigosRegalo: codigosRegalo.slice(0, -1),
                            action: 'ConsultarRegalosInvitado',
                        }, ListaRegalos.behaviors.validarRegalos.response, 'json').always(function () {
                        });
                    },
                    response: function (value) {
                        if (value.data) {
                            console.log('>>>true')
                            Swal.fire({
                                title: '¡Opps!',
                                html: "Alguien ya registro alguno de los regalos que escogiste",
                                icon: 'warning',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                location.reload();
                            })
                        } else {
                            console.log('>>>false')
                            ListaRegalos.behaviors.guardarRegalosInvitado.call();
                        }

                    },
                },
                guardarRegalosInvitado: {
                    call: function () {
                        console.log('>>>>>>>>>>>>>>>>>>>>>>')
                        let regalosInvitado = [];
                        let checkboxes = document.querySelectorAll('input[type=checkbox]:checked')
                        for (let i = 0; i < checkboxes.length; i++) {
                            regalosInvitado.push(checkboxes[i].value)
                        }
                        ;


                        regalosInvitado.forEach(value => {
                            console.log(value)

                            $.post('php/Handler/ListaRegalos.php', {
                                codigoRegalo: value,
                                action: 'GuardarRegalosInvitado',
                            });
                        });


                        ListaRegalos.behaviors.guardarRegalosInvitado.response()
                    },
                    response: function (value) {
                        Swal.fire({
                            title: '¡Gracias!',
                            html: "¡Espero con ansias tu regalo! <br>" +
                                "Recuerda que aqui puedes ver lo que seleccionaste. <br> Att: Emily",
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            location.reload();
                        });
                    },
                },
                resetForm: function () {
                }
            },
        }
            ,
            ListaRegalos.init();
    } catch
        (Exception) {
        alert(Exception);
    }
})
;
