<?php get_header(); ?>
    <section>
        <div class="conteudo small-12 medium-8 large-8 column"> <!-- Conteúdo -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="pagina row">
                        <div class="pagina-titulo small-12 medium-12 large-12 column">
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
                        </div>
                        <div class="pagina-texto small-12 medium-12 large-12 column">
                            <?php the_content(); ?>
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
        </div>
    </section>