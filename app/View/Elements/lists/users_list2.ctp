<?php
echo $this->element('lists/users_list_bit2');
?>

<?php if (!empty($more_cat_result)):?>
    <?php if ( !empty($type) && $type == 'search' ): ?>
    <script> var searchParams = <?php echo (isset($params))? json_encode($params) : 'false'; ?></script>
    <?php endif; ?>
	<?php $this->Html->viewMore($more_cat_url); ?>
<?php endif; ?>