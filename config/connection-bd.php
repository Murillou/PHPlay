<?php

try{
  $pdo = new PDO('mysql:host=localhost;dbname=phplay', 'root', '1258712587');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $error) {
  echo 'Falha na conexão com o banco de dados: ' . $error->getMessage();
}