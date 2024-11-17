<?php

function db_connection(){
    $dbase="stagiaires";
    $pass="mohamed8/8";
    $user="root";
    $dsn = "mysql:host=localhost;port=3306;dbname=$dbase";
    $pd = new PDO($dsn, $user, $pass);
    return $pd;
}
function liste_stagiares(){
    $pd = db_connection();
    $result= $pd->query("SELECT * FROM tabstagiaires");
    $lignes=$result->fetchAll(PDO::FETCH_ASSOC);
    return $lignes;
}

function create(){
    $nom=$_POST['Nom'];
    $prenom=$_POST['Prenom'];
    $age=$_POST['Age'];
    $login=$_POST['Login'];
    $password=$_POST['Password'];
    $pd = db_connection();
    $result= $pd->prepare("INSERT INTO tabstagiaires VALUES(null, ?, ?, ?, ?, ?)");
    $result->execute([$nom,$prenom,$age,$login,$password]);
    }

function edit($id){
    $nom=$_POST['Nom'];
    $prenom=$_POST['Prenom'];
    $age=$_POST['Age'];
    $login=$_POST['Login'];
    $password=$_POST['Password'];
    $pd = db_connection();
    $result= $pd->prepare("UPDATE tabstagiaires SET nom=? ,prenom=? ,age=? ,login=? ,password=? WHERE id=?");
    $result->execute([$nom,$prenom,$age,$login,$password,$id]);
    
}
function destroy($id){
    $pd = db_connection();
    $result= $pd->prepare("DELETE FROM tabstagiaires WHERE id=?");
    $result->execute([$id]);
}