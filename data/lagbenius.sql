/* ===========================================================
   PROJET LABGENIUS - BASE DE DONNÉES DU LABORATOIRE
   Réalisé par : Nathan 
   Objectif : Stocker mes recherches ADN et sécuriser l'accès.
   ===========================================================
*/

-- Je commence par nettoyer pour être sûr de repartir sur du propre
DROP DATABASE IF EXISTS labgenius;
CREATE DATABASE labgenius;
USE labgenius;

-- Ma table de sécurité pour les chercheurs
-- J'ai mis "identifiant" au lieu de "login" pour que ce soit plus clair
CREATE TABLE chercheurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(50) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL, -- Stocké en clair pour mes tests actuels
    nom_complet VARCHAR(100)
);

-- Ma table pour les séquences ADN (Le coeur du site)
-- J'ai ajouté "type_echantillon" pour pouvoir filtrer mes recherches plus tard
CREATE TABLE sequences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_sequence VARCHAR(100) NOT NULL,
    code_adn TEXT NOT NULL, -- Utilisation de TEXT car l'ADN peut être très long
    type_echantillon VARCHAR(50), 
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Automatique, pour l'historique
);

-- --- MES DONNÉES DE TEST (Pour l'exploration du site) ---

-- Je crée mon compte chercheur personnel
-- Identifiant : mithou | MDP : 1234
INSERT INTO chercheurs (identifiant, mot_de_passe, nom_complet) 
VALUES ('mithou', '1234', 'Mithou');

-- J'ajoute quelques échantillons d'ADN pour que le labo ne soit pas vide
-- Cela me permet de tester si ma bibliothèque s'affiche bien
INSERT INTO sequences (nom_sequence, code_adn, type_echantillon) VALUES 
('Gène de la Vision', 'ATGCGTACGTAA', 'Humain'),
('Échantillon Inconnu X', 'GGCCAAATTTGC', 'Inconnu'),
('Bactérie Résistante', 'TATAGCGCTATA', 'Microbe');

-- Note pour plus tard : Penser à hacher le mot de passe pour la sécurité finale.