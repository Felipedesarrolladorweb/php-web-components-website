<?php
function load_template($template_name) {
    return file_get_contents(__DIR__ . '/../templates/' . $template_name . '.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div id="root">
        <header-component></header-component>
        <main>
            <h2>About Us</h2>
        </main>
        <footer-component></footer-component>
    </div>

    <script type="module" src="/components/web-components.js"></script>

    <!-- Declarative Shadow DOM Templates -->
    <?= load_template('header') ?>
    <?= load_template('footer') ?>
</body>
</html>
