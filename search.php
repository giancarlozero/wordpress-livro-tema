<?php get_header(); ?>
    <section>
        <div class="conteudo small-12 medium-12 large-12 column"> <!-- Conteúdo -->
            <div class="row"> <!-- Consulta ao banco de dados com WP_Query -->
                <div class="small-12 medium-12 large-12 column">
                    <p><?php $mySearch = new WP_Query("s=$s & showposts=9999"); $num = $mySearch->post_count; echo $num.' resultado(s) de pesquisa para o termo "'; the_search_query();?>" em <?php  get_num_queries(); ?> <?php timer_stop(1); ?> segundos.</p>
                </div>
            </div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="pagina row">
                        <div class="pagina-titulo small-12 medium-12 large-12 column">
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
                        </div>
                        <div class="small-12 medium-12 large-12 column">
                            <?php the_excerpt(); ?>
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
            <div class="row">
                <div class="busca-paginacao small-12 medium-12 large-12 text-center column">
                    <?php
                        the_posts_pagination( array(
                                'mid_size'  => 5,
                                'next_text' => __( '>', 'textdomain' ),
                                'prev_text' => __( '<', 'textdomain' ),
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>