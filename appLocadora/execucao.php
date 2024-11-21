<?php

require_once('modelo/Produto.php');
require_once('modelo/Filme.php');
require_once('modelo/Serie.php');


$produtosCadastrados = [];

function ListarProdutos(array $produtosCadastrados)
{
    echo "PRODUÇÕES CADASTRADAS\n";

    $i = 1;
    foreach ($produtosCadastrados as $e) {
        if ($e instanceof Filme) {
            echo "[" . $i . "°]\n" . $e->getDadosProduto();
            $i++; 
        } else if ($e instanceof Serie) {
            echo "[" . $i . "°]\n" . $e->getDadosProduto();
            $i++; 
        }
    }
}

function listarFilmes(array $produtosCadastrados)
{
    echo "FILMES CADASTRADOS\n\n";

    $i = 1; 
    foreach ($produtosCadastrados as $e) {
        if ($e instanceof Filme) {
            echo "[" . $i . "°]\n";
            echo $e->getDadosProduto();
            $i++; 
        }
    }
}

function listarSeries(array $produtosCadastrados)
{
    echo "SÉRIES CADASTRADAS\n";

    $i = 1; 
    foreach ($produtosCadastrados as $e) {
        if ($e instanceof Serie) {
            echo "[" . $i . "°]\n";
            echo $e->getDadosProduto();
            $i++; 
        }
    }
}

