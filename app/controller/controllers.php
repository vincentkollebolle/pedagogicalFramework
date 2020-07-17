<?php


use \App\entity\Contact;
	
function index_action($twig) {
    
    //Appel du model pour récupérer des données
    //$unContact = new Contact(1, "Pika", "Pikachu", "2 rue rainbow", "69000", "Lyon");
    //$contacts[] = $unContact;
    
    //Appel du bon template.
	echo $twig->render(
		'index.html.twig' 
    ); 
}

/*
function create_action($twig) {
	if (isset($_POST['valider'])) {
		$nom = $_POST['nom']; // NTU
		$prenom = $_POST['prenom']; //NTU
		$adresse = $_POST['adresse']; // NTU
		$cp = $_POST['cp']; // NTU 
		$ville = $_POST['ville']; //NTU
		$contacts = create_contact($nom, $prenom, $adresse, $cp, $ville);
		echo $twig->render(
			'create.html.twig',
			['nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse, 'cp' => $cp, 'ville' => $ville]
		);
	} else {
		// 3./ appel du bon template.
		// mettre un message dans le session (piste)
		echo $twig->render(
			'create.html.twig'
		);
	}
}



function show_action($twig, $id) {
	//demander au model de me ramener un contact
	$contact = getContactById($id);
	echo $twig->render(
		'show.html.twig',
		['contact'=> $contact]
	);
}


function update_action($id, $twig) {
	if (isset($_POST['valider'])) {
		$nom = $_POST['nom']; // NTU
		$prenom = $_POST['prenom']; //NTU
		$adresse = $_POST['adresse']; // NTU
		$cp = $_POST['cp']; // NTU 
		$ville = $_POST['ville']; //NTU 
		
		echo $twig->render(
			'update.html.twig',
			['nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse, 'cp' => $cp, 'ville' => $ville]
		);
	} else {
		//récupérer l'id dans l'url 
		 $contact = getContactById($id);
		//demander au model les infos 
	
		// 3./ appel du bon template.
		echo $twig->render(
			'update.html.twig',
			['contact' => $contact]
		);
	}
}*/
