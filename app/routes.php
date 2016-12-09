<?php
	
	$w_routes = array(
	['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/services/', 'Default#services', 'default_services'],
        ['GET', '/a-propos/', 'Default#aPropos', 'a_propos'],
        ['POST', '/a-propos/send', 'Default#traitement', 'apropos_send'],
        ['GET', '/contact/', 'Contact#home', 'contact_home'],
        ['POST', '/contact/[i:id]/', 'Contact#traitement', 'contact_traitement'],
        ['GET', '/admin/', 'Admin#home', 'Admin_home'],
        ['POST', '/admin', 'Admin#register', 'admin_register'],
        ['GET', '/login/', 'Admin#showLogin', 'admin_login'],
        ['POST', '/adminlogin', 'Admin#login', 'login'],
        ['GET', '/equipe/[i:id]/', 'Equipe#showProfile', 'equipe_profile'],
        ['GET', '/equipe/', 'Equipe#showMain', 'equipe_main'],
        ['GET|POST', '/equipe/[i:id]/getskills', 'Equipe#jsonSkills', 'equipe_getskills'],
        ['GET', '/modif/[i:id]', 'Equipe#modifProfile', 'equipe_modif'],
        ['POST', '/modifprofile/[i:id]', 'Equipe#formModif', 'equipe_formmodif'],



         ['GET', '/admin/addPage', 'Admin#addPage', 'admin_add_page'],
         ['POST', '/admin/addPage', 'Admin#addPageBdd', 'admin_add_pagebdd'],

         ['GET', '/page/[:slug]', 'Default#displayPage', 'default_displaypage']




	);