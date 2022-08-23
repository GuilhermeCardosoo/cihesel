<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['password','email','nome','sobrenome'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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

    public function exists($user, $password)
    {
        if ($this->where('user', $user)
            ->where('password', $password)
            ->find()
        ) {
            $query = $this->query("SELECT * FROM login where user='" . $user . "'  ");
            $row = $query->getRow();
            $result = [
                'true' => true,
                'user' => $row,
            ];
        } else {
            $result = false;
        }

        return  $result;
    }

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

    public function resetPassword($user, $old, $new, $confirm)
    {
        $query = $this->query("SELECT * FROM login where user='" . $user . "'  ");
        $row = $query->getRow();
        if ($new  != $confirm) {
            $date = [
                'mensagem' => 'A senhas não conferem!',
                'tipo' => 'alert-danger',
            ];
            return $date;
        } elseif ($new == $confirm &&  $old == $row->password) {
            $data = [
                'password' => $new,
            ];
            $this->update($row->id, $data);
            $date = [
                'mensagem' => 'Senha redefinida com sucesso!',
                'tipo' => 'alert-success',
            ];
            return $date;
        } else {
            $date = [
                'mensagem' => 'A senha atual está incorreta.',
                'tipo' => 'alert-danger',
            ];
            return $date;
        }
    }

    public function resetEmail($user, $password, $new, $confirm)
    {
        $query = $this->query("SELECT * FROM login where user='" . $user . "'  ");
        $row = $query->getRow();
        $query1 = $this->query(" SELECT * from login where email='" . $new . "'  ");
        $row1 = $query1->getRow();
        if ($new  != $confirm) {
            $date = [
                'mensagem' => 'Os e-mails não conferem!',
                'tipo' => 'alert-danger',
            ];
            return $date;
        } elseif ($new == $confirm &&  $password == $row->password && $row1 == null) {
            $data = [
                'email' => $new,
            ];
            $this->update($row->id,$data);
            $date = [
                'mensagem' => 'E-mail redefinido com sucesso!',
                'tipo' => 'alert-success',
            ];
            return $date;
        } elseif($row1->email == $new && $password == $row->password ){
            $date = [
                'mensagem' => 'O E-mail já existe no sistema.',
                'tipo' => 'alert-danger',
            ];
            return $date;
        }
         else {
            $date = [
                'mensagem' => 'A senha atual está incorreta.',
                'tipo' => 'alert-danger',
            ];
            return $date;
        }
    }

    public function resetName($user,$password,$Pnome,$Snome){
        $query = $this->query("SELECT * FROM login where user='" . $user . "'  ");
        $row = $query->getRow();

        if( $password == $row->password ){
            $data = [
                'nome' => $Pnome,
                'sobrenome' => $Snome
            ];
            $this->update($row->id,$data);
            $date = [
                'mensagem' => 'Nome redefinido com sucesso!',
                'tipo' => 'alert-success',
            ];
            return $date;
        }else{
            $date = [
                'mensagem' => 'Senha atual está incorreta!',
                'tipo' => 'alert-danger',
            ];
            return $date;
        }
    }

}
