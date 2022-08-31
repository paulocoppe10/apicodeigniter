<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;



class Produtos extends ResourceController
{
    private $produtoModel;

    public function __construct(){
        $this->produtoModel = new \App\Models\ProdutosModel();
    }


    public function list(){
        $data = $this->produtoModel->findAll();
        return $this->response->setJSON($data);
    }

    public function produto($id){
        $data = $this->produtoModel->getProduto($id);
        return $this->response->setJSON($data);
    }

    public function produtos($limit){
        $data = $this->produtoModel->findAll($limit);
        return $this->response->setJSON($data);
    }

    public function produtomodel($limit){
        $data = $this->produtoModel->getProdutos($limit);
        return $this->response->setJSON($data);
       
    }

    public function gravarProduto(){
        $this->produtoModel->save([
            'nome' => $this->request->getPost('nome'),
            'valor' => $this->request->getPost('valor')
        ]);
    }

    public function deletar($id){
        $this->produtoModel->delete($id);
    }

    public function atualizar($id){
        $data = $this->request->getJSON();
        $this->produtoModel->update($id, $data);
    }

}