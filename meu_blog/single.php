<?php get_header(); ?>
    <section>
        <div class="conteudo small-12 medium-8 large-8 column"> <!-- Conteúdo -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post row"> <!-- Exibição de post -->
                        <div class="post-titulo small-12 medium-12 large-12 column">
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
                            <p><?php the_time('j \d\e F \d\e Y'); ?> - <a href="#">Escrito por <?php the_author_posts_link(); ?></a> - <a href="#"><?php comments_popup_link('Nenhum comentário', '1 comentário', '% comentários', 'comments-link', ''); ?></a></p>
                        </div>
                        <div class="post-categorias small-12 medium-12 large-12 column">
                            <p><b>Categorias: <?php the_category(', '); ?></b></p>
                        </div>
                        <div class="post-texto small-12 medium-12 large-12 column">
                            <?php the_content(); ?>
                        </div>
                        <div class="post-tags small-12 medium-12 large-12 column">
                            <?php the_tags('Tags: ' , ', '); ?>
                        </div>
                        <div class="post-comentarios small-12 medium-12 large-12 column">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="post row"> <!-- 404 Not Found -->
                    <div class="not-found small-12 medium-12 large-12 column">
                        <h1>404 - Not Found</h1>
                        <p>Post não encontrado.</p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="paginacao row"> <!-- Paginação -->
                <div class="small-12 small-centered medium-12 medium-centered large-12 large-centered text-center column">
                    <!-- Paginação convencional -->
                    <div class="nav-previous alignleft"><?php next_posts_link( 'Posts mais antigos' ); ?></div>
                    <div class="nav-next alignright"><?php previous_posts_link( 'Posts mais recentes' ); ?></div>
                    <!-- Paginação numerada. Caso prefira esta outra opção, descomente o código PHP abaixo e comente (ou apague) o código da Paginação convencional acima. -->
                    <?php /*
                    the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( 'Mais antigos', 'textdomain' ),
                            'next_text' => __( 'Mais recentes', 'textdomain' ),
                        )
                    );
                        */
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_sidebar(); ?>