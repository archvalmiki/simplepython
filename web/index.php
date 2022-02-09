<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Cool Companies</title>
    </head>

    <body>
        <h1>Some Cool Companies</h1>
        <ul>
            <?php

            $json = file_get_contents('http://simplepython_market-api_1:8080/');
            $obj = json_decode($json);

            $companies = $obj->company;

            foreach ($companies as $company) {
                echo "<li>$company</li>";
            }

            ?>
        </ul>
    </body>
</html>