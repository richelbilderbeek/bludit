<?php

HTML::title(array('title'=>$plugin->name(), 'icon'=>'puzzle-piece'));

HTML::formOpen(array('id'=>'jsformplugin'));

	// Security token
	HTML::formInputHidden(array(
		'name'=>'tokenCSRF',
		'value'=>$Security->getTokenCSRF()
	));

	// Print the plugin form
	echo $plugin->form();

	if($plugin->formButtons()) {
		// Form buttons
		echo '<div class="uk-form-row uk-margin-bottom">
			<button class="uk-button uk-button-primary" type="submit">'.$L->g('Save').'</button>
			<a class="uk-button" href="'.HTML_PATH_ADMIN_ROOT.'plugins">'.$L->g('Cancel').'</a>
		</div>';
	}

HTML::formClose();
