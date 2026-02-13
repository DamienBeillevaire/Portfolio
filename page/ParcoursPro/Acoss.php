<div class="defaultContainer">
    <section class="main-align">
        <div class="section-title">
            <h1>Acoss</h1>
            <h2>Présentation de l'entreprise</h2>
            <ul>
                <li>Numéro de SIRET : 180 035 016 00096</li>
                <li>Dénomination sociale : ACOSS NANTES</li>
                <li>Forme juridique : Établissement public national à caractère administratif</li>
            </ul>
            <p>
                L'Union de Recouvrement des cotisations de Sécurité Sociale et d'Allocations Familiales (Urssaf) est
                un organisme qui procède à la collecte et à la redistribution des cotisations et contributions destinées
                au financement de la Sécurité sociale.
            </p>


            <div class="flex-card">
                <div class="card" style="width: 35rem;">
                    <img src="https://i.imageupload.app/1837a01e8a6ef9812c7d.png" class="card-img-top" alt="Organigramme générale">
                    <div class="card-body">
                        <p class="card-text">Au sein de l'entreprise il y a plusieurs groupe, nous faisons tous parti de la DSI (direction des systèmes d'information).
                            Je faisais parti du groupe DA arichitecture infrastructures et sécurité.</p>
                    </div>
                </div>

                <div class="card" style="width: 35rem;">
                    <img src="https://i.imageupload.app/4d90662d842c539ab501.png" class="card-img-top" alt="Département">
                    <div class="card-body">
                        <p class="card-text">Dans ce groupe  Loresdjkfdsifhjdsbfhjbdshjfbsdhjbfhjsdbfjhsdbfjhdsbfjhbsjfbdsjfbdshjfbdshjbfjhdbfjhbdsjfhbdshjfbjdshbfhjdsbjhfbdsfbsdjhbfjsdbfjhdsbfjbsdfbjdshb</p>
                    </div>
                </div>

                <div class="card" style="width: 35rem;">
                    <img src="https://i.imageupload.app/5a415a7c3b11722d0d17.png" class="card-img-top" alt="Application">
                    <div class="card-body">
                        <p class="card-text">Les outils sur lequelle mon département agis sont les outils transverses, pour ma pars j'ai simplement agis sur l'application DDP-DIT</p>
                    </div>
                </div>

                <div class="card" style="width: 35rem;">
                    <img src="https://i.imageupload.app/3da6fc4cc2a69e4b784b.png" class="card-img-top" alt="Urssaf">
                    <div class="card-body">
                        <p class="card-text">L'entreprise Acoss est le pilié de l'enchange d'information informatique dans le domaine du recouvrement</p>
                    </div>
                </div>

                <div class="card" style="width: 35rem;">
                    <img src="https://i.imageupload.app/4517ab9b9720656a1a5e.png" class="card-img-top" alt="Mission">
                    <div class="card-body">
                        <p class="card-text">L'objectif de l'URSSAF est de collecté des fonds aupres de cotisant telle les employeurs/entrepreneurs et salarié afin de reversé
                            ces fonds pour l'assurance maladie</p>
                    </div>
                </div>
            </div>


            <div class="section-title">
                <h2>Résumé des semaines</h2>
                <a href="?route=stageAcossWeekly" style="width: 8rem" class="btn btn-primary">Redirection</a>
            </div>

            <!---------------------------------------------------OUTILS UTILISé--------------------------------------------------->
            <div>
            </div>
            <!---------------------------------------------------OBJECTIF STAGE--------------------------------------------------->
            <div class="section-title">
                <h2>Mission Principale</h2>
                <h3>Objectif : </h3>
                <div>
                    <p>Dans un premier temps crée un backend capable d'interroger une BDD avec toute les methodes d'appelle API GET/POST/PUT/DELETE d'une table crée au préalable
                        afin de faire une interface utilisateur permettant de paramettrer des données dans une interface utilisateur.</p>
                    <img src="https://i.imageupload.app/0c158391ef09fee3e925.png">
                </div>
                <h4>Structure Base</h4>
                <p>Création de la table ' template_fedex ' en sql sur la base de donnée ddpdit</p>
                <img src="https://i.imageupload.app/9ed9fae6095744498b6c.png" alt="SQL">
                <img src="https://i.imageupload.app/2ac7666473634cdcf85a.png" alt="Table">
                <img src="https://i.imageupload.app/865f4afa607cbc8b104d.png" alt="Relation">
                <p>________________________________________________________________________________________________________________________________________________________________</p>

                <h4>Sur le Back-End</h4>
                <p>Le back-end est constitué de plusieurs couche, l'entité qui est l'objet qui contiendra les informations et par laquelle on va appeller,
                    le Controller qui va initié les methodes d'appelle, le service va faire le lien avec la BDD pour récupérer les données en base ou envoyer
                    des données dans la base et le repository qui contient des fonctions complémentaire au appelle back-end</p>

                <div class="flex-card">
                    <div class="card" style="width: 25rem;">
                        <h5 class="card-header">Entity</h5>
                        <img src="https://i.imageupload.app/d9310bbac6bdc4d3b909.png" class="card-img-top" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Création d'une nouvelle entité TemplateFedex en définissant une contrainte en disant que cette entité doit être connecter à la table socle pour récupérer ses données</p>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <h5 class="card-header">Entity</h5>
                        <img src="https://i.imageupload.app/9612d26aa97d77087ab0.png" class="card-img-top" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Définissions des attributs de l'entité, ici il s'agit de hawaiBDD qui est un booleen qui est initialisé a false et socle qui est une many to one vers l'entité socle</p>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <h5 class="card-header">Entity</h5>
                        <img src="https://i.imageupload.app/86f1597edf469e83dd2e.png" style="width: 60%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Définissions des attributs de l'entité, ici il s'agit de hawaiBDD qui est un booleen qui est initialisé a false et socle qui est une many to one vers l'entité socle</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------GET--------------------------------------------------->
                <h5>Méthode GET</h5>
                <p>Cette méthode permet de récupérer les données contenu dans la base de données et de les afficher.</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/93bc3bf425fa50c5e077.png" class="card-img-top" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Définission route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/14c2e536c130be23ba8e.png" class="card-img-top" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">appelle de la function service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Service</h5>
                        <img src="https://i.imageupload.app/60c6f96d416286824cee.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Création du service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/21e766b351c71ee690b2.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/95bce0a23beffc931895.png" style="width: 60%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif route</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------POST--------------------------------------------------->
                <h5>Méthode POST</h5>
                <p>Cette méthode permet d'envoyer une nouvelle donnée dans la base de donnée</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/456245a608c2e4d99d5a.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Définission route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/ec6b64a55ea5c2d55ce8.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">appelle de la function service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Service</h5>
                        <img src="https://i.imageupload.app/ed5f94936d17e36c69f2.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Création du service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Service</h5>
                        <img src="https://i.imageupload.app/f5bb2b16c89b780c519b.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction dans le repository</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Repository</h5>
                        <img src="https://i.imageupload.app/fa1668d675aade40072b.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Fonction de recherche pour éviter doublon</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/93cb692def32421faea8.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/ffb6703b1a434b6209e8.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/ca347092b300210cc53d.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif doublon</p>
                        </div>
                    </div>
                </div>
            </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------PUT--------------------------------------------------->
                <h5>Méthode PUT</h5>
                <p>Cette méthode permet de modifié une donnée dans la base de donnée</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/2e47ff94ed5b228ec433.png" style="width: 100%" class="card-img-top" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Définission route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/e52a9f6fc1225ba7bb13.png" style="width: 100%" class="card-img-top" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">appelle de la function service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Service</h5>
                        <img src="https://i.imageupload.app/0e2aefb1d15858340636.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Création du service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/f6315ab68a391a032001.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/b93c7374e747b41a169a.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif route</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------DELETE--------------------------------------------------->
                <h5>Méthode DELETE</h5>
                <p>Cette méthode permet de supprimer une donnée de la base de donnée</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/6b8c80400aad52aec91f.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Définission route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Controller</h5>
                        <img src="https://i.imageupload.app/8a46c4411855d57b1663.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">appelle de la function service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Service</h5>
                        <img src="https://i.imageupload.app/2563794aad68d3d70775.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Création du service</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/e97ec6751df409ea3799.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Route</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/67534ee63abf6b79c861.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérif route</p>
                        </div>
                    </div>
                </div>
            <p>________________________________________________________________________________________________________________________________________________________________</p>
            <!---------------------------------------------------FRONT-END--------------------------------------------------->
            <h4>Front-end</h4>
            </div>
    </section>
</div>