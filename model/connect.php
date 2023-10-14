<?php
function connectDatabase()
{
  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=WebPHP", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
}

function getAll($sql)
{
  $conn = connectDatabase();
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $arrProducts = $stmt->fetchAll();
  $conn = null;
  return $arrProducts;
}

function getOne($sql)
{
  $conn = connectDatabase();
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $arrProducts = $stmt->fetch();
  $conn = null;
  return $arrProducts;
}
function execDatabase($sql)
{
  $conn = connectDatabase();
  $conn->exec($sql);
  $conn = null;
}
function executeDatabase($sql)
{
  $conn = connectDatabase();
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $conn = null;
}
