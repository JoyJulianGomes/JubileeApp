<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TestView</title>
    <link rel="stylesheet" href="view/css/test.css" />
  </head>
  <body>
    <h1>Test View</h1>
    <?php
    foreach ($args as $key => $value) {
        echo "$key" . "=>" . "$value" . "<br>";
    }
    ?>
  </body>
</html>
