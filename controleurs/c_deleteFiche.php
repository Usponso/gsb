<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('fonctions.php');
$idV = $_POST['idV'];
$mois = $_POST['mois'];
$donnees = [$idV,$mois];

$result = false;

try
{
    $bd = connexion();
    
    if($bd)
    {
        $req = $bd->prepare('DELETE FROM lignefraisforfait WHERE idVisiteur = ? AND mois = ?');
        
        if($req->execute($donnees))
        {
            $req = $bd->prepare('DELETE FROM lignefraishorsforfait WHERE idVisiteur = ? AND mois = ?');
            
            if($req->execute($donnees))
            {
                $req = $bd->prepare('DELETE FROM fichefrais WHERE idVisiteur = ? AND mois = ?');
                
                if($req->execute($donnees))
                {
                    $result = true;
                }
            }
        }
        
        header('Location: ../index.php?uc=etatFrais&action=selectionnerMois');
                
        //echo 'idVisiteur : '.$idV.' \ Mois : '.$mois;
    }
} 
catch (PDOException $ex) 
{
    echo 'Erreur de connexion.';
    $ex->getMessage();
}

