<br />
<br />
<br />
<br />
<br />
<?php 
echo '<p>Private area</p>';
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->inputs(array(
    'legend' => __('Accés al panell d\'Administració'),
    'username',
    'password'
));

echo $this->Form->end('Login');
?>
<br />
<br />
<br />
<br />
<br />