do {

    echo "=============================================\n";
    echo "=     Locadora CineMágico                   =\n";
    echo "=============================================\n";
    echo "== 1. Cadastrar um filme                   ==\n";
    echo "== 2. Cadastrar uma série                  ==\n";
    echo "== 3. Listar séries                        ==\n";
    echo "== 4. Listar filmes                        ==\n";
    echo "== 5. Listar Produções                     ==\n";
    echo "== 6. Exibir tabela de aluguel para séries ==\n";
    echo "== 7. Exibir tabela de aluguel para filmes ==\n";
    echo "== 8. Excluir produção                     ==\n";
    echo "== 0. Sair                                 ==\n";
    echo "=============================================\n";
    echo "Escolha uma opção: ";


    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");



    switch ($opcao) {
        case 0:
            echo "VOCÊ CANCELOU O PROGRAMA! \n";
            break;
        case 1:
            $f = new Filme();
            echo "----------------------CADASTRO DE FILME--------------------------\n";
            $f->setNome(readline("Digite o nome do filme: "));
            echo "-----------------------------------------------------------------\n";
            $f->setDataLanc(readline("Digite a data de lançamento do filme: "));
            echo "-----------------------------------------------------------------\n";
            $f->setClassIdicativa(readline("Digite a classificação indicativa do filme: "));
            echo "-----------------------------------------------------------------\n";
            $f->setGenero(readline("Digite o gênero do filme: "));
            echo "-----------------------------------------------------------------\n";
            $adptLivro = readline("O filme é uma adaptação de livro (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($adptLivro == 1) {
                $f->setAdptLivro(true);
            } else {
                $f->setAdptLivro(false);
            }
            $f->setTempoDuracao(readline("Qual o tempo de duração do filme? (em minutos): "));
            echo "-----------------------------------------------------------------\n";
            $continuidade = readline("O filme tem continuidade? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($continuidade == 1) {
                $f->setContinuidade(true);
            } else {
                $f->setContinuidade(false);
            }
            $cinema = readline("Estreiou nos cinemas? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($cinema == 1) {
                $f->setCinema(true);
            } else {
                $f->setCinema(false);
            }
            $meioFisico = readline("A locadora possui o meio físico desse filme? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($meioFisico == 1) {
                $f->setUniFisica(true);
            } else {
                $f->setUniFisica(false);
            }
            $dispoWeb = readline("O filme esta disponível na web? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($dispoWeb == 1) {
                $f->setDispoWeb(true);
            } else {
                $f->setDispoWeb(false);
            }
            $nomeDiretor = readline("Digite o nome do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $idadeDiretor = readline("Digite a idade do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $nacionalidadeDiretor = readline("Digite a nacionalidae desse diretor: ");
            echo "-----------------------------------------------------------------\n";
            $numPremiacoes = readline("Digite o número de premiações desse diretor: ");
            echo "-----------------------------------------------------------------\n";
            $diretor = new Diretor($nomeDiretor, $idadeDiretor, $nacionalidadeDiretor, $numPremiacoes);

            $f->setDiretor($diretor);

            array_push($produtosCadastrados, $f);
            break;
        case 2:
            $s = new Serie();
            $s->setNome(readline("Digite o nome da série: "));
            echo "-----------------------------------------------------------------\n";
            $s->setNumTemporadas(readline("Digite o número de temporadas da série: "));
            echo "-----------------------------------------------------------------\n";
            $s->setTempAproxEp(readline("Digite o tempo aproximado por episódio (em minutos): "));
            echo "-----------------------------------------------------------------\n";
            $s->setDataLanc(readline("Digite a data de lançamento da série: "));
            echo "-----------------------------------------------------------------\n";
            $s->setClassIdicativa(readline("Digite a classificação indicativa da série: "));
            echo "-----------------------------------------------------------------\n";
            $s->setGenero(readline("Digite o gênero da série: "));
            echo "-----------------------------------------------------------------\n";
            $adptLivro = readline("A série é uma adaptação de livro? (1 - Sim | 2 - Não): ");
            echo "-----------------------------------------------------------------\n";
            if ($adptLivro == 1) {
                $s->setAdptLivro(true);
            }else {
                $s-> setAdptLivro(false);
            }
            $dispoWeb = readline("A série está disponível na web? (1 - Sim | 2 - Não): ");
            echo "-----------------------------------------------------------------\n";
            if ($dispoWeb == 1) {
                $s->setDispoWeb(true);
            } else {
                $s->setDispoWeb(false);
            }
            $nomeDiretor = readline("Digite o nome do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $idadeDiretor = readline("Digite a idade do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $nacionalidadeDiretor = readline("Digite a nacionalidade do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $numPremiacoes = readline("Digite o número de premiações do diretor: ");
            echo "-----------------------------------------------------------------\n";
            $diretor = new Diretor($nomeDiretor, $idadeDiretor, $nacionalidadeDiretor, $numPremiacoes);
            $s->setDiretor($diretor);
            array_push($produtosCadastrados, $s);
            break;
        case 3:
            if (!empty(array_filter($produtosCadastrados))) {
                listarSeries($produtosCadastrados);
            } else {
                echo "Nenhuma produção cadastrada!\n";
            }
            

            break;
        case 4:
            if (!empty(array_filter($produtosCadastrados))) {
                listarFilmes($produtosCadastrados);
            } else {
                echo "Nenhuma produção cadastrada!\n";
            }
            break;
        case 5:
            if (!empty(array_filter($produtosCadastrados))) {  /* array_filter -> uma de suas funções é eliminar todos os espaços vaazios do array, meu else não estava retornando nada sem ele*/
                listarProdutos($produtosCadastrados);
            } else {
                echo "Nenhuma produção cadastrada!\n";
            }
            break;
        case 6:
            $serie = new Serie();
            $serie->getAluguelProduto();
            break;
        case 7:
            $filme = new Filme();
            $filme->getAluguelProduto();
            break;
        case 8:
            echo "FILMES E SERIES\n";

            foreach ($produtosCadastrados as $i => $e) {
                if ($e instanceof Filme)
                    echo $i + 1 . "- Filme - " . $e->getDadosProdutosSimples() . "\n";
                else if ($e instanceof Serie)
                    echo $i + 1 . "- Série - " . $e->getDadosProdutosSimples() . "\n";
            }

            $apagar = readline("Qual produção deseja apagar? (obs: não tem volta, vai ter que cadastrar a produção novamente): ");

            $indice = $apagar - 1;

            if (isset($produtosCadastrados[$indice])) { /// o isset verifica se uma variavel esta definida, retornado true ou false e assim permitindo ou não que a função sea executada
                array_splice($produtosCadastrados, $indice, 1);
                echo "Produção apagada com sucesso!\n";
            } else {
                echo "Índice inválido! Nenhuma produção foi apagada.\n";
            }

            break;
        default:
            echo "*** Opção inválida! Por favor, tente novamente. ***\n";
            break;
        }
    } while ($opcao);

