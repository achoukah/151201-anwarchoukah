<?php

return function ($site, $pages, $page) {

	$form = uniform('contact-form', array(
			'required' => array('_from' => 'email'),
			'actions'  => array(
				array(
					'_action' => 'email',
					'to'      => 'choukah@me.com',
					'sender'  => 'email@anwarchoukah.com',
				)
			)
		)
	);

	return compact('form');
};