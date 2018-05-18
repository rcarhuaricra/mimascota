


<!-- Swiper Silder
        ================================================== -->
<!-- Slider main container -->

<section id="Body">
    <div class="container">
        <h1><?php echo $titulo; ?></h1>

        <?php echo $MenuAdmin; ?>
        <br/>
        <div class="form-group">
            <label for="imagen" class="control-label">Imagenes</label>
            <div class="">
                <input id="inputImage" name="inputImage[]" type="file" class="file-loading" multiple >
                <div class="pull-right text-danger text-bold mensaje-alert" id="error-image"></div>
            </div>
        </div>
    </div>
</section>

<script>
    var InputFile = $("#inputImage");
    InputFile.fileinput({
        theme: "fa",
        language: "es",
        uploadUrl: "<?php echo base_url(); ?>/fileUpload",
        uploadAsync: false,
        showUpload: false, // hide upload button
        showRemove: false, // hide remove button
        minFileCount: 1,
        maxFileCount: 15,
        initialPreviewAsData: true,
        browseOnZoneClick: true,
        showUploadedThumbs: false,
        showremoveThumbs: false,
        showBrowse: false,
        allowedFileExtensions: ["jpg", "png", "gif", "pdf"]

    }).on('filebatchuploadsuccess', function (event, data, previewId, index) {
        console.log(data);
        var form = data.form;
        var files = data.files;
        var extra = data.extra;
        var response = data.response;
        var reader = data.reader;
        alert(extra.bdInteli + " " + response.uploaded);
    }).on("filebatchselected", function (event, files) {
        InputFile.fileinput("upload");

    })/*.on('fileimageloaded', function (event, previewId) {
     
     swal({
     type: "success",
     title: "Archivo Subido!!",
     timer: 2500,
     showConfirmButton: false
     });
     /*setTimeout(function () {
     $(".kv-file-remove").click();
     //$(".close").click();
     }, 1500);
     });*/

</script>