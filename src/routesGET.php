<?php
// Routes

// racine et identite
$app->get("/", function($request, $response, $args) {
   
        $recup = Identite::recupIdentite();
        return $this->view->render($response, 'index.phtml', [
        "nom"       => $recup['nom'],
        "prenom"    => $recup['prenom'],
        "adresse"   => $recup['adresse'],
        "cp"        => $recup['cp'],
        "ville"     => $recup['ville'],
        "telephone" => $recup['telephone'],
        "email"     => $recup['email'],
        "message"   => $recup['message']
        ]);
    }
);


// compétences
$app->get('/competences', function ($request, $response, $args) {

    return $this->renderer->render($response, 'competences.phtml', $args);
});

// formation
$app->get('/formation', function ($request, $response, $args) {

    return $this->renderer->render($response, 'formation.phtml', $args);
});

// loisirs
$app->get('/loisirs', function ($request, $response, $args) {

    return $this->renderer->render($response, 'loisirs.phtml', $args);
});
