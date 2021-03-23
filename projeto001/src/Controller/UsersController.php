<?php

    namespace App\Controller;

    use App\Controller\AppController;

    class UsersController extends AppController
    {

        public function index()
        {
            //$usuario = "Charles";

            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'Users.id' => 'asc'
                ]
            ];

//            $usuarios = $this->Users->find()->all();
            $usuarios = $this->paginate($this->Users);

            $this->set(compact('usuarios'));
        }


        public function view($id = null)
        {
            $usuario = $this->Users->get($id);

            $this->set(['usuario' => $usuario]);
        }


        public function add()
        {
            $user = $this->Users->newEmptyEntity();

            if($this->request->is('post')){
                $user = $this->Users->patchEntity($user, $this->request->getData());

                //debug($user);
                //exit;
                if($this->Users->save($user)){
                    $this->Flash->success('Usuário cadastrado com sucesso!');
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('Erro ao cadastrar usuário!');
                }

            }

            $this->set(compact('user'));
        }


        public function edit($id = null)
        {
            $user = $this->Users->get($id);

            if($this->request->is(['post', 'put'])){
                $this->Users->patchEntity($user, $this->request->getData());

                if($this->Users->save($user)){
                    $this->Flash->success('Usuário editado com sucesso.');
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('Usuário não foi editado.');
                }
            }

            $this->set(compact('user'));
        }


        public function delete($id = null)
        {
            $this->request->allowMethod(['post', 'delete']);

            $user = $this->Users->get($id);

            if($this->Users->delete($user)){
                $this->Flash->success('Usuário apagado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Usuário não foi apagado.');
            }
        }


    }
