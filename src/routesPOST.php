<?php

// compétences
$app->post('/competences', function ($request, $response, $args) {

    return $this->renderer->render($response, 'competences.phtml', $args);
});

// formation
$app->post('/formation', function ($request, $response, $args) {

    return $this->renderer->render($response, 'formation.phtml', $args);
});