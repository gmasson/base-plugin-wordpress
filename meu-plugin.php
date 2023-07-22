<?php
/*
Plugin Name: Meu Plugin
Plugin URI: https://www.seusite.com/meu-plugin
Description: Base para plugin Wordpress
Version: 1.0
Author: Seu Nome
Author URI: https://www.seusite.com
*/

# Impede o acesso direto ao arquivo
if (!defined('ABSPATH')) {
	exit; // Sair do arquivo se o acesso direto for detectado
}

# Verifica compatibilidade
function meu_plugin_verificar_compatibilidade() {
	// Verificar a versão do PHP
	if (version_compare(PHP_VERSION, '7.0', '<')) {
		echo '<div class="notice notice-error"><p>Atenção: O plugin "Meu Plugin" requer PHP 7.0 ou superior para funcionar corretamente. Atualize a versão do PHP em seu servidor.</p></div>';
	}
	// Verificar a versão do WordPress
	global $wp_version;
	if (version_compare($wp_version, '4.0', '<')) {
		echo '<div class="notice notice-error"><p>Atenção: O plugin "Meu Plugin" requer WordPress 4.0 ou superior para funcionar corretamente. Atualize a versão do WordPress.</p></div>';
	}
}
add_action('admin_notices', 'meu_plugin_verificar_compatibilidade');

# Cria o shortcode
function meu_plugin_shortcode() {
	return 'Hello, World!';
}
add_shortcode('hello_world', 'meu_plugin_shortcode');

# Adiciona código no cabeçalho do blog
function meu_plugin_add_header() {
	echo '<!-- Hello, World! -->';
}
add_action('wp_head', 'meu_plugin_add_header');

# Adiciona código no rodapé do blog
function meu_plugin_add_footer() {
	echo '<!-- Hello, World! -->';
}
add_action('wp_footer', 'meu_plugin_add_footer');

# Adiciona código no cabeçalho do painel administrativo do blog
function meu_plugin_add_header_admin() {
	echo '<!-- Hello, World! -->';
}
add_action('admin_head', 'meu_plugin_add_header_admin');
