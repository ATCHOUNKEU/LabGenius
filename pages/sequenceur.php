<?php 
/** *  - INTERFACE DU SÉQUENCEUR GÉNOMIQUE
 * Cet outil permet de manipuler l'ADN en temps réel.
 * On y retrouve la visualisation, l'édition et la simulation de mutations.
 */
?>

<div class="conteneur-sequenceur">

    <header class="entete-outil">
        <h1>Séquenceur Interactif LabGenius</h1>
        <p>Outil d'édition et de simulation de mutations génétiques.</p>
    </header>

    <section class="bloc-edition">
        <h2>Éditeur de Séquence ADN</h2>
        <div class="interface-saisie">
            <label for="code-adn">//  Champ d'édition directe de la chaîne de caractères</label>
            <textarea id="code-adn" rows="5" placeholder="Entrez la séquence (ex: ATGC...)">ATGCGTCGATAGCTAGCTAGCTAGCTA</textarea>
        </div>
    </section>

    <section class="bloc-visualisation">
        <h2>Représentation Graphique</h2>
        <div class="rendu-graphique">
            <div class="base base-a">A</div>
            <div class="base base-t">T</div>
            <div class="base base-g">G</div>
            <div class="base base-c">C</div>
            <p class="legende-graphique"> Visualisation par blocs de nucléotides pour une meilleure lecture.</p>
        </div>
    </section>

    <section class="bloc-actions">
        <h2>Outils de Manipulation</h2>
        <div class="groupe-boutons">
            <button class="btn-outil" onclick="simulerMutation()">Simuler une Mutation Ponctuelle</button>
            
            <button class="btn-outil btn-gene" onclick="insererGene()">Insérer un Gène Cible</button>
        </div>
        <p class="comm-technique">// Ces boutons permettent de simuler les modifications avant de les enregistrer en SQL.</p>
    </section>

    <section class="bloc-historique">
        <h2>Historique des Modifications</h2>
        <ul id="log-modifications">
            <li>[ACTION] - Chargement de la séquence initiale réussie.</li>
            <li>[ACTION] - Analyse du gène de la vision terminée.</li>
        </ul>
        <p class="comm-technique">//  Ce journal trace les changements sans afficher l'heure, conformément à tes souhaits.</p>
    </section>

</div>

