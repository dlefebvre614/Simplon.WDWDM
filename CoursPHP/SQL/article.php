<?PHP

// var_dump($_GET);
// $postid = $_GET["id"];
if (!isset($_GET["id"]) || $_GET["id"] === "") {
    // die("necessary parameter");
    header("location: sql.php");
}
// Database connection parameters.
$hostname = 'localhost';
$user = "root";
$pass = "";
$dbname = "wordpress_3";
$table = "";
$dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbname;

// Options for processing database data
$options = array(
    // case => valeur
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",  // charset
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // debug level
);

// Open Database
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
    //var_dump($dbh);
    //echo "Connected";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}



// Retrieving data in the database
try {
    /* $query = 'SELECT wp_posts.ID AS post_ID, post_title, post_content, post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post" 
                            AND post_status = "publish"
                            AND post_author = wp_users.ID
                            AND "' . $postid . '" = wp_posts.ID';
    */

    $query = 'SELECT post_title, post_content, post_date, display_name, comment_count
                        FROM wp_posts 
                        INNER JOIN wp_users ON post_author = wp_users.ID
                        WHERE wp_posts.ID = ' . $_GET["id"];

    //  AND wp_posts.ID = "' . $postid . '"'; non-util quotation mark for an integer

    // In-memory data processing
    // die($query); // Stop point

    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $row = $req->fetch();
    $req->closeCursor();
    //var_dump($tab);
    //var_dump($row);
    //die();

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
        <!--<h1><a href="sql.php">Blog</a>: Bring together, Show, Exchange...</h1>-->

        <h1><a href="sql.php">Blog</a>: Meet, Show, Exchange... > Article: <?= $row["post_title"] ?></h1>
        <p><?= $row["post_content"] ?></p>
        <p>Written by: <?= $row["display_name"] ?> - Date : <?= $row["post_date"] ?> - Number of comments: <?= $row["comment_count"] ?></p>
        <h3><a href="category.php?id=...">Future link to the category of this article</a></h3>
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