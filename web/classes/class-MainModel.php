<?php

class MainModel{
	
	public $form_data;
 	public $form_msg;
	public $form_confirma;
	public $db;
	public $controller;
	public $parametros;
	public $userdata;
	
	public function inverte_data( $data = null ) {
		$nova_data = null;
		
		if ( $data ) {
		
			// Explode a data por -, /, : ou espaço
			$data = preg_split('/-|/|s|:/', $data);
			
			// Remove os espaços do começo e do fim dos valores
			$data = array_map( 'trim', $data );
			
			// Cria a data invertida
			$nova_data .= chk_array( $data, 2 ) . '-';
			$nova_data .= chk_array( $data, 1 ) . '-';
			$nova_data .= chk_array( $data, 0 );
			
			// Configura a hora
			if ( chk_array( $data, 3 ) ) {
				$nova_data .= ' ' . chk_array( $data, 3 );
			}
			
			// Configura os minutos
			if ( chk_array( $data, 4 ) ) {
				$nova_data .= ':' . chk_array( $data, 4 );
			}
			
			// Configura os segundos
			if ( chk_array( $data, 5 ) ) {
				$nova_data .= ':' . chk_array( $data, 5 );
			}
		}
		
		// Retorna a nova data
		return $nova_data;
	
	} 
 
}