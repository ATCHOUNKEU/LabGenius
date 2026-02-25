# LabGenius - Laboratoire de Recherche Génomique
**Développeur : ATCHOUNKEU TOUDJI NATHAN**

## Présentation du Projet
LabGenius est une plateforme de gestion et d'analyse de séquences ADN. Ce projet permet d'archiver, de consulter et d'exploiter des données génomiques extraites d'une base de données SQL.

## Architecture du Projet
Le projet est organisé de manière rigoureuse pour séparer le code, les données et la documentation :

* **Index Racine** : Point d'entrée unique centralisant le chargement des pages via PHP.
* **`/pages`** : Contenu dynamique du laboratoire (Présentation, Bibliothèque, Catalogue).
* **`/includes`** : Composants structurels réutilisables (Header et Footer).
* **`/data`** : Contient le fichier source de la base de données `labgenius.sql`.
* **`/docs`** : Regroupe la documentation pédagogique, le cahier des charges et les exercices du projet.
* **`/img`** : Stocke toutes les ressources visuelles, incluant le logo du laboratoire et les illustrations scientifiques.
* **`/css` & `/js`** : Fichiers de style global et scripts d'interactivité.

## Base de Données
Le système exploite la base de données située dans le dossier `/data`, gérée sous Laragon.
Les données sont récupérées via **PDO** pour garantir la sécurité et la performance des requêtes.

## Technologies Utilisées
* PHP 8 (Architecture modulaire)
* MySQL (Stockage des séquences via le fichier dans `/data`)
* CSS3 (Design avec variables et Grid)
* JavaScript Vanilla (Logique métier)
* Git (Gestion de version)

## Défis Techniques et Solutions

* **Erreur d'encodage (UTF-16 vs UTF-8)** :
    * *Problème* : Fichiers illisibles par le serveur car enregistrés en UTF-16 LE.
    * *Solution* : Conversion de tous les fichiers en **UTF-8** dans VS Code.

* **Gestion des caractères spéciaux** :
    * *Problème* : Bogues de chargement dus à des noms de fichiers avec accents.
    * *Solution* : Standardisation des noms de fichiers dans les dossiers `/img` et `/pages`.

* **Affichage des données SQL** :
    * *Problème* : Rendre les données de `/data/labgenius.sql` visuellement exploitables.
    * *Solution* : Utilisation de **PDO PHP** et d'une interface en **CSS Grid** pour générer des cartes de données.