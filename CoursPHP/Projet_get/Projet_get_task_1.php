		<!-- header factoring bootstrap and including <dir container DLE -->
		<?php include("layout/header.inc.php"); ?>

        <!-- model data's including HTML, buttons and URL with parameters DLE -->
		<?php include("model/variables.inc.php"); ?>
		<!-- Var string HTML $start -->
		<!-- Var string HTML $step_1 -->
		<!-- Var string HTML $step_2 -->
		<!-- Var string HTML $step_3 -->
		<!-- Var string HTML $step_4 -->
		<!-- Var string HTML $restart -->

		<!-- URL Parameters
		     var int $step
			 var int $result
		-->

		<!-- GIT commands
			On TERMINAL  : 
			php -S localhost:8000, ([CTRL] "c" to stop the server)
			cd CoursPHP
			git add Projet_$get (once)
			git commit -m "add Projet_$get task 1"
			git push origin main

			Verification : https://github.com/dlefebvre614/Simplon.WDWDM
		-->

        <!-- $get_task_1 Projet's : The answer to each question shows the following answer (without addressing the answer). CGE -->
       <?php

		var_dump($_GET);
		echo "<hr>";

		// Start
		if ($_GET == null) {
    		echo $start;
		}

		// step 1
		if (isset($_GET['step']) && $_GET['step'] == '1') {
			echo $step_1;
		}

		// step 2
		if (isset($_GET['step']) && $_GET['step'] == '2') {
			// $result = $_get['result'];
			echo $step_2;
		}

		if (isset($_GET['step']) && $_GET['step'] == '3') {
			echo $step_3;
		}

		if (isset($_GET['step']) && $_GET['step'] == '4') {
			echo $step_4;
		}

		if (isset($_GET['step']) && $_GET['step'] == '5') {
			echo $restart;
		}

       ?>
    
		<!-- footer factor's including </div> du container : DLE -->
		<?php include("layout/footer.inc.php"); ?>