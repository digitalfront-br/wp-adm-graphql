<?php 
function edit_cnt_orcamento( $labels ) {
  $post_type = 'Orcamento';
  $plural = 'Orcamentos';
  
  $labels->name = __( $plural, 'post-para-' . $post_type );
  $labels->singular_name = __( $post_type, 'post-para-' . $post_type );
  $labels->add_new = __( 'Adicionar nova', 'post-para-' . $post_type );
  $labels->add_new_item = __( 'Adicionar nova' . $post_type, 'post-para-' . $post_type );
  $labels->edit_item = __( 'Editar' . $post_type, 'post-para-' . $post_type );
  $labels->new_item = __( 'Nova' . $post_type, 'post-para-' . $post_type );
  $labels->view_item = __( 'Ver ' . $post_type, 'post-para-' . $post_type );
  $labels->view_items = __( 'Ver ' . $plural, 'post-para-' . $post_type );
  $labels->search_items = __( 'Pesquisar ' . $post_type, 'post-para-' . $post_type );
  $labels->not_found = __( 'Nenhum ' . $post_type . 'encontrada.', 'post-para-' . $post_type );
  $labels->not_found_in_trash = __( 'Nenhum ' . $post_type . 'encontrada na lixeira.', 'post-para-' . $post_type );
  $labels->all_items = __( 'Todos os ' . $plural, 'post-para-' . $post_type );
  $labels->archives = __( 'Arquivos de ' . $plural, 'post-para-' . $post_type );
  $labels->attributes = __( 'Atributos da ' . $post_type, 'post-para-' . $post_type );
  $labels->insert_into_item = __( 'Inserir no ' . $post_type, 'post-para-' . $post_type );
  $labels->uploaded_to_this_item = __( 'Anexadas a este ' . $post_type, 'post-para-' . $post_type );
  $labels->filter_items_list = __( 'Filtrar lista de ' . $plural, 'post-para-' . $post_type );
  $labels->items_list_navigation = __( 'Navegação da lista de ' . $plural, 'post-para-' . $post_type );
  $labels->items_list = __( 'Lista de ' . $plural, 'post-para-' . $post_type );
  $labels->menu_name = __( $plural, 'post-para-' . $post_type );
  $labels->name_admin_bar = __($post_type, 'post-para-' . $post_type );
  $labels->menu_icon = __( 'dashicons-format-aside', 'post-para-orcamentos' . $post_type );
  // https://developer.wordpress.org/resource/dashicons/

  return $labels;
}
add_filter('post_type_labels_post', 'edit_cnt_orcamento');
?>