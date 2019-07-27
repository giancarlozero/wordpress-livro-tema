<?php get_header(); ?>
    <section>
        <div class="conteudo small-12 medium-8 large-8 column"> <!-- Arquivo do blog -->
            <div class="arquivo row">
                <div class="small-12 small-centered medium-12 medium-centered large-12 large-centered column">
                    <?php $post = $posts[0]; // Hack. Insira $post para que the_date() funcione. ?>
                    <?php /* Exibição por Categoria */ if (is_category()) { ?>
                    <p>Todos os posts da categoria "<?php echo single_cat_title(); ?>"</p>
                    <?php /* Exibição por dia */ } elseif (is_day()) { ?>
                    <p>Todos os posts de <?php the_time('j \d\e F \d\e Y'); ?></p>
                    <?php /* Exibição por mês */ } elseif (is_month()) { ?>
                    <p>Todos os posts de <?php the_time('F \d\e Y'); ?></p>
                    <?php /* Exibição por ano */ } elseif (is_year()) { ?>
                    <p>Todos os posts de <?php the_time('Y'); ?></p>
                    <?php /* Exibição por autor */ } elseif (is_author()) { ?>
                    <p>Todos os posts do(a) autor(a) <?php the_author(); ?></p>
                    <?php /* Caso o arquivamento deva ser exibido em uma Página estática */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <p>Arquivo do Site</p>
                    <?php } ?>
                </div>
            </div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post row"> <!-- Exibição de prévia do post -->
                        <div class="post-thumb small-12 medium-5 large-5 column">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
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
                    <div class="not-found small-12 medium-4 large-4 column">
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