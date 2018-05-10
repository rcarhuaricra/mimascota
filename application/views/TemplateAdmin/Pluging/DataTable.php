<link href="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net-bs/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net-responsive-bs/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net-bs/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net-responsive/js/dataTables.responsive.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/datatables.net-responsive-bs/js/responsive.bootstrap4.min.js" type="text/javascript"></script>


<link href="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/buttons.dataTables.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/buttons.html5.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>recursos/pluging/dataTables/TableTools-master/buttons.print.min.js" type="text/javascript"></script>
<style>
    table.dataTable{
        border-collapse: collapse !important;
    }
    table thead tr th{
        background-color: #007bff !important;
        color: white;
    }
</style>
<script>
    /* $(document).ready(function () {
     if (input.val().length <= 3) {
     $(this).children("button").removeAttr("disabled");
     }
     });
     */
    $.extend(true, $.fn.dataTable.defaults, {
      /*  dom: 'Bfrtip',
         lengthMenu: [
         [1, 25, 50, -1],
         ['1 rows', '25 rows', '50 rows', 'Show all']
         ],
         buttons: [
         'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print', {
         text: 'JSON',
         action: function (e, dt, button, config) {
         var data = dt.buttons.exportData();
         
         $.fn.dataTable.fileSave(
         new Blob([JSON.stringify(data)]),
         'Export.json'
         );
         }
         }],*/
        //aLengthMenu: [[1, 25, 50, -1], [1, 25, 50, "All"]],
        initComplete: function () {

            var input = $('.dataTables_filter input').attr("placeholder", "Buscar Aqui...")
                    .attr("data-toggle", "tooltip")
                    .attr("title", "Hooray!").
                    unbind(),
                    self = this.api(),
                    $searchButton = $('<span class="input-group-append"><button class="btn btn-sm btn-success" >Buscar</button></span>')
                    .click(function () {
                        self.search(input.val()).draw();
                    }),
                    $clearButton = $('<span class="input-group-append"><button id="clearbtn" class="btn btn-sm btn-success">Limpiar</button></span>')
                    .click(function () {
                        input.val('');
                        $searchButton.click();
                    });

            $('.dataTables_filter label').addClass("input-group");
            $('.dataTables_filter label').append($searchButton, $clearButton);
        },
        responsive: true,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "<div>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</div>",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }


    });
   
</script>


