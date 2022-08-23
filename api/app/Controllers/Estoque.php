<?php

namespace App\Controllers;

use App\Models\Paciente;
use App\Models\Cadastro;
use App\Models\Medicamento;

class  Estoque extends BaseController
{
    public function consultaEstoque()
    {
        $remedios =  new Medicamento();
        $resultado = $remedios->getAll();
        $data = [
             'resultado' => $resultado
        ];
        return view('layout/estoque', $data);
    }

    public function estoque(int $id)
    {
        $remedios =  new Medicamento();
        $resultado = $remedios->getAll();
        $data = [
            'resultado' => $resultado
        ];
    
        return view('layout/listarEstoque',$data);
    }

    public function novoMedicamento()
    {
        $medicamentos =  new Medicamento();

        $post = $this->request->getPost();
        if(!empty($post)){
            $dadosBD = [
                    "id" => $post["id"],
                    "idMedicamento" => $post["idMed"],
                    "idControle" => $post["idCont"],
                    "quantidade" => $post["quantid"],
                    "nomeMed" => $post["medicamento"],
                    "observacao"     => $post["obs"],
                    "dosagem" => $post["dosagem"],
                    "tarja" => $post["tarja"]
                ];
            $medicamentos->save($dadosBD);
            
            return view('layout/novoMed');
        }
        
        echo view('layout/novoMed');      
    }

    public function listagem(){
        $remedios =  new Medicamento();
        $resultado = $remedios->getAll();
        $data = [
            'resultado' => $resultado
        ];
    
        return view('layout/listagem');
    }
    
}
