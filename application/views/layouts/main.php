<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Eleniko</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<script> scr= "<?php echo base_url();?>assets/js/jquery.js"></script>
<script> scr= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<body>

<div class = "container">
<?php $this->load->view($main_view); ?>

    <div class="col-xs-9">

    <?php $this->load->view('users/login_view'); ?>

    </div>

    <div class="col-xs-3">
    
    
    </div>
</div>
</body>
</html>