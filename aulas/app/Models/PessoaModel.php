<?php namespace App\Models;

use CodeIgniter\Model;

class PessoaModel extends Model{

    protected $table = 'Pessoa';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Id','Nome','Naturalidade'];
    protected $returnType = 'array';

}

?>