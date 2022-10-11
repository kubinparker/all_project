<?php

namespace App\Controller;

use App\Controller\AppController;

class ProjectController extends AppController
{

    public function index($id = 0)
    {
        $table = $this->fetchTable('Project');
        $project = $table->find('all')
            ->where(['id' => $id])
            ->first();

        $project = $project ?? $table->newEmptyEntity();

        if ($this->request->is(['post', 'put'])) {
            $table->patchEntity($project, $this->request->getData());
            $table->save($project);
            $this->redirect('/');
        }
        $this->set('table', $project);
    }
}
