<html>
<head>
    <title>Testing Containers</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <?php echo "<h1>Avengers:</h1>"; ?>

    <?php
    $host = 'db';
    $db   = 'myDb';
    $user = 'user';
    $pass = 'test';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->query('SELECT * FROM Person');
    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th><th>age</th></tr></thead>';
    foreach ($stmt as $row)
    {
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['age'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    $pdo = null;
    $dsn = null;
    ?>
</div>
</body>
</html>