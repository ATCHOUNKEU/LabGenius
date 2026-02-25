<?php 
/**  TABLEAU DE BORD 
 * Ce fichier est le centre de pilotage de LabGenius.
 * Il regroupe les statistiques, les projets et les logs système.
 */
?>

<div class="conteneur-dashboard">

    <header class="entete-dashboard">
        <h1>Centre de Contrôle LabGenius</h1>
        
        <div class="indicateurs-visuels">
            <div class="carte-stat">
                <span class="label-stat">Séquences en Base</span>
                <span class="nombre-affichage">3</span> <p class="petit-comm">// Nathan : Ce chiffre provient du COUNT(*) de la table sequences</p>
            </div>

            <div class="carte-stat">
                <span class="label-stat">État des Systèmes</span>
                <span class="statut-badge actif">Opérationnel</span>
                <p class="petit-comm">// Nathan : Indique si le séquenceur est prêt à l'emploi</p>
            </div>
        </div>
    </header>

    <div class="grille-dashboard">

        <section class="bloc-info">
            <h2>Projets de Recherche Actifs</h2>
            <div class="liste-projets">
                <div class="item-projet">
                    <strong>Étude de la Vision :</strong> Analyse du génome rétinien.
                    <p class="detail-comm">// Nathan : On utilise ici les données 'Humain' de notre SQL</p>
                </div>
                <div class="item-projet">
                    <strong>Résistance Bactérienne :</strong> Séquençage des souches infectieuses.
                    <p class="detail-comm">// Nathan : Analyse basée sur l'échantillon 'Microbe'</p>
                </div>
            </div>
        </section>

        <section class="bloc-info">
            <h2>Dernières Synthèses ADN</h2>
            <table class="mini-table">
                <thead>
                    <tr>
                        <th>Réf</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ADN_H01</td>
                        <td>Humain</td>
                        <td>2026-02-25</td>
                    </tr>
                    <tr>
                        <td>ADN_M42</td>
                        <td>Microbe</td>
                        <td>2026-02-25</td>
                    </tr>
                </tbody>
            </table>
            <p class="comm-footer">// Nathan : Ce tableau sera bientôt synchronisé avec la table 'sequences'</p>
        </section>

        <section class="bloc-info large">
            <h2>Journaux d'Activité (Logs)</h2>
            <div class="terminal-logs">
                <p><code>[14:10]</code> - Connexion sécurisée de l'administrateur <strong>Nathan Mithou</strong>.</p>
                <p><code>[14:25]</code> - Modification de la structure dans <em>lagbenius.sql</em> détectée.</p>
                <p><code>[15:00]</code> - Nouvelle séquence ajoutée : "Bactérie Résistante".</p>
                <p><code>[15:05]</code> - Déconnexion de l'utilisateur via <em>logout.php</em>.</p>
            </div>
            <p class="comm-footer">// Nathan : Ces logs assurent la traçabilité complète de nos manipulations génétiques.</p>
        </section>

    </div>

</div>