<?php

	p2p_register_connection_type( array( 
		'name' => 'projetos_eventos',
		'from' => 'projetos',
		'to' => 'eventos',
		'cardinality' => 'one-to-many',
		'title' => array( 'from' => 'Eventos relacionados', 'to' => 'Projeto relacionado' )
	) );

	p2p_register_connection_type( array( 
		'name' => 'projetos_blog',
		'from' => 'projetos',
		'to' => 'blog',
		'cardinality' => 'one-to-many',
		'title' => array( 'from' => 'Posts relacionados', 'to' => 'Projeto relacionado' )
	) );

	p2p_register_connection_type( array( 
		'name' => 'eventos_blog',
		'from' => 'eventos',
		'to' => 'blog',
		'cardinality' => 'one-to-many',
		'title' => array( 'from' => 'Posts relacionados', 'to' => 'Evento relacionado' )
	) );

?>