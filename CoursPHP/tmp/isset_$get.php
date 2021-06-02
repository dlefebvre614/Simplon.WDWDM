<a href="/coursPHP/coursBases1.php?nom=ghastine">mon lien</a>
<br>

<?php 
if(isset($_GET['nom'])) {
    echo $_GET['nom']; //$_GET['nom'] = "ghastine"
}
?>