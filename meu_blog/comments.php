<?php
if ( post_password_required() )
    return;
?>

<div class="form-comentarios">
    <!-- Formulário de comentários -->
    <?php comment_form(); ?>

    <!-- Início do loop de exibição de comentários -->
    <?php if ( have_comments() ) : ?>
        <h3 class="titulo-comentario">
            <?php printf( _nx( 'Um comentário sobre "%2$s"', '%1$s comentários sobre "%2$s"', get_comments_number(), 'comments title', 'meu-blog' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
        </h3>

        <!-- Listagem de comentários: ao invés de 'ul', você pode optar por utilizar 'ol' ou 'div' neste bloco de código e também no parâmetro 'style', em 'wp_list_comments().' -->
        <ul class="lista-comentarios">
            <?php 
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 75,
                ) );
            ?>
        </ul>

        <!-- Paginação de comentários -->
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Paginação de comentários', 'meu-blog' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentários mais antigos', 'meu-blog' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Comentários mais recentes &rarr;', 'meu-blog' ) ); ?></div>
            </nav>
            <?php endif; ?>

        <!-- Fechamento de comentários -->
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Os comentários para este post estão fechados.' , 'meu-blog' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

</div>