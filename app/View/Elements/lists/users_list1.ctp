<?php
echo $this->element('lists/users_list_bit1');
?>

<?php if (!empty($more_dog_result)):?>
	<?php $this->Html->viewMore($more_dog_url); ?>
<?php endif; ?>
