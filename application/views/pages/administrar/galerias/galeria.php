


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
                <div class=" text-danger text-bold mensaje-alert" id="error-image"></div>
            </div>

        </div>
    </div>
</section>

<script>
    var InputFile = $("#inputImage");
    InputFile.fileinput({
        theme: "fa",
        uploadUrl: "<?php echo base_url(); ?>/fileUpload",
        allowedFileExtensions: ["jpg", "png", "gif", "pdf", "doc", "docx", "xls", "xlsx"],
        language: 'es',
        browseOnZoneClick: true,
        initialPreviewAsData: true,
        showUploadedThumbs: false,
        minFileCount: 1,
        maxFileCount: 15,
        uploadAsync: true,

        showCaption: true,
        showPreview: true,
        showRemove: true,
        showUpload: true,
        showCancel: true,
        showClose: true,
        previewClass: '',
        captionClass: '',
        mainClass: '',
        mainTemplate: null,
        purifyHtml: true,
        initialCaption: '',
        //initialPreview: [],
        initialPreviewConfig: [],
        initialPreviewThumbTags: [],
        initialPreviewShowDelete: true,
        removeFromPreviewOnError: false,
        deleteUrl: '',
        deleteExtraData: {},
        overwriteInitial: true,
        //layoutTemplates: defaultLayoutTemplates,
        //previewTemplates: defaultPreviewTemplates,
        preview: '<a href = "https://www.jqueryscript.net/zoom/">Zoom< /a>',
        //Settings: defaultPreviewZoomSettings,


        //previewSettings: defaultPreviewSettings,
        //fileTypeSettings: defaultFileTypeSettings,
        previewFileIcon: '<i class="glyphicon glyphicon-file"></i>',
        previewFileIconClass: 'file-icon-4x',
        previewFileIconSettings: {},
        previewFileExtSettings: {},
        buttonLabelClass: 'hidden-xs',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>&nbsp;',
        browseClass: 'btn btn-primary',
        removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
        removeClass: 'btn btn-default',
        cancelIcon: '<i class="glyphicon glyphicon-ban-circle"></i>',
        cancelClass: 'btn btn-default',
        uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
        uploadClass: 'btn btn-default',

        zoom: '<a href="https://www.jqueryscript.net/tags.php?/Modal/"> Modal </a>',
        Height: 480,
        minImageWidth: null,
        minImageHeight: null,
        maxImageWidth: null,
        maxImageHeight: null,
        resizeImage: false,
        resizePreference: 'width',
        resizeQuality: 0.92,
        resizeDefaultImageType: 'image/jpeg',
        maxFileSize: 0,
        maxFilePreviewSize: 25600, // 25 MB
        vali: ' < a href = "https://www.jqueryscript.net/time-clock/" > date < /a>',
        InitialCount: false,
        msg: ' < a href = "https://www.jqueryscript.net/tags.php?/Validation/" > Validation < /a>',

        previewFileType: 'image',
        elCaptionContainer: null,
        elCaptionText: null,
        elPreviewContainer: null,
        elPreviewImage: null,
        elPreviewStatus: null,
        
        slugCallback: null,
        dropZoneEnabled: true,
        dropZoneTitleClass: 'file-drop-zone-title',
        fileActionSettings: {},
        otherActionButtons: '',
        textEncoding: 'UTF-8',
        ajaxSettings: {},
        ajaxDeleteSettings: {},
        showAjaxErrorDetails: true
    }).on("filebatchselected", function (event, files) {
        InputFile.fileinput("upload");

    });

</script>