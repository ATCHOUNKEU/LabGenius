<?php
/**
 *  SYSTÈME DE DÉCONNEXION SÉCURISÉE
 * Ce fichier détruit la session active du chercheur pour protéger les données génomiques.
 */

// 1. On initialise l'accès à la session actuelle pour pouvoir la manipuler
session_start();

// 2.  On vide toutes les variables de session (identifiants, nom du chercheur, etc.)
// Cela correspond aux données de ma table 'chercheurs' que nous avions chargées.
$_SESSION = array();

// 3. On détruit physiquement le fichier de session sur le serveur
session_destroy();

/**
 * 4. REDIRECTION FINALE
 * Une fois déconnecté, on renvoie l'utilisateur vers la page de présentation.
 * On utilise l'index pour que le header et le footer se chargent normalement.
 */
header("Location: index.php?p=presentation");
exit();

//  Ce fichier est invisible pour l'utilisateur, il fait juste la transition.
?>