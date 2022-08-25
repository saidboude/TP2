
<?php get_header(); ?>
<section class="site__main">
    <h1>Modèle Wordpress</h1>
    
    <div class="blocs__horizontaux">
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
            <article>
                <div>
                    <?php $image = get_field('image');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h5>
                        <a target=_blank href="<?=get_permalink() ?>"><?php the_field('titre'); ?></a>
                    </h5>
                    <p><b><?php the_field('sous_titre')?></b></p>
                    <p><?php the_field('resume')?></p>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>  
    </div>

    <?php wp_nav_menu(array(
                'menu' => ' accueil',
                'container' => 'nav'
                
            )); ?>  
</section>
            
<?php get_footer(); ?>