<?php

require_once('Produto.php');
require_once('IProduto.php');

class Filme extends Produto implements IProduto{
    private int $tempoDuracao;
    private bool $continuidade;
    private bool $cinema;
    private bool $uniFisica;

    public function getDadosProduto(){
        
        $dados = "Filme: ".$this ->getNome()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Data de lançamento: ".$this->getDataLanc()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Classificação indicativa: ". $this->getClassIdicativa()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Gênero: ".$this-> getGenero()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Adaptação de livro: ".($this -> adptLivro ? "Sim" : "Não")."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Tempo de duração: ".$this->getTempoDuracao()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Continuidade: ". ($this -> continuidade ? "Sim" : "Não")."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Passou no cinema: ". ($this -> cinema ? "Sim" : "Não")."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Está disponível em meio físico: ". ($this -> uniFisica ? "Sim" : "Não")."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Está disponível em meio web: ". ($this -> dispoWeb ? "Sim" : "Não")."\n\n";
        $dados .= $this ->getDiretor()->getDadosDiretor()."\n\n";
        return $dados;
    }

    public function getAluguelProduto()
    {
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Dia            | Atendimento    |Forma de Pagamento| 1 Dia (R$)     |2 Dias ou + (R$)|\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Segunda-feira  | 10h às 12h     | Cartão           | 10,00          | 18,00          |\n";
        echo "| Segunda-feira  | 10h às 12h     | Dinheiro         | 9,00           | 16,00          |\n";
        echo "| Segunda-feira  | 10h às 12h     | Pix              | 8,50           | 15,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Segunda-feira  | 14h às 16h     | Cartão           | 12,00          | 20,00          |\n";
        echo "| Segunda-feira  | 14h às 16h     | Dinheiro         | 11,00          | 18,50          |\n";
        echo "| Segunda-feira  | 14h às 16h     | Pix              | 10,50          | 17,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Terça-feira    | 10h às 12h     | Cartão           | 11,00          | 19,00          |\n";
        echo "| Terça-feira    | 10h às 12h     | Dinheiro         | 10,00          | 17,50          |\n";
        echo "| Terça-feira    | 10h às 12h     | Pix              | 9,50           | 16,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Terça-feira    | 14h às 16h     | Cartão           | 13,00          | 21,50          |\n";
        echo "| Terça-feira    | 14h às 16h     | Dinheiro         | 12,00          | 20,00          |\n";
        echo "| Terça-feira    | 14h às 16h     | Pix              | 11,50          | 19,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quarta-feira   | 10h às 12h     | Cartão           | 12,00          | 22,00          |\n";
        echo "| Quarta-feira   | 10h às 12h     | Dinheiro         | 11,00          | 20,00          |\n";
        echo "| Quarta-feira   | 10h às 12h     | Pix              | 10,00          | 18,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quarta-feira   | 14h às 16h     | Cartão           | 14,00          | 24,50          |\n";
        echo "| Quarta-feira   | 14h às 16h     | Dinheiro         | 13,00          | 22,50          |\n";
        echo "| Quarta-feira   | 14h às 16h     | Pix              | 12,50          | 21,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quinta-feira   | 10h às 12h     | Cartão           | 13,00          | 23,00          |\n";
        echo "| Quinta-feira   | 10h às 12h     | Dinheiro         | 12,00          | 21,50          |\n";
        echo "| Quinta-feira   | 10h às 12h     | Pix              | 11,50          | 20,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quinta-feira   | 14h às 16h     | Cartão           | 15,00          | 26,00          |\n";
        echo "| Quinta-feira   | 14h às 16h     | Dinheiro         | 14,00          | 24,00          |\n";
        echo "| Quinta-feira   | 14h às 16h     | Pix              | 13,50          | 23,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sexta-feira    | 10h às 12h     | Cartão           | 14,00          | 25,00          |\n";
        echo "| Sexta-feira    | 10h às 12h     | Dinheiro         | 13,00          | 23,50          |\n";
        echo "| Sexta-feira    | 10h às 12h     | Pix              | 12,00          | 22,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sexta-feira    | 14h às 16h     | Cartão           | 16,00          | 27,50          |\n";
        echo "| Sexta-feira    | 14h às 16h     | Dinheiro         | 15,00          | 26,00          |\n";
        echo "| Sexta-feira    | 14h às 16h     | Pix              | 14,50          | 25,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sábado         | 10h às 12h     | Cartão           | 15,00          | 27,00          |\n";
        echo "| Sábado         | 10h às 12h     | Dinheiro         | 14,00          | 25,50          |\n";
        echo "| Sábado         | 10h às 12h     | Pix              | 13,00          | 24,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sábado         | 14h às 16h     | Cartão           | 17,00          | 30,00          |\n";
        echo "| Sábado         | 14h às 16h     | Dinheiro         | 16,00          | 28,50          |\n";
        echo "| Sábado         | 14h às 16h     | Pix              | 15,50          | 27,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        sleep(6);
    }

    /**
     * Get the value of tempoDuracao
     */
    public function getTempoDuracao(): int
    {
        return $this->tempoDuracao;
    }

    /**
     * Set the value of tempoDuracao
     */
    public function setTempoDuracao(int $tempoDuracao): self
    {
        $this->tempoDuracao = $tempoDuracao;

        return $this;
    }

    /**
     * Get the value of continuidade
     */
    public function isContinuidade(): bool
    {
        return $this->continuidade;
    }

    /**
     * Set the value of continuidade
     */
    public function setContinuidade(bool $continuidade): self
    {
        $this->continuidade = $continuidade;

        return $this;
    }

    /**
     * Get the value of cinema
     */
    public function isCinema(): bool
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     */
    public function setCinema(bool $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    /**
     * Get the value of uniFisica
     */
    public function isUniFisica(): bool
    {
        return $this->uniFisica;
    }

    /**
     * Set the value of uniFisica
     */
    public function setUniFisica(bool $uniFisica): self
    {
        $this->uniFisica = $uniFisica;

        return $this;
    }
}