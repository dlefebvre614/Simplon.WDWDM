<?PHP

// API Originale : <php class="net">
// <manual>
// <fr>
// <book_mysql class="php"></book_mysql>
// <book_mysql class="php"></book_mysqli>
// <book_mysql class="php"></book_pdo>

// https://www.php.net/manual/fr/book.pdo.php

// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

// Database connection parameters.
$hostname = 'localhost';
$user = "root";
$pass = "";
$dbname = "wordpress_3";
$table = "";

// $dbh = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname, $user, $pass);
$dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbname;
// echo $dsn;

// Options for processing database data
$options = array(
    // case => valeur
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",  // charset
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // debug level
);

try {
    // Open Database
    $dbh = new PDO($dsn, $user, $pass, $options);
    //var_dump($dbh);
    //echo "Connected";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// Examples of retrieving data in the database
/* $tab = $dbh->query('SELECT * from wp_posts'); */

/* $tab = $dbh->query('SELECT post_title, LEFT(post_contest, 100), post_date from wp_posts'); */

/* $tab = $dbh->query('SELECT post_title, LEFT(post_content, 100), post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID'); // Jointure */

try {
    // $query = 'SELECT post_title, LEFT(post_content, 100) AS post_content_tr, post_date, display_name
    $query = 'SELECT wp_posts.ID AS posts_ID, post_title, post_content, post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID 
                            ORDER BY post_date DESC'; // knuckle and sort

    //In-memory data processing
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    // var_dump($tab);

    // Creating the blog: Html
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Passion of Wood</title>
    </head>

    <body>
        <h1>Blog: Bring together Show Exchange...</h1>
        <?PHP foreach ($tab as $row) { ?></a>
            <h2><a href="article.php?id=<?= $row["posts_ID"] ?>"><?= $row["post_title"] ?><a></h2>
            <p><?= $row["post_content"] ?></p>
            <p>Written by: <?= $row["display_name"] ?> - Date : <?= $row["post_date"] ?></p>
            <h3><a href="category.php?id=...">Future link to the category of this article</a></h3>
        <?PHP } ?>
    </body>

    </html>

<?PHP

    // var_dump($tab);
    // exit;

    // freeing memory
    $dbh = null;

    /*
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
    */

    //echo "Fin du SQL !";

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>