<?PHP

// $path = dirname(__DIR__);

function render($view, $datas)
{
    $path = dirname(__DIR__);

    extract($datas);

    ob_start();
    require $path .  '/view/post/' . $view . '.php';
    $content = ob_get_clean();

    require $path . '/view/base.php';
}

function home()
{
    $path = dirname(__DIR__);
    //ob_start();
    require $path . '/model/postRepository.php';
    $posts = findALL();
    //$content = ob_get_clean();

    //require $path . '/view/base.php';
    //require $path . '/view/post/home.php';
    render('home', compact('posts'));
}

function show()
{
    $path = dirname(__DIR__);
    //ob_start();
    require $path . '/model/postRepository.php';
    $post = findOneById($_GET['id']);
    //$content = ob_get_clean();

    //require $path . '/view/base.php';
    //require $path . '/view/post/show.php';
    render('show', compact('post'));
}
