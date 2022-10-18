
<?php

/*
¿Podrías explicar qué hace el siguiente código y optimizarlo?
Sin ejecutar este documento, podrías graficar el resultado que saldrá en la pantalla?
*/

function buildStyle($width, $borderColor, $padding, $margin, $backgroundColor) {
    $sectionWidth = "width:".$width."px;";
    $sectionBorder = "border: 1px solid ".$borderColor.";";
    $sectionPadding = "padding: ".$padding."px;";
    $sectionMargin = "margin: ".$margin."px;";
    $sectionBackground = "background-color: ".$backgroundColor.";";
    $sectionDisplay = "display: inline-block;";

    return $sectionWidth.$sectionBorder.$sectionPadding.$sectionMargin.$sectionBackground.$sectionDisplay;
}

function buildSection($style, $content) {
    return "<section style='".$style."'>".$content."</section>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template HTML</title>
</head>
<body>
    <?php
        $propColor = ['#ff6961', '#77dd77', '#fdfd96', '#84b6f4', '#fdcae1', '#ffda9e', '#c5c6c8', '#fa5f49'];
        $contentSection = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis nulla ac accumsan suscipit. Nullam tempus elit risus, vitae viverra odio sodales eget. Cras tristique porttitor tortor eu semper. Pellentesque vel hendrerit nisi. Maecenas vitae odio sed justo malesuada tristique. Sed fermentum est at purus placerat vestibulum. Etiam finibus suscipit massa, a pharetra erat vulputate id. Donec et eros orci. Sed sed convallis odio. Nullam posuere, eros eu porta tempus, diam ipsum viverra odio, eget laoreet leo est in lectus. Aenean sagittis nec tellus vitae hendrerit.";
        for ($i=0; $i < 8; $i++) { 
            echo buildSection(buildStyle(300, $propColor[$i], 10, 10, $propColor[$i]), $contentSection);
        }
    ?>
</body>
</html>