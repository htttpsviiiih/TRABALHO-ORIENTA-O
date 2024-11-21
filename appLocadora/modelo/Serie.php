<?php
require_once('Produto.php');
require_once('IProduto.php');
require_once('Diretor.php');
require_once('modelo/Diretor.php');

class Serie extends Produto implements IProduto{
    private int $numTemporadas;
    private int $tempAproxEp;
    private int $numAproxEp;


    public function getDadosProduto()
    {   
        $dados = "Série: ". $this->getNome()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Número de temporadas: ". $this->getNumTemporadas() ." \n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Tempo aproximado por episódio: ".$this->getTempAproxEp()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Data de lançamento: ".$this->getDataLanc()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Classificação indicativa: ". $this->getClassIdicativa()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Gênero: ".$this-> getGenero()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Adaptação de livro: ".($this -> adptLivro ? "Sim" : "Não")."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Está disponível em meio web: ". ($this -> dispoWeb ? "Sim" : "Não")."\n\n";
        $dados .= $this ->getDiretor()->getDadosDiretor()."\n\n";
        return $dados;
    }
    public function getAluguelProduto()
    {
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Dia            | Atendimento    |Forma de Pagamento| 1 Dia (R$)     | 2 Dias ou + (R$)|\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Segunda-feira  | 10h às 12h     | Cartão           | 15,00          | 25,00          |\n";
        echo "| Segunda-feira  | 10h às 12h     | Dinheiro         | 14,00          | 23,00          |\n";
        echo "| Segunda-feira  | 10h às 12h     | Pix              | 13,50          | 22,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Segunda-feira  | 14h às 16h     | Cartão           | 18,00          | 30,00          |\n";
        echo "| Segunda-feira  | 14h às 16h     | Dinheiro         | 17,00          | 28,50          |\n";
        echo "| Segunda-feira  | 14h às 16h     | Pix              | 16,50          | 27,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Terça-feira    | 10h às 12h     | Cartão           | 16,00          | 27,00          |\n";
        echo "| Terça-feira    | 10h às 12h     | Dinheiro         | 15,00          | 25,50          |\n";
        echo "| Terça-feira    | 10h às 12h     | Pix              | 14,50          | 24,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Terça-feira    | 14h às 16h     | Cartão           | 19,00          | 32,50          |\n";
        echo "| Terça-feira    | 14h às 16h     | Dinheiro         | 18,00          | 31,00          |\n";
        echo "| Terça-feira    | 14h às 16h     | Pix              | 17,50          | 30,00          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quarta-feira   | 10h às 12h     | Cartão           | 17,00          | 29,00          |\n";
        echo "| Quarta-feira   | 10h às 12h     | Dinheiro         | 16,00          | 27,50          |\n";
        echo "| Quarta-feira   | 10h às 12h     | Pix              | 15,50          | 26,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quarta-feira   | 14h às 16h     | Cartão           | 20,00          | 35,00          |\n";
        echo "| Quarta-feira   | 14h às 16h     | Dinheiro         | 19,00          | 33,50          |\n";
        echo "| Quarta-feira   | 14h às 16h     | Pix              | 18,50          | 32,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quinta-feira   | 10h às 12h     | Cartão           | 18,00          | 31,00          |\n";
        echo "| Quinta-feira   | 10h às 12h     | Dinheiro         | 17,00          | 29,50          |\n";
        echo "| Quinta-feira   | 10h às 12h     | Pix              | 16,50          | 28,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Quinta-feira   | 14h às 16h     | Cartão           | 21,00          | 37,00          |\n";
        echo "| Quinta-feira   | 14h às 16h     | Dinheiro         | 20,00          | 35,50          |\n";
        echo "| Quinta-feira   | 14h às 16h     | Pix              | 19,50          | 34,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sexta-feira    | 10h às 12h     | Cartão           | 19,00          | 33,00          |\n";
        echo "| Sexta-feira    | 10h às 12h     | Dinheiro         | 18,00          | 31,50          |\n";
        echo "| Sexta-feira    | 10h às 12h     | Pix              | 17,50          | 30,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sexta-feira    | 14h às 16h     | Cartão           | 22,00          | 39,00          |\n";
        echo "| Sexta-feira    | 14h às 16h     | Dinheiro         | 21,00          | 37,50          |\n";
        echo "| Sexta-feira    | 14h às 16h     | Pix              | 20,50          | 36,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sábado         | 10h às 12h     | Cartão           | 20,00          | 35,00          |\n";
        echo "| Sábado         | 10h às 12h     | Dinheiro         | 19,00          | 33,50          |\n";
        echo "| Sábado         | 10h às 12h     | Pix              | 18,50          | 32,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";
        echo "| Sábado         | 14h às 16h     | Cartão           | 23,00          | 41,00          |\n";
        echo "| Sábado         | 14h às 16h     | Dinheiro         | 22,00          | 39,50          |\n";
        echo "| Sábado         | 14h às 16h     | Pix              | 21,50          | 38,50          |\n";
        echo "+----------------+-----------------+------------------+-----------------+----------------+\n";

        sleep(6);


    }
    
    /**
     * Get the value of numTemporadas
     */
    public function getNumTemporadas(): int
    {
        return $this->numTemporadas;
    }

    /**
     * Set the value of numTemporadas
     */
    public function setNumTemporadas(int $numTemporadas): self
    {
        $this->numTemporadas = $numTemporadas;

        return $this;
    }

    /**
     * Get the value of tempAproxEp
     */
    public function getTempAproxEp(): int
    {
        return $this->tempAproxEp;
    }

    /**
     * Set the value of tempAproxEp
     */
    public function setTempAproxEp(int $tempAproxEp): self
    {
        $this->tempAproxEp = $tempAproxEp;

        return $this;
    }

    /**
     * Get the value of numAproxEp
     */
    public function getNumAproxEp(): int
    {
        return $this->numAproxEp;
    }

    /**
     * Set the value of numAproxEp
     */
    public function setNumAproxEp(int $numAproxEp): self
    {
        $this->numAproxEp = $numAproxEp;

        return $this;
    }
}
