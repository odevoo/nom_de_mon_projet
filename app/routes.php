<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/services/', 'Default#services', 'default_services'],
        ['GET', '/a-propos/', 'Default#aPropos', 'a_propos'],
        ['POST', '/a-propos/send', 'Default#traitement', 'apropos_send'],
        ['GET', '/contact/', 'Contact#home', 'contact_home'],
        ['POST', '/contact', 'Contact#traitement', 'contact_traitement'],
        ['GET', '/admin/', 'Admin#home', 'Admin_home'],
        ['POST', '/admin', 'Admin#register', 'admin_register'],

	);