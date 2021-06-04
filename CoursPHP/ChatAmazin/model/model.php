<?PHP // always registered in the first line, first columns

/* -------------------------------------------------------------------------
the chat project : ISSUE N° 2 Create the database and insert an object entry

See export database:

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES
(1, 'Didier', 'Salut, c\'est Didier\r\n\r\nA bientôt', '2021-06-02 15:00:52');
COMMIT;

these SQL statements would be used in the case of an import of the database 
from a periodic export to restore it. here the export contains only one entry.
*/


/* ---------------------------------------------------------------------------
the chat project : ISSUE N° 3 in french

15h00 creer une branche displayDatas Affichage des données stockées en BDD

Créer un fichier model.php dans le dossier model (voir la doc https://php.net/).
Créer une fonction getDBConnection() dont le rôle est de se connecter à la BDD.
Créer une fonction findAll() dont le rôle est récupéré tous les messages dans la BDD.
Appeler findAll() dans index.php et modifier la boucle de chat.php pour afficher tous les messages dans le chat.
*/

/* GIT actions to start the issue n° 3:
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch displayDatas
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git checkout displayDatas
Switched to branch 'displayDatas'
M       CoursPHP/SimplonDWWM-Projet-Chat !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* displayDatas
  main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin>
*/

function getDBConnection()
{
  // Database connection parameters.
  $hostname = 'localhost';
  $user = "root";
  $pass = "";
  $dbname = "chat";
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
    return $dbh;
  } catch (PDOException $e) {
    print "unable to connect to the database!" . $e->getMessage() . "<br/>";
    die();
  }
}

function findAll()
{

  $dbh = getDBConnection();

  try {
    $query = 'SELECT *
        FROM message 
        ORDER BY date DESC
        LIMIT 5
        ';

    //In-memory data processing
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    // var_dump($tab);
    // exit;

    // freeing memory
    $dbh = null;

    //echo "Fin du SQL !";
    return $tab;
  } catch (PDOException $e) {
    print "unable to get objects from the database!" . $e->getMessage() . "<br/>";
    die();
  }
}

/* GIT actions to end the issue n° 3 and return to main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* displayDatas
  main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git add .
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git commit -m "add Issue n° 3"
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git push origin displayDatas
// --> I wait for the validation of the displayDatas branch by the project manager before merging and deleting it
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git checkout main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* main
  displayDatas
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git merge displayDatas
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch -d displayDatas
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin>


/* ---------------------------------------------------------------------------
the chat project : ISSUE N° 4 in french
10h30 le 04 Juin 2021

Publication d'un nouveau message

1) Si cela n'a pas déjà été fait, "paramétrer" le formulaire HTML (action et method du formulaire et name pour chacun de ses champs).
2) Récupérer les données postées dans index.php.
3) Créer une fonction create() dans model.php.
4) Appeler cette fonction dans index.php quand un formulaire a été posté.
*/

/* GIT actions to end the issue n° 4 and return to main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch
* displayDatas
  main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git checkout main
  displayDatas
* main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git branch addData
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git checkout addData
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git git branch
* addData
  displayDatas
  main
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git add README.md
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git commit -m "Update README.md"
PS C:\wamp64\www\Simplon.WDWDM\CoursPHP\ChatAmazin> git push origin addData 
*/

function create($pseudo, $content)
{
  // connect to database
  $dbh = getDBConnection();

  // here insert message in database
  try {
    $query = 'INSERT INTO message (pseudo, content) VALUES (:pseudo, :content)';
    $req = $dbh->prepare($query);
    $req->execute([
      'pseudo' => $pseudo,
      'content' => $content
    ]);
    // freeing memory
    $req->closeCursor();
    $dbh = null;
  } catch (PDOException $e) {
    print "unable to create object entry from the database!" . $e->getMessage() . "<br/>";
    die();
  }
}






// do not put the tag: end of PHP (? >)