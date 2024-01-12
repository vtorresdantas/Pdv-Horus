<?php

// Incluindo a classe de conexão
require_once('conexao.php');

class TesteConexao {
    public function testarConexao() {
        try {
            $conexaoObj = new Conexao();
            $conexao = $conexaoObj->conectar();

            if ($conexao) {
                echo "Conexão bem-sucedida!";
                // Aqui você pode realizar mais ações se a conexão for bem-sucedida
                // Por exemplo, executar consultas SQL ou outras operações no banco de dados
            } else {
                echo "Falha na conexão.";
            }
        } catch (PDOException $e) {
            echo "PDOException: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        } catch (Error $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}

// Testar a conexão
$testeConexao = new TesteConexao();
$testeConexao->testarConexao();

?>
