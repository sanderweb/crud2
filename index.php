<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Class Crud</title>
</head>
<body>
    <?php
        include("Class/ClassConexao.php");
        $Conexao=new ClassConexao();
        var_dump(Conexao->conectaDB());
    
    
    ?>
</body>
</html>