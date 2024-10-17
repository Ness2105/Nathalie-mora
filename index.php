index.php
<?php
get_header(); // Inclut le fichier header.php
?>

<h1>Bienvenue sur mon thème personnalisé !</h1>

<?php
// Boucle principale pour afficher les articles
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title('<h2>', '</h2>'); // Affiche le titre de l'article
        the_content(); // Affiche le contenu de l'article
    endwhile;
else :
    echo '<p>Aucun contenu trouvé.</p>';
endif;

get_footer(); // Inclut le fichier footer.php
?>
