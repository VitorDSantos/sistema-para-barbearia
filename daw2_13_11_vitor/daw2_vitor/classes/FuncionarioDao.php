<?php

class FuncionarioDao extends Db implements InterfaceDao {

    private $table = 'funcionario';

    public function insert($funcionario) {

        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, servico) VALUES (:nome, :servico)");

        $stmt->bindValue(':nome', $funcionario->getNome());
        $stmt->bindValue(':servico', $funcionario->getServico());

        return $stmt->execute();
    }
    
    public function update($funcionario) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome=:nome, servico = :servico WHERE id = :id;");

        $stmt->bindValue(':id', $funcionario->getId());
        $stmt->bindValue(':nome', $funcionario->getNome());
        $stmt->bindValue(':servico', $funcionario->getServico());

        return $stmt->execute();
    }    

    public function delete($funcionario) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $funcionario->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $funcionarios = array();

        while ($linha = $stmt->fetch()) {
            $funcionario = new Funcionario();
            $funcionario->setNome($linha['nome']);
            $funcionario->setServico($linha['servico']);
            $funcionario->setId($linha['id']);

            $funcionarios[] = $funcionario;
        }
        return $funcionarios;
    }

    public function selectById($funcionario) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $funcionario->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $funcionario = new Funcionario();
        $funcionario->setNome($linha['nome']);
        $funcionario->setServico($linha['servico']);
        $funcionario->setId($linha['id']);
        
        return $funcionario;
    }
}
