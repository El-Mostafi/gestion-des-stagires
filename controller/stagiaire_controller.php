<?php 
require_once 'model/stagiaires.php';
function listeStagiairesAction(){
    $lignes = liste_stagiares();
    require_once 'views/liste_stagiaires.php';
}
function createAction(){
    require_once 'views/createViews.php';
}
function deleteAction(){
    require_once 'views/deletViews.php';
}
function storeAction(){
    create();
    header('Location:index.php');
}
function editAction(){
    require_once 'views/editViews.php';
}
function updateAction(){
    $id=$_POST['id'];
    edit($id);
    header('Location:index.php');
}
function destroyAction($id){
    destroy($id);
    header('Location:index.php');
}