header.php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); // Cette fonction permet d'ajouter des scripts et styles supplémentaires ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo('name'); ?></h1> <!-- Affiche le nom du site -->
        <nav>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // À définir plus tard
                ));
            ?>
        </nav>
    </header>
