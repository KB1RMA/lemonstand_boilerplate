<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?= h($this->page->title) ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<?= $this->render_partial('header_includes') ?>
	</head>
	<? flush() ?>
	<body class="<?= str_replace('/', '', h($this->page->url)) ?>">

		<?= $this->render_page() ?>

		<?= $this->render_partial('footer_includes') ?>
		
    </body>
</html>
