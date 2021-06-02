<?PHP // always registered in the first line, first columns

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
	$query = 'SELECT wp_posts.ID AS posts_ID, post_type, post_title, post_content, post_date, display_name, comment_count
                        FROM wp_posts 
                        INNER JOIN wp_users ON post_author = wp_users.ID
                        WHERE (post_type = "post" OR post_type = "page")
                            AND post_status = "publish"
                            ORDER BY post_date DESC';

	//In-memory data processing
	$req = $dbh->query($query);
	$tab = $req->fetchAll();
	$req->closeCursor();
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
		<!--<header>
		<a href="index.html"><img src="images/logo.png" alt="logo"></a>
	</header>-->
		<section class="main-slider">
			<ul class="bxslider">
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=1" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=2" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=30" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=31" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=32" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
				<li>
					<div class="slider-item"><img src="https://picsum.photos/1140/500?random=33" title="Funky roots" />
						<h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2>
					</div>
				</li>
			</ul>
		</section>
		<section>
			<div class="row">
				<div class="col-md-8">
					<!--<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="https://picsum.photos/750/500?random=4" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h2><a href="post.html">Vintage-Inspired Finds for Your Home</a></h2>
							<div class="post-meta"><span>by <a href="#">Jamie Mooze</a></span>/<span><i class="fa fa-clock-o"></i>March 14, 2015</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
							<p>ew months ago, we found ridiculously cheap plane tickets for Boston and off we went. It was our first visit to the city and, believe it or not, Stockholm in February was more pleasant than Boston in March. It probably has a lot to do with the fact that we arrived completely unprepared. That I, in my converse and thin jacket, did not end up with pneumonia is honestly not even fair.</p>
							<div class="read-more"><a href="#">Continue Reading</a></div>
						</div>
					</article>
					<!-- article -->
					<!--<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="https://picsum.photos/750/500?random=5" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h2><a href="post.html">The Best Street Style Looks of London Fashion Week</a></h2>
							<div class="post-meta"><span>by <a href="#">Jamie Mooze</a></span>/<span><i class="fa fa-clock-o"></i>March 14, 2015</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
							<p>Few months ago, we found ridiculously cheap plane tickets for Boston and off we went. It was our first visit to the city and, believe it or not, Stockholm in February was more pleasant than Boston in March. It probably has a lot to do with the fact that we arrived completely unprepared.</p>
							<div class="read-more"><a href="#">Continue Reading</a></div>
						</div>
					</article>
					<!-- article -->


					<h1>Blog: Meet, Show, Exchange...</h1>
					<?PHP foreach ($tab as $row) { ?>
						<article class="blog-post">
							<div class="blog-post-image">
								<a href="post.html"><img src="https://picsum.photos/750/500?random=<?= $row["posts_ID"] ?>" alt=""></a>
							</div>
							<div class="blog-post-body">
								<h2><a href="post.php?id=<?= $row["posts_ID"] ?>"><?= $row["post_type"] ?></a>: <?= $row["post_title"] ?></h2>
								<div class="post-meta"><span>by <a href="#"><?= $row["display_name"] ?></a></span>/<span><i class="fa fa-clock-o"></i><?= $row["post_date"] ?></span>/<span><i class="fa fa-comment-o"></i> <a href="#"><?= $row["comment_count"] ?></a></span></div>
								<p><?= $row["post_content"] ?></p>
								<div class="read-more"><a href="post.php?id=<?= $row["posts_ID"] ?>">Continue Reading</a></div>
							</div>
						</article>
					<?PHP } ?>
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
										<a href="post.html"><img src="https://picsum.photos/90/60?random=7" alt=""></a>
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
										<a href="post.html"><img src="https://picsum.photos/90/60?random=8" alt=""></a>
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
										<a href="post.html"><img src="https://picsum.photos/90/60?random=9" alt=""></a>
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
										<a href="post.html"><img src="https://picsum.photos/90/60?random=10" alt=""></a>
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
										<a href="post.html"><img src="https://picsum.photos/90/60?random=11" alt=""></a>
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
						<!--</div> en trop -->
					</aside>
				</div>
			</div>
		</section>
		<!-- </div> inclus dans le fichier footer.inc.php : DLE -->

		<!-- Footer factorisé incluant le </div> du container : DLE -->
		<?php include("layout/footer.inc.php"); ?>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.bxslider.js"></script>
		<script src="js/mooz.scripts.min.js"></script>
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