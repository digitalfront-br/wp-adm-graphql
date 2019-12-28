<?php

$base_theme = get_template_directory();

require_once($base_theme . "/custom-post-type/conteudo.php");
require_once($base_theme . "/custom-post-type/conteudoEditado.php");

// function expire_token() {
//   return time() + (60 * 60 * 24);
// }
// add_action('jwt_auth_expire', 'expire_token');

function register_menu_site() {
  register_nav_menu( 'desktop', __('Menu para desktop') );
  register_nav_menu( 'mobile', __('Menu para celular') );
}
add_action('init', 'register_menu_site');

add_theme_support( 
  // adicione aqui os nomes dos conteudos criados para que seja mostrada a imagem destacada
  'post-thumbnails', array( 
    'conteudo',
  ) );


?>