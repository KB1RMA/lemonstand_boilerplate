		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
		<?= $this->js_combine(array(
			'ls_core_jquery',
			'@js/plugins.js',
			'@js/main.js'
		)) ?>
		<?= $this->render_head() ?>
		
		<?= $this->render_partial('google_analytics') ?>