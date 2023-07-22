<h2>Login form</h2>
<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal');?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('users/login', $attributes);?>

<div class="form-group">
    <?php echo form_label('username');?>

    <?php
    
    $data = array(
        'class' => 'form-control',
        'name' => 'username',
        'placeholder' => 'Enter Username'
    );
    ?>
</div>
<?php echo form_input($data);?>

<div class="form-group">
    <br>
    <?php echo form_label('password');?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'password',
        'placeholder' => 'Enter password'
    );
    ?>

</div>

<?php echo form_password($data);?>

<div class="form-group">
    <br>
    <?php echo form_label('confirm password');?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'confirm_password',
        'placeholder' => 'Confirm password'
    );
    ?>
</div>
<?php echo form_password($data);?>

<div class="form-group">
    <br>
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Login'
    );
    ?>
</div>
<?php echo form_submit($data);?>

<?php echo form_close();?>
