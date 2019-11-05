<?php

namespace Luminee\Reporter\Repositories;

use Luminee\Base\Repositories\BaseRepository;

class ReporterRepository extends BaseRepository
{
    public function __construct()
    {
        $this->db_models_path = realpath(__DIR__ . '/../Models');
    }

    public function findScope($value, $field = 'id', $equal = '=')
    {
        return $this->setModel('scope')->where($field, $equal, $value)->getFirst();
    }

    public function findAction($value, $field = 'id', $equal = '=')
    {
        return $this->setModel('action')->where($field, $equal, $value)->getFirst();
    }

    public function listScopes()
    {
        return $this->setModel('scope')->orderBy('sort', 'desc')->getCollection();
    }

    public function listActions()
    {
        return $this->setModel('action')->orderBy('sort', 'desc')->getCollection();
    }

    public function createLog($data)
    {
        return $this->setModel('log')->create($data);
    }

    public function createScope($data)
    {
        return $this->setModel('scope')->create($data);
    }

    public function createAction($data)
    {
        return $this->setModel('action')->create($data);
    }

    public function insertLog($data)
    {
        return $this->setModel('log')->insert($data);
    }

    public function updateModel($model, $data)
    {
        return $this->updateModelByData($model, $data);
    }

    public function deleteScopeById($id)
    {
        return $this->setModel('scope')->delete($id);
    }

    public function deleteActionById($id)
    {
        return $this->setModel('action')->delete($id);
    }

}