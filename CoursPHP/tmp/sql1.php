<?PHP

// API Originale : <php class="net">
// <manual>
// <fr>
// <book_mysql class="php"></book_mysql>
// <book_mysql class="php"></book_mysqli>
// <book_mysql class="php"></book_pdo>

// https://www.php.net/manual/fr/book.pdo.php

// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

$user = "root";
$pass = "";
$dbname = "wordpress_1";
$table = "";

echo 'NEW';

// $e est une variable PDO rendu par try PDO.
// Methode PDOException : $e->getMessage()
// Instance $dbh

/*
SELECT 
post_title,
LEFT(post_content, 100),
post_date,
display_name
FROM wp_posts, wp_users
WHERE post_type = "post"
AND post_status = "publish"
AND post_author = wp_users.ID
*/


/* try {
    $dbh = new PDO('mysql:host=localhost;dbname=wordpress_1', $user, $pass);
    var_dump($dbh);

    /* $tab = $dbh->query('SELECT * from wp_posts'); */
/* $tab = $dbh->query('SELECT post_title, LEFT(post_contest, 100), post_date from wp_posts'); */

/* $tab = $dbh->query('SELECT post_title, LEFT(post_content, 100), post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID'); // Jointure

    $tab = $dbh->query('SELECT post_title, LEFT(post_content, 100), post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID'); // Jointure

    var_dump($tab);
    // exit;    

    foreach ($tab as $row) {
        // print_r($row); // print récursif parcours la structure
        var_dump($row);
    }
    $dbh = null;
    /*
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
    

    echo "Fin du SQL !";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
} */

$dbname = 'wordpress_1';
$hostname = 'localhost';
$dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbname;
// echo $dsn;

try {
    $dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbname;
    // $dbh = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname, $user, $pass);
    $options = array(
        // case => valeur
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",  // cohérance du charset
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // débug
    );
    $dbh = new PDO($dsn, $user, $pass, $options);
    var_dump($dbh);
    echo "Connected";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

/* $tab = $dbh->query('SELECT * from wp_posts'); */
/* $tab = $dbh->query('SELECT post_title, LEFT(post_contest, 100), post_date from wp_posts'); */

/* $tab = $dbh->query('SELECT post_title, LEFT(post_content, 100), post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID'); // Jointure */

try {
    $tab = $dbh->query('SELECT post_title, LEFT(post_content, 100), post_date, display_name
                        FROM wp_posts, wp_users
                        WHERE post_type = "post"
                            AND post_status = "publish"
                            AND post_author = wp_users.ID'); // Jointure

    var_dump($tab);
    // exit;    

    foreach ($tab as $row) {
        // print_r($row); // print récursif parcours la structure
        var_dump($row);
    }
    $dbh = null;
    /*
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
    */

    echo "Fin du SQL !";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
