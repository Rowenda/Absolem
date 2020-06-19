<?php

/**
 * Génère le rendu HTML d'une page
 */
function render(string $view, array $values = [])
{
    // Transformation du contenu du tableau associatif $values en variables
    // Le nom des variables correspond aux clés du tableau, les valeurs aux valeurs
    extract($values);

    include VIEWS_DIR . '/base.phtml';
}
