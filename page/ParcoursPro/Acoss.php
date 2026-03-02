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
                    <p>Dans un premier temps crée un backend "template_fedex" capable d'interroger une BDD avec toute les methodes d'appelle API GET/POST/PUT/DELETE d'une table crée au préalable
                        afin de faire une interface utilisateur permettant de paramettrer des données dans une interface utilisateur.
                        Et dans un second temps faire évoluer le web-service fedex présent dans DDP-DIT pour pouvoir copier les droits
                        de modifications et de création associé au projet template_fedex
                        </p>
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
                <img src="https://i.imageupload.app/3fbb01e9984fb9eb7579.png" alt="chemin entité">
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
                            <p class="card-text">Définissions des Getters / Setters de tout les attributs présent dans TemplateFedex</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------GET--------------------------------------------------->
                <h5>Méthode GET</h5>
                <p>Cette méthode permet de récupérer les données contenu dans la base de données et de les afficher.</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/93bc3bf425fa50c5e077.png" class="card-img-top" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Instanciation de la route pour l'API doc.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/14c2e536c130be23ba8e.png" class="card-img-top" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction service et stockage des informations de "getListe" dans une liste.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Service</h5>
                        <img src="https://i.imageupload.app/60c6f96d416286824cee.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Récupère les données contenu dans la base pour les renvoyers.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/21e766b351c71ee690b2.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Voici la route par laquelle les données sont accessible.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/95bce0a23beffc931895.png" style="width: 60%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérification via insomnia pour la récupération des données contenu dans la base.</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------POST--------------------------------------------------->
                <h5>Méthode POST</h5>
                <p>Cette méthode permet d'envoyer une nouvelle donnée dans la base de donnée.</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/456245a608c2e4d99d5a.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Instanciation de la route pour l'API doc.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/ec6b64a55ea5c2d55ce8.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction service "create".</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Service</h5>
                        <img src="https://i.imageupload.app/ed5f94936d17e36c69f2.png" style="width: 90%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Permet la création de la donnée pour l'envoyer dans la base.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Service</h5>
                        <img src="https://i.imageupload.app/f5bb2b16c89b780c519b.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction dans le repository.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Repository</h5>
                        <img src="https://i.imageupload.app/fa1668d675aade40072b.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Fonction de recherche pour éviter doublon.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/93cb692def32421faea8.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Voici la route par laquelle on peut ajouter une donnée.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/ffb6703b1a434b6209e8.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérification via insomnia pour l'entrée d'une donnée dans la base.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/ca347092b300210cc53d.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérification via insomnia pour pour évité les doublons de donnée dans la base.</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------PUT--------------------------------------------------->
                <h5>Méthode PUT</h5>
                <p>Cette méthode permet de modifié une donnée dans la base de donnée.</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/2e47ff94ed5b228ec433.png" style="width: 100%" class="card-img-top" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Instanciation de la route pour l'API doc. Ici on vois que il y a un paramètre en plus, on demande a fournir un id pour savoir quelle donnée on veut modifier.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/e52a9f6fc1225ba7bb13.png" style="width: 100%" class="card-img-top" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction service "modifier".</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Service</h5>
                        <img src="https://i.imageupload.app/0e2aefb1d15858340636.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Récupère la données selectionner et la modifie dans la base pour la renvoyer.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/f6315ab68a391a032001.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Voici la route par laquelle on peut modifié les données.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/b93c7374e747b41a169a.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérification via insomnia pour la modification d'une donnée contenu dans la base.</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------DELETE--------------------------------------------------->
                <h5>Méthode DELETE</h5>
                <p>Cette méthode permet de supprimer une donnée de la base de donnée.</p>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/6b8c80400aad52aec91f.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Instanciation de la route pour l'API doc. Ici on vois que il y a un paramètre en plus, on demande a fournir un id pour savoir quelle donnée on veut modifier.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Controller</h5>
                        <img src="https://i.imageupload.app/8a46c4411855d57b1663.png" style="width: 80%" class="img-fluid mx-auto d-block w-55" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Appelle de la fonction service "supprimer". </p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Back-end Service</h5>
                        <img src="https://i.imageupload.app/2563794aad68d3d70775.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Récupère la donnée selectionner et la supprime de la base.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Route</h5>
                        <img src="https://i.imageupload.app/e97ec6751df409ea3799.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Voici la route par laquelle on peut supprimer les données.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Vérification route</h5>
                        <img src="https://i.imageupload.app/67534ee63abf6b79c861.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Vérification via insomnia pour la suppression d'une données contenu dans la base.</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------FRONT-END--------------------------------------------------->
                <h4>Front-end</h4>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Front-end Template</h5>
                        <img src="https://i.imageupload.app/b8b5472042ef146a0ba9.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ici on instancie les données qui seront visible dans l'interface utilisateur</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Front-end Composant</h5>
                        <img src="https://i.imageupload.app/bffc5527dae984df5735.png" style="width: 50%" class="img-fluid mx-auto d-block w-55" alt="Attribut">
                        <div class="card-body">
                            <p class="card-text">Dans le composant on configure directement les données que l'on veut afficher </p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Front-end Service</h5>
                        <img src="https://i.imageupload.app/cc97ed0b744df34b1803.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">Le service permet d'appeller les méthodes de l'API</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Front-end API service</h5>
                        <img src="https://i.imageupload.app/bdd6de46d5d4ab4eb4cf.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text">L'API service permet en fonction de la méthode appeller de faire le lien entre les donnée de la base de donnée et les données envoyées</p>
                        </div>
                    </div>
                    <div class="card" style="width: 72rem;">
                        <h5 class="card-header">Rendu utilisateur</h5>
                        <img src="https://i.imageupload.app/5bfbd05fd995192d73e4.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Getter/Setter">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------Exploitation de la donnée--------------------------------------------------->
                <h4>Exploitation de la donnée</h4>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Interface Jenkins</h5>
                        <img src="https://i.imageupload.app/c0cf74dca9b297a3df69.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Cette fonction permet de crée un projet dans l'application fedex via les interface de l'application DDP-DIT.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Paramétrage du paquet</h5>
                        <img src="https://i.imageupload.app/a263594e75f4c12084f4.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Sur cette fonction je devais réaliser une connexion avec mon interface pour quelle puisse prendre en paramètre deux attributs.
                            Le nom du projet template_fedex et le type de projet template fedex.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Build du paquet </h5>
                        <img src="https://i.imageupload.app/c154a685c8ff54e97192.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ces attribuent sont reliés à cette instanciation dans le même fichier, cette instanciation fait appelle au service de template_fedex
                            qui permet de récupérer un template qui correspond au projet indiquer. Si aucun template correspond à mon projet alors je défini ma variable a null pour éviter
                            de casser mon code.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Webmin</h5>
                        <img src="https://i.imageupload.app/7b935466f558dd5b456e.png" style="width: 90%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ainsi si un template correspond au projet alors les deux nouveaux attributs vont prendre la donnée qui correspond au nom
                            du template et au socle de fedex qui correspond au type de projet. </p>
                            <br>
                            <p class="card-text"> Graçe à ça, si un template correspond à un projet fedex alors
                                les droits de modifications et de création pourrons être copier du template au projet fedex</p>
                        </div>
                    </div>
                </div>
                <p>________________________________________________________________________________________________________________________________________________________________</p>
                <!---------------------------------------------------Intégration--------------------------------------------------->
                <h4>Intégration</h4>
                <div class="flex-card">
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Interface Jenkins</h5>
                        <img src="https://i.imageupload.app/e710be40ab20dd99a1f5.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Interface Jenkins (application qui sert à l'automatisation de tache de déploiement).
                                En cliquant sur "lancer un build avec des paramètres" j'accède a cette interface suivante.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Paramétrage du paquet</h5>
                        <img src="https://i.imageupload.app/a72db74b1386ae2df217.png" style="width: 60%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ici je retrouve les paramètres, je paramètre donc la bonne branch à prendre pour crée le paquet et je m'assure que la coche est active,
                                elle dois intégre le web-service fedex qui sert au fonctionnement de mon projet DDP-DIT.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Build du paquet </h5>
                        <img src="https://i.imageupload.app/ae9c59f6151697ba2fe4.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ici on vois la création du paquet.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Webmin</h5>
                        <img src="https://i.imageupload.app/347738e05bb0cdc73b36.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Après avoir build le paquet je passe sur l'application webmin
                                ( Application qui sert a géré toutes les applications du site ) </p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Configuration Projet</h5>
                        <img src="https://i.imageupload.app/4eae4d33759e9083c13e.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Sur webmin après avoir selectionné mon projet (DDP-DIT) je choisi la nouvelle version du paquet générer par Jenkins</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Déploiement du paquet sur les serveurs</h5>
                        <img src="https://i.imageupload.app/c923a4bda0463b2888c0.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Ensuite je sélectionne les serveurs sur lequel je veux faire la mise à jour, ici les deux couloir de DDPDIT web
                                (Deux site internet dev nommé couloir)</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Test</h5>
                        <img src="https://i.imageupload.app/78e506805649e88929d0.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Sur le site de la dev je vérifie que les modifications ont bien été ajouté et fonctionne bien sur l'environnement,
                            ici je retrouve une erreur. Celle-ci indique que la base de donnée n'est pas actualisé et que mon écran demande des données non existante.
                            N'ayant pas personnellement accès à la base de données de dev mon tuteur a pur faire de son côté la mise a jour.
                            Il a donc update la base de donnée avec le script SQL que j'ai fourni au préalable dans le dépot GitLab du projet.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <h5 class="card-header">Test</h5>
                        <img src="https://i.imageupload.app/e6ea1eb4c0eaee99072f.png" style="width: 100%" class="img-fluid mx-auto d-block w-55" alt="Init base">
                        <div class="card-body">
                            <p class="card-text">Après l'update de la base de données je remarque que mes modifications on bien été pris en compte et que tout fonctionne.</p>
                            <br>
                            <p class="card-text">Remarque : Le déploiement sur la dev permet au testeur de vérifié que tout est en règle et que tout fonctionne correctement.
                            Une fois l'application testé elle passe en pré-prod et après si elle est validée elle passe en production international. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>