<?php
/* TODO:
 - service type, category, and services  adding
 - dealing with the SERVICE_TYPES_ips define
 - add way to call/hook into install/uninstall
*/
return [
	'name' => 'Ips Licensing VPS Addon',
	'description' => 'Allows selling of Ips Server and VPS License Types.  More info at https://www.netenberg.com/ips.php',
	'help' => 'It provides more than one million end users the ability to quickly install dozens of the leading open source content management systems into their web space.  	Must have a pre-existing cPanel license with cPanelDirect to purchase a ips license. Allow 10 minutes for activation.',
	'module' => 'vps',
	'author' => 'detain@interserver.net',
	'home' => 'https://github.com/detain/myadmin-ips-vps-addon',
	'repo' => 'https://github.com/detain/myadmin-ips-vps-addon',
	'version' => '1.0.0',
	'type' => 'addon',
	'hooks' => [
		'vps.load_addons' => ['Detain\MyAdminVpsIps\Plugin', 'Load'],
		'vps.settings' => ['Detain\MyAdminVpsIps\Plugin', 'Settings'],
		/* 'function.requirements' => ['Detain\MyAdminVpsIps\Plugin', 'Requirements'],
		'licenses.activate' => ['Detain\MyAdminVpsIps\Plugin', 'Activate'],
		'licenses.change_ip' => ['Detain\MyAdminVpsIps\Plugin', 'ChangeIp'],
		'ui.menu' => ['Detain\MyAdminVpsIps\Plugin', 'Menu'] */
	],
];
