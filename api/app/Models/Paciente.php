<?php

namespace App\Models;

use CodeIgniter\Model;

class Paciente extends Model
{
    protected $table            = 'paciente';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome', 'cpf', 'rg', 'dataNascimento', 'sexo', 'telefone1', 'telefone2', 'nomeMae', 'cep', 'logradouro', 'numeroCasa', 'complementoCasa', 'cidade', 'bairro'];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAll()
    {
        $result = $this->findAll();
        return $result;
    }

    public function getUser($id)
    {
        $result = $this->find($id);
        return $result;
    }

    public function deleteUser($id)
    {
        if ($this->find($id)) {
            $this->delete($id);
            return true;
        } else {
            return false;
        }        
    }
}
