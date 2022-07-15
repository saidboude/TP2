<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : Mon WordPress
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                    <div>
                    <img src="2022-31W/wp-admin/images/logo-said.jpg" alt="logo">
                    </div>
                <h1> 
                    <a href="<?=esc_url(home_url('/'))?>"><?=bloginfo('name');?></a> 
                </h1>
                <h2>
                    <?=bloginfo('description');?>
                </h2>
                </section>
            <nav class="site__navigation">
            <div>
            <a href="https://www.cmaisonneuve.qc.ca/">Accueil</a>
		    <a href="https://www.cmaisonneuve.qc.ca/entreprises-et-organisations/">Programme</a>
		    <a href="https://www.cmaisonneuve.qc.ca/bibliotheque/">Bibliothèque</a>
		    <a href="https://www.cmaisonneuve.qc.ca/grand-public/">Grand Public</a>
		    <a href="https://www.cmaisonneuve.qc.ca/fondation/actualites-de-la-fondation/">Fondation</a>
            </div>
            </nav>
        </header>
        <section class="site__sidebar">
            <h3>Menu cours</h3>
            <?php wp_nav_menu(array(
                'menu' => '',
                'container' => 'nav',
                'container_class' => 'menu__sidebar',
                'menu_class' => 'menu__sidebar__ul',
            )) ?>
        </section>