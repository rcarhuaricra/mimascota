<link href="<?php echo base_url('recursos/'); ?>pluging/icheck-1.x/skins/all.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url('recursos/'); ?>pluging/icheck-1.x/icheck.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function(){
         $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    })

    </script>