<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

ob_start();
try {
    if ($page === 'post.home') {

        require 'model/postRepository.php';
        $posts = findALL();

        require 'home.php';
    } elseif ($page === 'post.show') {

        require 'model/postRepository.php';
        $post = findOneById($_GET['id']);

        require 'show.php';
    } elseif ($page === 'user.connect') {
        require 'connectionForm.php';
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require 'error404.php';
}
$content = ob_get_clean();

require 'base.php';
