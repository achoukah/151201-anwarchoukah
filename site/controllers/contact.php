<?php

return function ($site, $pages, $page) {

	$form = uniform('contact-form', array(
			'required' => array('_from' => 'email'),
			'actions'  => array(
				array(
					'_action' => 'email',
					'to'      => 'choukah@me.com',
					'sender'  => 'info@my-domain.tld',
				)
			)
		)
	);

	return compact('form');
};