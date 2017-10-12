            <footer>
                <div class="rodape small-12 small-centered medium-12 medium-centered large-12 large-centered left column"> <!-- Rodape -->
                    <div class="rodape-widgets row">
                        <?php dynamic_sidebar('widgets-rodape'); ?> <!-- Widgets do Rodapé -->
                    </div>
                    <div class="rodape-creditos text-center row">
                        <div class="small-12 small-centered medium-12 medium-centered large-12 large-centered column">
                            <a target="blank" href="https://wordpress.org">Orgulhosamente mantido com WordPress</a> - <a target="blank" href="https://www.amazon.com.br/dp/B072J3WVPK/">Compre meu livro! ^^</a> Ah, e pode apagar esse textinho do rodapé, se quiser.
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <?php wp_footer(); ?>
        
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
