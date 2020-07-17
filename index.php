<?php
    //Loading composer 
    require 'vendor/autoload.php'; 

    //configuration de notre moteur de template
	use Twig\Environment;
    use Twig\Loader\FilesystemLoader;
    
    //creation moteur template
    $loader = new FilesystemLoader('app/template');
	$twig = new Environment($loader);
	
    //we can use contact without include the class, it's autoloaded.
    //use App\entity\Contact;
    //$contact1 = new Contact("pikachu","vincent");
    
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	
	// route the request internally
	if ('/index.php' === $uri || '/formation/' === $uri) {
		echo $twig->render('index.html.twig');
	} elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
		echo "show_action";
	} elseif ('/index.php/create' === $uri) {
		echo "create_action";
	} elseif ('/index.php/update' === $uri && isset($_GET['id'])) {
		echo "update_action";
	} else {
		header('HTTP/1.1 404 Not Found');
		echo '<html><body><h1>Page Not Found</h1></body></html>';
	}
	
    