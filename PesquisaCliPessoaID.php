<?php
    include "confere_2.php";
    include ('cabecalho.php');
?>
<title>Pesquisar Clientes por ID</title>
        <?php
            include "conexao.php";
            $cliente= $_REQUEST["txtcliente"];
            $sql="SELECT * FROM clientesPessoas where id_clientePessoa like '%$cliente%'";
            if($result=$mysqli->query($sql)){
                echo "<br>";
                while($row=$result->fetch_assoc()){
                    echo " Nome do Cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_clientePessoa"]."<br/>";
                }              
            }
        ?>
        <a href="PagFuncPesquisaCliPessoa.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="PesquisaCliPessoaID.php">
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
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">
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
        <form method="post" action="AlteraDados.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">
            <tr>
                <td align="right">ID da pessoa:</td>
                <td><input type="text" name="id" size="5"></td>               
            </tr>
            <tr>
                <td align="right">Alterar dado:</td>
            <td>
                <select name="dado">
                    <option value="nome">Nome</option>
                    <option value="cpf">CPF</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
                </select>
            </td>              
            </tr>
            <tr>
                <td align="right">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
        </form>
<?php
    include ('rodape.php');
?>