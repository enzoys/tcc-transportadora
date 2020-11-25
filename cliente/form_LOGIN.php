<?php
session_start();// INICIA SESSAO
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Login</title>
<form method="POST" action="banco/login.php">
    <label>Login:</label><input type="text" name="login" id="login"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
    <a href="cliente/escolha.php">Cadastre-se</a>
</form>
        <p>
            <?php // SE HOUVER ERRO, MOSTRA A VARIAVEL GLOBAL	
		if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
        <p>
            <?php // QUANDO DESLOGAR, MOSTRA A VARIAVEL GLOBAL
                if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
<?php
    include ('index/rodape.php');
?>