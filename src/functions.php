<?php

/**
 * Generate HTML
 */
function render(string $view, array $values = [])
{
    // Transformation du contenu du tableau associatif $values en variables
    // Le nom des variables correspond aux clés du tableau, les valeurs aux valeurs
    extract($values);

    include VIEWS_DIR . '/base.phtml';
}

function formatDate(string $date)
{
    return date('d/m/Y',strtotime($date));
}

function asset(string $asset) {
    return BASE_URL . '/' . $asset;
}