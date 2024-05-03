<?php

require_once("globals.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="tyylit.css">
        <title>Perhekalenteri</title>
    </head>

    <body>
        <header>
            <h1>Perhekalenteri</h1>
        </header>

        <section>
            <form action="kalenteri.php" method="GET" target="_blank">

                <label for="year">Vuosi:</label>
                <input id="year" type="number" name="year" value="<?php echo date("Y"); ?>">

                <label for="month">Kuukausi:</label>
                <select id="month" name="month">
                    <?php
                    foreach($months as $key => $value) {
                    echo "<option value='$key'>$value</option>\n";
                    }
                    ?>
                </select>

                <label for="header">Otsikkofontti:</label>
                <select id="header" name="header">
                    <?php
                    foreach($headerfonts as $key => $value) {
                    echo "<option value='$key'>$value[name]</option>\n";
                    }
                    ?>
                </select>

                <label for="bgimage">Kuva:</label>
                <select id="bgimage" name="bgimage">
                    <?php
                    foreach ($bgimages as $key => $value) {
                    echo "<option value='$key'>$value[name]</option>\n";
                    }
                    ?>
                </select>

                <label for="names">Perheenjäsenet:</label>
                <textarea id="names" name="names" rows="5"><?= $defaultnames ?></textarea>

                <input type="submit" value="Avaa kalenterisivu">

            </form>
        </section>

        <footer>
            <hr>
            <div>perhekalenteri by ansu</div>
        </footer>
    </body>
</html>
