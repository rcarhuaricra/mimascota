<script src="<?php echo base_url('recursos/'); ?>pluging/jquery-validation-1.17.0/dist/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url('recursos/'); ?>pluging/jquery-validation-1.17.0/src/localization/messages_es_PE.js" type="text/javascript"></script>
<script>
    $.validator.setDefaults({
        errorElement: "div",
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            element.addClass("is-invalid");
            element.parents("div").children("label").addClass("text-danger");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        success: function (label, element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
            $(element).parents("div").children("label").removeClass("text-danger").addClass("text-success");
        },
        highlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-valid").addClass("is-invalid");
            $(element).parents("div").children("label").removeClass("text-success").addClass("text-danger");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid").addClass("is-valid");
            $(element).parents("div").children("label").removeClass("text-danger").addClass("text-success");
        }
    });
</script>