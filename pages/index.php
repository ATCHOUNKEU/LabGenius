<?php
/**
 *  SÉCURITÉ DU DOSSIER PAGES
 * Ce fichier empêche l'accès direct au répertoire 'pages/'.
 * Si quelqu'un essaie d'y accéder, il est automatiquement renvoyé vers l'accueil.
 */

// 1. On effectue une redirection immédiate vers l'index principal à la racine
// Le '../' permet de remonter d'un cran dans ton arborescence.
header("Location: ../index.php");

// 2. On arrête l'exécution du script pour être sûr que rien d'autre ne s'affiche
exit();

/**
 * Pourquoi j'ai  mis ce fichier ici ?
 * - Pour protéger la liste de ses fichiers PHP (dashboard, sequenceur, etc.).
 * - Pour garantir que l'utilisateur passe toujours par le système de 'require' de la racine.
 */
?>