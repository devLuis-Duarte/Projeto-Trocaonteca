<?php 

include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

// obtendo os dados de interesse e salvando em variaveis
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuario WHERE email='$email' and senha='$senha' "; 
echo "Exibindo na tela para verificacao: <h1> $sql </h1> "; // teste
 
$con = conectarBanco("trocaonteca");
$dados = executarSelect($con, $sql); // executando o select
desconectarBanco($con);

print_r($dados);

// se ha alguem com este email ou essa senha
if ( count($dados) > 0 ){    
    echo "Login correto";
    session_start(); // iniciar periodo de atividade no sistema (15-20 minutos a 2 horas)
    $_SESSION["logado"] = true;     // habilitar o uso da variavel de sessao!!!! $_SESSION 
    $_SESSION["email"]  = $email;   // obtido do form e salvo na sessao (fica salvo na var. $_SESSION)
    header("Location: PesquisarLivro.php"); // exemplo de redirecionamento pra outra pagina*/
} else{
    echo "Login incorreto.";
    header("Location: login.php?msg=1"); // comando de redirecionamento!! cuidado!!!!!!!!
}
