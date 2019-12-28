<?php
function reg_cnt_produto() {
  $post_type = 'Produto';
  $plural = 'Produtos';
  $descricao = 'Um novo conteudo do tipo '. $post_type . ' para ser customizado.';
  register_post_type(strtolower($post_type), array(
    'label'  =>  $post_type,
    'labels' =>  array(
      'name' => $post_type,
      'singular_name' => $post_type,
      'add_new' => 'Adicionar ' . strtolower($post_type),
      'edit_new' => 'Editar '. strtolower($post_type),
      'new_item'  =>  'Novo ' . strtolower($post_type),
      'view_item'  =>  'Ver ' . strtolower($post_type),
      'view_items'  =>  'Ver ' . strtolower($plural),
      'all_items'  =>  'Todos os '. strtolower($plural),
      'featured_image'  =>  'Imagem de capa',
      'remove_featured_image' => 'Remover imagem',
    ),
    'description'  => $descricao,
    'supports'  => array(
       'title',
       'editor',
      //  'comments',
       'revisions',
      //  'trackbacks',
       'author',
       'excerpt',
       'page-attributes',
       'thumbnail',
       'custom_fields',
       'post-formats'
    ),
    'query_var' => true,
    'show_ui'   => true,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-tablet',
    'show_in_graphql' => true,
    'graphql_single_name' => $post_type,
    'graphql_plural_name' => $plural,
  ));
}
add_action('init', 'reg_cnt_produto');

?>