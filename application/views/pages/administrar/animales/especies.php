<section id="Body">
    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        <?php echo $MenuAdmin; ?>
        <br/>
        <div class="form-group">
            <button id="NewEspecieModal" class="btn btn-outline-primary"><span class="fa fa-address-card"></span>Nuevo</button>
        </div>
        <div class="form-group">
            <table id="DataTable" class="display table table-bordered table-sm" style="width:100%">                
            </table>
        </div>
    </div>

</section>
<script>
    $("#NewEspecieModal").click(function (e) {
        e.preventDefault();
        $('#ModalGeneral').modal();
        $.ajax({
            cache: false,
            type: 'POST',
            url: '<?php echo base_url(); ?>modal/modalEspecie',
            success: function (response) {
                $('#ModalGeneral').children("div").children("div.modal-content").html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    $(document).ready(function () {
        llamarTabla();
    });
    function llamarTabla(){
        var urlTable = "<?php echo base_url("TableEspecies"); ?>";
        var dataTable = $('#DataTable').DataTable({
                                                                    processing: true,
                                                                    serverSide: true,
                                                                    retrieve: true,
                                                                    destroy: true,
            ajax: {
                url: urlTable,
                method: "POST"
            },
            columns: [
                {data: "ESPECIE", title: "Especie"},
                {
                    data: null,
                    title: "Estado",
                    render: function (data, type, full, row, meta) {
                        if (full.TEXTESTADO === "ACTIVO") {
                            return "<button class='badge badge-pill badge-success btn'>" + full.TEXTESTADO + "</button>";
                        } else {
                            return "<button class='badge badge-pill btn btn-danger'>" + full.TEXTESTADO + "</button>";
                        }
                    }
                }
            ]

        });

        $('#DataTable tbody').on('click', 'button', function () {
            var data = dataTable.row($(this).parents('tr')).data();
            // console.log(data);
            swal({
                title: "Seguro?",
                html: true,
                text: "Va a Cambiar de Estado ah: <b>" + data.ESPECIE + "</b>",
                type: "warning",
                confirmButtonText: "Si, Cambiar",
                showCancelButton: true,
                cancelButtonText: "No!",
                closeOnConfirm: false,
                confirmButtonClass: "btn-primary",
                cancelButtonClass: "btn-danger",
                showLoaderOnConfirm: true
            }, function () {
                var id = data.ID_ESPECIE;
                var urlUpdate = "<?php echo base_url("EspecieUpdateEstado"); ?>";
                $.ajax({
                    url: urlUpdate,
                    method: 'POST',
                    data: {id: id},
                    success: function (data)
                    {
                        console.log(data);
                        if (data == true) {
                            swal({
                                type: "success",
                                title: "Cambio de Estado con exito",
                                timer: 1500,
                                showConfirmButton: false
                            });
                        } else {
                            swal({
                                type: "error",
                                title: "no se pudo Actualizar el registro",
                                timer: 1500,
                                showConfirmButton: false
                            });
                        }
                        dataTable.ajax.reload(null, false);

                    }
                });
            });
        });
    }

</script>

