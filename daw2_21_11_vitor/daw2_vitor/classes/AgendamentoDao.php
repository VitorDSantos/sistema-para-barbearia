<?php

class AgendamentoDao extends Db implements InterfaceDao {

    private $table = 'agendamento';

    public function insert($agendamento) {
        $stmt = $this->conexao->prepare("INSERT INTO
		{$this->table} (nome_cliente, barbeiro, servico, data)
		VALUES (:nome_cliente, :barbeiro, :servico,:data)");

        $stmt->bindValue(':nome_cliente', $agendamento->getNome_cliente());
        $stmt->bindValue(':barbeiro', $agendamento->getBarbeiro());
        $stmt->bindValue(':servico', $agendamento->getServico());
        $stmt->bindValue(':data', $agendamento->getData());

        return $stmt->execute();
    }
    
    public function update($agendamento) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome_cliente=:nome_cliente, barbeiro = :barbeiro, servico = :servico, valor = :valor, data = :data 
				WHERE id = :id;");

        $stmt->bindValue(':id', $agendamento->getId());
        $stmt->bindValue(':nome_cliente', $agendamento->getNome_cliente());
        $stmt->bindValue(':barbeiro', $agendamento->getBarbeiro());
        $stmt->bindValue(':servico', $agendamento->getServico());
        $stmt->bindValue(':data', $agendamento->getData());

        return $stmt->execute();
    }    

    public function delete($agendamento) {
        $stmt = $this->conexao->prepare("DELETE FROM $this->table "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $agendamento->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $agendamentos = array();

        while ($linha = $stmt->fetch()) {
            $agendamento = new Agendamento();
            $agendamento->setNome_cliente($linha['nome_cliente']);
            $agendamento->setBarbeiro($linha['barbeiro']);
            $agendamento->setServico($linha['servico']);
            $agendamento->setData($linha['data']);
            $agendamento->setId($linha['id']);

            $agendamentos[] = $agendamento;
        }
        return $agendamentos;
    }

    public function selectById($agendamento) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $agendamento->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $agendamento = new Agendamento();
        $agendamento->setNome_cliente($linha['nome_cliente']);
        $agendamento->setBarbeiro($linha['barbeiro']);
        $agendamento->setServico($linha['servico']);
        $agendamento->setData($linha['data']);
        $agendamento->setId($linha['id']);
        
        return $agendamento;
    }
}
