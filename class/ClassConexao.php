<?php 
class ClassConexao {
    Realizara a conexão com o banco de dados
    public function conectaDB()
    {
    try{
        $Con=new PDO("mysql:host=localhost;dbname=crud2", "roo", "root");
        return $Con;
    }    

    }catch (PDOException $erro)
        returne $Erro->getMenssage();
}