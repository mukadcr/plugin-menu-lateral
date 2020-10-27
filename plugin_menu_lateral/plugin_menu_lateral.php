<?php
/*
* Plugin Name: Menu lateral
* Plugin URI: https://sp.senac.br
* Description: Exemplo de menu lateral
* Version: 0.0.1
* Author: Murilo Casanova
* Author URI:
* License: CC BY 
*/
add_action('admin_init', 'configs_plugin_menu');

function configs_plugin_menu(){

	register_setting('configs-plugin-menu', 'nome-autor');
	register_setting('configs-plugin-menu', 'descricao-plugin');
	register_setting('configs-plugin-menu', 'data-cricao');

}


add_action('admin_menu', 'gera_item_no_menu');

function gera_item_no_menu(){
		add_submenu_page('options-general.php', 'Configurações do Plugin Menu', 'Config Plugin Menu', 'administrator', 'Config Plugin-menu', 'abre_config_plugin_menu', 2);
}

function abre_config_plugin_menu(){
	require 'plugin_menu_lateral_frontend.php';
}