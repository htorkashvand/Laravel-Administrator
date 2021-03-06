<div id="admin_page" class="with_sidebar">
	<div id="sidebar">
		<div class="panel sidebar_section" id="filters_sidebar_section" data-bind="template: 'filtersTemplate'"></div>
	</div>
	<div id="content" data-bind="template: 'adminTemplate'"></div>
</div>

<script type="text/javascript">
	var site_url = "<?php echo url('/') ?>",
		base_url = "<?php echo $baseUrl ?>/",
		asset_url = "<?php echo $assetUrl ?>",
		file_url = "<?php echo route('admin_display_file', array($config->getOption('name'))) ?>",
		rows_per_page_url = "<?php echo route('admin_rows_per_page', array($config->getOption('name'))) ?>",
		route = "<?php echo $route ?>",
		csrf = "<?php echo csrf_token() ?>",
		language = "<?php echo config('app.locale') ?>",
		adminData = {
			primary_key: "<?php echo $primaryKey ?>",
			<?php if ($itemId !== null) {?>
				id: "<?php echo $itemId ?>",
			<?php } ?>
		div.preview {
		width: <?php echo intval(($formWidth - 75) / 2) ?>px !important;
	}

	div.item_edit form.edit_form input[type="text"], div.item_edit form.edit_form input[type="password"], div.item_edit form.edit_form textarea {
		max-width: <?php echo $formWidth - 75 ?>px !important;
		width: <?php echo $formWidth - 75 ?>px !important;
	}

	div.item_edit form.edit_form > div.image img, div.item_edit form.edit_form > div.image div.image_container {
		max-width: <?php echo $formWidth - 65 ?>px;
	}

</style>

<input type="hidden" name="_token" value="<?php echo csrf_token()?>" />

<script id="adminTemplate" type="text/html">
	<?php echo view("administrator::templates.admin")?>
</script>

<script id="itemFormTemplate" type="text/html">
	<?php echo view("administrator::templates.edit", array('config' => $config))?>
</script>

<script id="filtersTemplate" type="text/html">
	<?php echo view("administrator::templates.filters")?>
</script>
