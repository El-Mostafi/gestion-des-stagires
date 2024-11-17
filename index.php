<?php
    require_once 'controller/stagiaire_controller.php';
    $_GET['action']='delet';
    if(isset($_GET['action'])){
            switch($_GET['action']){
                case 'create' : createAction();
                break;
                case 'delet' : deleteAction();
                break;
                case'destroy' : destroyAction($_GET['id']);
                break;
                case'edit' : editAction();
                break;
                case'store' : storeAction();
                break;
                case'update' : updateAction();
                break;
                case'list' : listeStagiairesAction();
                break;
            }
    }