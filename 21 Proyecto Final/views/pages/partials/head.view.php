
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <!--
    " PUBLIC_PATH   // es php enbebido y apunta al directorio /public
    -->
    <link rel="stylesheet" href="<?= PUBLIC_PATH ?>css/styles.css"/>
    <link href="https://file.myfontastic.com/SR6VKQnjH8vuZHiwZsNSd9/icons.css" rel="stylesheet"/>
    <!-- $article->name accdemos al nombre del articulo en la BD, de no etist solo pondra Camisetas | Ed Styles  -->
    <title> <?= $article->name ?? 'Camisetas'  ?>| ED Styles </title>
</head>
<body>