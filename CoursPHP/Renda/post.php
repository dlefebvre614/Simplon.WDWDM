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

	$query = 'SELECT wp_posts.ID AS post_ID, post_title, post_content, post_type, post_date, display_name, comment_count
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
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Renda - clean blog theme based on Bootstrap</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

		<!-- Navigation factorisé incluant de <div du container : DLE -->
		<?php include("layout/menu.inc.php"); ?>

		<!-- <div class="container"> contenu dans menu.inc.php : DLE -->
		<section>
			<div class="row">
				<div class="col-md-8">
					<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="https://picsum.photos/750/500?random=<?= $row["post_ID"] ?>" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h1><a href="index.php">Blog</a>: Meet, Show, Exchange... > <?= $row["post_type"] ?>: <?= $row["post_title"] ?></h1>
							<div class="post-meta"><span>by <a href="#"><?= $row["display_name"] ?></a></span>/<span><i class="fa fa-clock-o"></i><?= $row["post_date"] ?></span>/<span><i class="fa fa-comment-o"></i> <a href="#"><?= $row["comment_count"] ?></a></span></div>
							<div class="blog-post-text">
								<p><?= $row["post_content"] ?></p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-4 sidebar-gutter">
					<aside>
						<!-- sidebar-widget -->
						<div class="sidebar-widget">
							<h3 class="sidebar-title">About Me</h3>
							<div class="widget-container widget-about">
								<a href="post.html"><img src="https://picsum.photos/290/160?random=12" alt=""></a>
								<h4>Jamie Mooz</h4>
								<div class="author-title">Designer</div>
								<p>While everyone’s eyes are glued to the runway, it’s hard to ignore that there are major fashion moments on the front row too.</p>
							</div>
						</div>
						<!-- sidebar-widget -->
						<div class="sidebar-widget">
							<h3 class="sidebar-title">Featured Posts</h3>
							<div class="widget-container">
								<article class="widget-post">
									<div class="post-image">
										<a href="post.html"><img src="https://picsum.photos/90/60?random=70" alt=""></a>
									</div>
									<div class="post-body">
										<h2><a href="post.html">The State of the Word 2014</a></h2>
										<div class="post-meta">
											<span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
										</div>
									</div>
								</article>
								<article class="widget-post">
									<div class="post-image">
										<a href="post.html"><img src="https://picsum.photos/90/60?random=71" alt=""></a>
									</div>
									<div class="post-body">
										<h2><a href="post.html">Why The Muppets Needs to Channel 30 Rock</a></h2>
										<div class="post-meta">
											<span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
										</div>
									</div>
								</article>
								<article class="widget-post">
									<div class="post-image">
										<a href="post.html"><img src="https://picsum.photos/90/60?random=72" alt=""></a>
									</div>
									<div class="post-body">
										<h2><a href="post.html">The State of the Word 2014</a></h2>
										<div class="post-meta">
											<span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
										</div>
									</div>
								</article>
								<article class="widget-post">
									<div class="post-image">
										<a href="post.html"><img src="https://picsum.photos/90/60?random=73" alt=""></a>
									</div>
									<div class="post-body">
										<h2><a href="post.html">Vintage-Inspired Finds for Your Home</a></h2>
										<div class="post-meta">
											<span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
										</div>
									</div>
								</article>
								<article class="widget-post">
									<div class="post-image">
										<a href="post.html"><img src="https://picsum.photos/90/60?random=74" alt=""></a>
									</div>
									<div class="post-body">
										<h2><a href="post.html">The State of the Word 2014</a></h2>
										<div class="post-meta">
											<span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
										</div>
									</div>
								</article>
							</div>
						</div>
						<!-- sidebar-widget -->
						<div class="sidebar-widget">
							<h3 class="sidebar-title">Socials</h3>
							<div class="widget-container">
								<div class="widget-socials">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-reddit"></i></a>
								</div>
							</div>
						</div>
						<!-- sidebar-widget -->
						<div class="sidebar-widget">
							<h3 class="sidebar-title">Categories</h3>
							<div class="widget-container">
								<ul>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Art</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Featured</a></li>
									<li><a href="#">Graphics</a></li>
									<li><a href="#">Peoples</a></li>
									<li><a href="#">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<!-- </div> en trop DLE -->
					</aside>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include("layout/footer.inc.php"); ?>

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