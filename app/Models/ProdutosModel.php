<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model

{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $allowFields = ['descricao', 'valor'];

    public function getProduto($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
    public function getProdutos($limit){
        $query = $db->query("SELECT * FROM produtos limit".$limit);
        return $query->getResultArray();
    }
}