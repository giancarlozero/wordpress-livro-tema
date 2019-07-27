<?php get_header(); ?>
    <section>
        <div class="conteudo small-12 medium-8 large-8 column"> <!-- Conteúdo -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post row"> <!-- Exibição de prévia do post -->
                        <div class="post-thumb small-12 medium-5 large-5 column">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumbnail-index'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="post-preview small-12 medium-7 large-7 column">
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
                            <p><?php the_excerpt(); ?></p>
                            <a class="small right button" href="<?php the_permalink() ?>">Leia mais!</a>
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
            <div class="paginacao row">
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