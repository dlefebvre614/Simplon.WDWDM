<?PHP

var_dump($_GET);
$categoryid = $_GET["id"];

// Database connection parameters.
$hostname = 'localhost';
$user = "root";
$pass = "";
$dbname = "wordpress_3";
$table = "";
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

try {
    // $query = SELECT
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
        <h1>Blog: Meet, Show, Exchange...</h1>
        <?PHP foreach ($tab as $row) { ?></a>
            <h2><a href="article.php?id=<?= $row["posts_ID"] ?>">Article</a>: <?= $row["post_title"] ?></h2>
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

    //echo "Fin du SQL !";

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>