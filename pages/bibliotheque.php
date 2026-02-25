<?php 
/** * NATHAN MITHOU - BIBLIOTHÈQUE GÉNOMIQUE INTERACTIVE
 * Ce fichier permet de lister, charger et marquer les séquences ADN.
 * Le transfert vers le séquenceur se fait via le localStorage.
 */
?>

<div class="bibliotheque-container">

    <header class="biblio-header">
        <h1>Archives Génomiques LabGenius</h1>
        <p>Consultez vos séquences et chargez-les directement dans l'éditeur pour analyse.</p>
    </header>

    <section class="section-archives">
        <table class="table-adn">
            <thead>
                <tr>
                    <th>Nom de la Séquence</th>
                    <th>Type</th>
                    <th>Aperçu ADN</th>
                    <th>Actions</th> <th>Favoris</th> </tr>
            </thead>
            <tbody>
                <tr class="ligne-sequence">
                    <td class="nom-seq">Gène de la Vision</td>
                    <td><span class="badge humain">Humain</span></td>
                    <td class="code-extrait">ATGC...GCTA</td>
                    <td>
                        <button class="btn-charger" onclick="chargerVersEditeur('ATGCGTCGATAGCTAGCTAGCTAGCTA')">
                            Charger l'ADN
                        </button>
                    </td>
                    <td>
                        <button class="btn-marque" onclick="marquerSequence(this)">
                            Marquer 
                        </button>
                    </td>
                </tr>

                <tr class="ligne-sequence">
                    <td class="nom-seq">Bactérie Résistante</td>
                    <td><span class="badge microbe">Microbe</span></td>
                    <td class="code-extrait">GGCC...TTAA</td>
                    <td>
                        <button class="btn-charger" onclick="chargerVersEditeur('GGCCGATCGATCGATCGATCGATCGAA')">
                            Charger l'ADN
                        </button>
                    </td>
                    <td>
                        <button class="btn-marque" onclick="marquerSequence(this)">
                            Marquer 
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="commentaire-nathan"> Les données affichées ici correspondent à tes captures SQL.</p>
    </section>

    <footer class="biblio-footer">
        <div class="note-info">
            <p><strong>Info Système :</strong> Le bouton "Charger" utilise la mémoire locale pour transférer le génome vers la page Séquenceur.</p>
        </div>
        <p class="comm-technique">Toute modification marquée est conservée pour la session actuelle.</p>
    </footer>

</div>