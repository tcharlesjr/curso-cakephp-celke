<?php

    namespace App\Controller;

    use App\Controller\AppController;

    class UsersController extends AppController
    {
        public function index()
        {
            //$usuario = "Charles";

            $usuarios = $this->Users->find()->all();

            $this->set(compact('usuarios'));
        }
    }
