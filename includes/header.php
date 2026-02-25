<?php 
//  Ici je gère le haut de toutes mes pages
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LabGenius - Projet Nathan</title>
    
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

    <header class="barre-du-haut">
        <nav class="mon-menu">
            <div class="mon-logo">
                <img src="img/Logo.png" alt="Logo du labo">
                <span>LabGenius</span>
            </div>
            
            <ul class="mes-liens">
                <li><a href="index.php?p=presentation">Accueil</a></li>
                <li><a href="index.php?p=catalogue">Catalogue</a></li>
                <li><a href="index.php?p=dashboard">Dashboard</a></li>
                <li><a href="index.php?p=bibliotheque">Bibliothèque</a></li>
                <li><a href="index.php?p=sequenceur">Séquenceur</a></li>
                <li><a href="pages/logout.php" class="bouton-rouge">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenu-principal">