<div id="wrapper">
<h1>Space Industry</h1>

<div id="login" class="users form">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Session->flash(); ?>
            <div>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
            </div>
            <div>
                <p>No account?<br>
<?php echo $this->Html->link('Register', '/register'); ?>
<?php echo $this->Form->end(__('Login')); ?>
            </div>
        </div>

</div>

