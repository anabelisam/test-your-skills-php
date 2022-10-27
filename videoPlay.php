<?php

/** ¿Cómo optimizarías este flujo de trabajo para cargar 5 videos de Youtube sin repetir el mismo código 5 veces?
 * ¿Qué errores hay en los estilos que no permiten que cada video quede centrado?
 */

function mostrarTitulo() {
    echo 'Hola! Estos son mis videos favoritos de Youtube';
}

?>

<h1><?php mostrarTitulo(); ?></h1>;

<?php

echo '<style>
    .marg {
        margin: 16px;
        padding: 10px;
        width: 900px;
        text-align: center;
    }
</style>';

echo '<div style="align:center;" class="marg">';
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/_MT8jwmsJ6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
echo '</div>';

echo '<div style="align:center;" class="marg">';
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/d0dCmqVCkK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
echo '</div>';

echo '<div style="align:center;" class="marg">';
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/P6enm5e-yaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
echo '</div>';

echo '<div style="align:center;" class="marg">';
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/bcXVcRwNg70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
echo '</div>';

echo '<div style="align:center;" class="marg">';
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/P6enm5e-yaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
echo '</div>';
?>