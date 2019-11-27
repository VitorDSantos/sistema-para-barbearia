<?php

class servicoDao extends Db implements InterfaceDao {

    private $table = 'servico';

    public function insert($servico) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, descricao, imagem) VALUES (:nome, :descricao, :imagem)");

        $stmt->bindValue(':nome', $servico->getNome());
        $stmt->bindValue(':descricao', $servico->getDescricao());
        $stmt->bindValue(':imagem', $servico->getImagem());

        return $stmt->execute();
    }
    
    public function update($servico) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome=:nome, descricao = :descricao, imagem = :imagem WHERE id = :id;");

        $stmt->bindValue(':id', $servico->getId());
        $stmt->bindValue(':nome', $servico->getNome());
        $stmt->bindValue(':descricao', $servico->getDescricao());
        $stmt->bindValue(':imagem', $servico->getImagem());

        return $stmt->execute();
    }    

    public function delete($servico) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $servico->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $servicos = array();

        while ($linha = $stmt->fetch()) {
            $servico = new Servico();
            $servico->setNome($linha['nome']);
            $servico->setDescricao($linha['descricao']);
            $servico->setImagem($linha['imagem']);
            $servico->setId($linha['id']);

            $servicos[] = $servico;
        }
        return $servicos;
    }

    public function selectById($servico) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $servico->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $servico = new Servico();
        $servico->setNome($linha['nome']);
        $servico->setDescricao($linha['descricao']);
        $servico->setImagem($linha['imagem']);
        $servico->setId($linha['id']);
        
        return $servico;
    }
}
