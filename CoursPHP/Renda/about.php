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
			<header>
				<a href="index.html"><img src="images/logo.png" alt="logo"></a>
			</header>
			<section>
				<div class="row">
					<div class="col-md-12">
						<article class="blog-post">
							<div class="blog-post-body">
								<h2><a href="post.html">About Author</a></h2>
								<div class="blog-post-text">

									<p>A newly-developed mathematical method can detect geometric structure in neural activity in the brain. “Previously, in order to understand this structure, scientists needed to relate neural activity to some specific external stimulus,” said Vladimir Itskov, associate professor of mathematics at Penn State University. “Our method is the first to be able to reveal this structure without our knowing an external stimulus ahead of time. We’ve now shown that our new method will allow us to explore the organizational structure of neurons without knowing their function in advance.”</p>

									<p>“The traditional methods used by researchers to analyze the relationship between the activities of neurons were adopted from physics,” said Carina Curto, associate professor of mathematics at Penn State, “but neuroscience data doesn’t necessarily play by the same rules as data from physics, so we need new tools. Our method is a first step toward developing a new mathematical toolkit to uncover the structure of neural circuits with unknown function in the brain.”</p>

									<h3>Math reveals structure in neural activity in the brain</h3>
									<p>The method — clique topology — was developed by an interdisciplinary team of researchers at Penn State, the University of Pennsylvania, the Howard Hughes Medical Institute, and the University of Nebraska-Lincoln. The method is described in a paper that will be posted in the early online edition of the journal Proceedings of the National Academy of Sciences during the week ending October 23, 2015.</p>

									<p>“We have adopted approaches from the field of algebraic topology that previously had been used primarily in the domain of pure mathematics and have applied them to experimental data on the activity of place cells — specialized neurons in the part of the brain called the hippocampus that sense the position of an animal in its environment,” said Curto.</p>
								</div>
							</div>
						</article>
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