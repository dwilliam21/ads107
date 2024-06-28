<?php 
    namespace App\Controllers;
    use App\Models\PessoaModel;

    class Pessoa extends BaseController {
        public static function exibir(): string{
            $pessoaModel = new PessoaModel;

            $data['pessoas'] = $pessoaModel->findAll();
            
            return view('exibir', $data);
        }
        
        public function inserir()
        {
        $data['titulo'] = 'Inserir nova Pessoa';
        $data['acao'] = 'INSERIR';
        $data['msg'] = '';
        if($this->request->getMethod() === 'post')
        {
        $pessoaModel = new \App\Models\PessoaModel();
        $pessoaModel->set('Nome', $this->request->getPost('Nome'));
        $pessoaModel->set('Naturalidade', $this->request->getPost('Naturalidade'));
        if ($pessoaModel->insert())
        {
        // deu certo
        $data['msg'] = 'Nome inserido com sucesso';
        }
        else
        {
        // deu errado
        $data['msg'] = 'Erro ao inserir Nome';
        }
        }
        return view('form_pessoa', $data);
        }
    }
?>