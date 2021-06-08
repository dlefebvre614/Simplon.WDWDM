<?PHP

function getDBConnection()
{
    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];
        return new PDO('mysql:host=localhost;dbname=blog', 'root', '', $options);
    } catch (PDOException $e) {
        print "Connnection error! " . $e->getMessage() . "<br/>";
        die();
    }
}

function findALL()
{
    $dbh = getDBConnection();

    $request = $dbh->query('SELECT id, title, LEFT(content, 100) as content, user, date FROM post');
    $request->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $request->fetchAll();
    $request->closeCursor();
    $dbh = null;
    return $posts;
}

function findOneById($id)
{
    $dbh = getDBConnection();

    $request = $dbh->query('SELECT * FROM post WHERE id=?');
    $request->execute([$id]);
    $request->setFetchMode(PDO::FETCH_ASSOC);
    $post = $request->fetch();
    $request->closeCursor();
    $dbh = null;
    return $post;
}
