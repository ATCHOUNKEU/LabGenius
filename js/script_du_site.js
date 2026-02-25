/**
 *  SCRIPT GLOBAL DU LABORATOIRE LABGENIUS
 * Ce fichier gère l'interactivité de toutes les pages (Bibliothèque, Séquenceur, etc.)
 */

// On attend que toute la page soit chargée avant de lancer les scripts
document.addEventListener('DOMContentLoaded', function() {
    console.log("Système LabGenius prêt [Nathan Mithou]");

    // --- LOGIQUE POUR LA BIBLIOTHÈQUE ---
    
    /**
     *  Cette fonction enregistre la séquence dans le localStorage
     * et redirige l'utilisateur vers le séquenceur.
     */
    window.chargerVersEditeur = function(sequenceADN) {
        // On stocke la chaîne de caractères sous le nom 'adn_a_traiter'
        localStorage.setItem('adn_a_traiter', sequenceADN);
        
        // Notification visuelle (je peux l'améliorer avec ton CSS plus tard)
        alert("Séquence envoyée au séquenceur ! Redirection en cours...");
        
        //  Redirection vers la page séquenceur via l'index
        window.location.href = "index.php?p=sequenceur";
    };

    /**
     *  Permet de marquer visuellement une séquence comme importante
     */
    window.marquerSequence = function(bouton) {
        // On bascule la classe 'favori' pour changer la couleur de marqué en CSS
        bouton.classList.toggle('active');
        
        if (bouton.classList.contains('active')) {
            bouton.innerHTML = "Marqué ";
            console.log("[ACTION] - Séquence marquée comme importante");
        } else {
            bouton.innerHTML = "Marquer ";
        }
    };


    // --- LOGIQUE POUR LE SÉQUENCEUR ---

    //  Si on est sur la page séquenceur, on vérifie s'il y a un ADN en attente
    const champEdition = document.getElementById('code-adn');
    if (champEdition) {
        const adnRecupere = localStorage.getItem('adn_a_traiter');
        
        if (adnRecupere) {
            // On injecte l'ADN dans le textarea du séquenceur
            champEdition.value = adnRecupere;
            console.log("[ACTION] - ADN chargé depuis la bibliothèque");
            
            // Une fois chargé, on peut nettoyer le localStorage si on veut
            // localStorage.removeItem('adn_a_traiter');
        }
    }

    /**
     *  Simulation d'une mutation ponctuelle
     */
    const btnMutation = document.getElementById('btn-mutation');
    if (btnMutation) {
        btnMutation.addEventListener('click', function() {
            let adnActuel = champEdition.value;
            if (adnActuel.length > 0) {
                // Simulation simple : on remplace un caractère au hasard
                let position = Math.floor(Math.random() * adnActuel.length);
                let bases = ['A', 'T', 'G', 'C'];
                let nouvelleBase = bases[Math.floor(Math.random() * bases.length)];
                
                let adnMute = adnActuel.substring(0, position) + nouvelleBase + adnActuel.substring(position + 1);
                champEdition.value = adnMute;
                
                ajouterLog("Mutation ponctuelle appliquée à la position " + position);
            }
        });
    }

    /**
     *  Fonction pour ajouter une ligne dans l'historique sans heure
     */
    function ajouterLog(message) {
        const listeLogs = document.getElementById('log-modifications');
        if (listeLogs) {
            let nouvelItem = document.createElement('li');
            nouvelItem.textContent = "[ACTION] - " + message;
            listeLogs.prepend(nouvelItem); // On ajoute en haut de liste
        }
    }
});

// --- NLOGIQUE DE NAVIGATION INDEX ---
/**
 * Ce bloc permet de gérer les transitions entre les pages 
 * et de vérifier que l'URL est toujours propre.
 */
(function() {
    const urlParams = new URLSearchParams(window.location.search);
    const pageActuelle = urlParams.get('p');

    if (pageActuelle) {
        console.log("[SYSTEM] - Navigation active sur la page : " + pageActuelle);
    } else {
        console.log("[SYSTEM] - Accueil LabGenius - Nathan Mithou");
    }

    // Gestion de la mise en avant du menu actif
    const liensMenu = document.querySelectorAll('nav a');
    liensMenu.forEach(lien => {
        if (lien.href.includes('p=' + pageActuelle)) {
            lien.style.borderBottom = "2px solid var(--accent-blue)";
            lien.style.color = "var(--accent-blue)";
        }
    });
})();
// --- FIN DU BLOC INDEX ---