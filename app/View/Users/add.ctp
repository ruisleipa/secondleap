
<div id="wrapper">
<h1>Second Leap</h1>
<h2>Registration</h2>
<div id="login" class="users form">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Session->flash('auth'); ?>
            <div>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
            </div>
            <div>
<?php echo $this->Form->end(__('Register')); ?>
            </div>
        </div>

</div>

