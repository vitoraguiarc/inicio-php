<?php
    //echo("Testanto o PHP");

    //print_r("Testando outra forma de escrever");

    if(isset($_GET["btnSalvar"])){
        $nome = $_GET["txtNome"];
        $cidade = $_GET["sltCidade"];
        $sexo = $_GET["rdoSexo"];
        $obs = $_GET["txtObs"];

        //foi criado esssas variavéis para resolver o problema de variavel indefinida na exibição dos dados
        $idiomaPortugues = null;
        $idiomaIngles = null;
        $idiomaEspanhol = null;
        
        //Tratamento para recuperar os checkbox que foram selecionados no formulário
        if(isset($_GET["chkPortugues"]))
        {
            $idiomaPortugues = $_GET["chkPortugues"];
        }

        if(isset($_GET["chkIngles"]))
        {
            $idiomaIngles = $_GET["chkIngles"];
        }

        if(isset($_GET["chkEspanhol"]))
        {
            $idiomaEspanhol = $_GET["chkEspanhol"];
        }



        //Contatenação é representada pelo ponto (.)
        echo("<b>Nome: </b>" . $nome . "<br>");
        echo("<b>Cidade: </b>" . $cidade . "<br>");
        echo("<b>Sexo: </b>" . $sexo . "<br>");
        echo("<b>Observações: </b>" . $obs . "<br>");
        echo("<b>Idiomas: </b>" . $idiomaPortugues . " " . $idiomaIngles . " " . $idiomaEspanhol);
    }
      
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <form name="frmCadastro" method="GET" action="formularios.php">
        Nome: <input type="text" name="txtNome" size="50" maxlength="">
        <br><br>
        Cidade:
        <select name="sltCidade" id="">
            <option value="" selected>Selecione um Item</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="carapicuiba">Carapicuíba</option>
            <option value="itapevi">Itapevi</option>
            <option value="osasco">Osasco</option>
        </select>
        <br><br>
        Sexo:
        <input type="radio" name="rdoSexo" value="F"> Feminino
        <input type="radio" name="rdoSexo" value="M"> Masculino
        <input type="radio" name="rdoSexo" value="O"> Outro
        <br><br>
        Idiomas:
        <input type="checkbox" name="chkPortugues" value="PT"> Português
        <input type="checkbox" name="chkIngles" value="EN"> Inglês
        <input type="checkbox" name="chkEspanhol" value="ES"> Espanhol
        <br><br>
        Observação:
        <textarea name="txtObs" id="" cols="45" rows="5" ></textarea>
        <br><br>
        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">

    </form>
    
</body>
</html>