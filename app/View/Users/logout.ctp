<br />
<br />
<br />
<br />
<br />
<?php 
echo '<p>Private area: <span style="font-size:0.7em"><strong><i>(Userdemo: root // Password: 123456)</i></strong></span></p>';
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->inputs(array(
    'legend' => __('Login'),
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