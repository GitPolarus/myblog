<?php

namespace Ablam\Controllers;

abstract class Controller
{

    protected $model;
        /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $data
     * @return void
     */
    public function render(string $fichier, array $data = []){
    // Récupère les données et les extrait sous forme de variables
        extract($data);

    // Crée le chemin et inclut le fichier de vue
        require_once('views/'.$fichier.'.php');
    }

    public function loadModel($model){
        $class = '\Ablam\Models\\'.$model;
        $this->model = new $class();
    }
}