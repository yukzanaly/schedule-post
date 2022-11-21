<?php

use yukzanaly\modules\schedulepost\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;

return [
	'id' => 'schedulepost',
	'class' => 'yukzanaly\modules\schedulepost\Module',
	'namespace' => 'yukzanaly\modules\schedulepost',
	'events' => [
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];
