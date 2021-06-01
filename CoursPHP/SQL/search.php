<?PHP // always registered in the first line, first columns

// var_dump($_GET);
if (!isset($_GET["s"]) || $_GET["s"] === "") {
    // die("necessary parameter");
    header("location: sql.php");
}

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

try {
    /* $query = 'SELECT wp_posts.ID AS posts_ID, post_type, post_status, post_title, post_content, post_date, display_name, comment_count
                        FROM wp_posts 
                        INNER JOIN wp_users ON post_author = wp_users.ID
                        WHERE (post_type = "post"
                            AND post_status = "publish")
                            AND (post_title LIKE "%' . $_GET["s"] . '%"
                            OR post_content LIKE "%' . $_GET["s"] . '%")
                            ORDER BY post_date DESC'; */

    $query = 'SELECT wp_posts.ID AS posts_ID, post_type, post_status, post_title, post_content, post_date, display_name, comment_count
                            FROM wp_posts 
                            INNER JOIN wp_users ON post_author = wp_users.ID
                            WHERE (post_type = "post"
                                AND post_status = "publish")
                                AND (post_title LIKE :s
                                OR post_content LIKE :s)
                                ORDER BY post_date DESC';

    //die($query);
    /*
                            SELECT wp_posts.ID AS posts_ID, post_title, post_content, post_date, display_name
                        FROM wp_posts 
                        INNER JOIN wp_users ON post_author = wp_users.ID
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            -- AND post_author = wp_users.ID
                            AND post_title LIKE "%atelier%"
                            ORDER BY post_date DESC
                            */

    // FROM wp_posts, wp_users

    // AND post_author = wp_users.ID 
    // replace by
    // SELECT *
    // FROM A
    // INNER JOIN B ON A.key = B.key

    //In-memory data processing
    //$req = $dbh->query($query);
    $req = $dbh->prepare($query);
    $req->bindValue(':s', "%" . $_GET["s"] . "%", PDO::PARAM_STR);
    $req->execute();

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

        <!--<form action="" method="get">
    </form> methode par défaut -->

        <form action="search.php">
            <label for="fe_search">Search</label>
            <input type="text" name="s" id="fe_search">
            <input type="submit" value="Send">
        </form>

        <h1><a href="sql.php">Blog</a>: Meet, Show, Exchange... > Search Result for: <?= $_GET['s'] ?></h1>
        <?PHP foreach ($tab as $row) { ?></a>
            <h2><a href="article.php?id=<?= $row["posts_ID"] ?>">Article</a>: <?= $row["post_title"] ?></h2>
            <p><?= $row["post_content"] ?></p>
            <p>Written by: <?= $row["display_name"] ?> - Date : <?= $row["post_date"] ?> - Number of comments: <?= $row["comment_count"] ?></p>
            <h3><a href="article.php?id=<?= $row["posts_ID"] ?>">Read more...</a></h3>
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
// do not put this tag
?>