<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background: grey;
            text-align: center;
            padding: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>
                <?php 
                    $name = $_GET['name']; // the superglobal variable that gets 
                    // the result from a search query

                    echo $name;
                ?>
            </h1>
        </header>
    <main>
</body>
</html>