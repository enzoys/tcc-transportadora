<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Empresas por e-mail</title>
        <?php
            include "conexao.php";
            $cliente= $_REQUEST["txtcliente"];
            $sql="SELECT * FROM clientes where email like '%$cliente%'";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo " Nome do Cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_cli"].
                         " Descrição: ".$row["desc"]."<br/>";
                }              
            }
            include "desconecta.php";
        ?>
        <a href="PesquisaCliEmpresa.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="PesquisaCliPessoaEmail.php">
        <table width="200" border="2">
            <tr>
                <td align="right">Nova busca:</td>
                <td><input type="text" name="txtcliente" size="40" /></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="PESQUISAR" /></td>
            </tr>
        </table>
        </form>
 
        <form method="post" action="ApagaCompleto.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientes">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_cli">
            <input type="hidden" id="cncpcnt" name="cncpcnt" value="cpf">
            <tr>
                <td align="right">ID do cliente:</td>
                <td><input type="text" name="id" size="5"></td>
                <td align="right">(APAGA TODOS OS DADOS DO CLIENTE!)</td>
                
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="APAGAR" /></td>
            </tr>
        </table>
        </form>
<?php
    include ('rodape.php');
?>