from django.shortcuts import render

# dictionnaire indiquant les titres des pages et leurs types
titres = {
    'maths': {
        'calcul': [
            'Python pour le calcul de fractions',
            'Savoir calculer avec les puissances',
            'Savoir calculer avec les racines',
            'Comment simplifier des fractions avec racines',
            'Découvrir les valeurs absolues',
            'Trouver une valeur approchée',
            'Déterminer si un nombre est premier avec Python',
            'Trouver les diviseurs d\'un nombre avec Python',
            'Connaître les ensembles de nombres',
            'Savoir manipuler les intervalles',
            'Créer simplement un document avec LaTeX'
            ],
        'calcul_litteral': [
            'Ecrire des équations avec Word',
            'Apprendre à factoriser une expression',
            'Utiliser les identités remarquables',
            'Comment développer une expression',
            'Résoudre une équation de degré 1 avec Python',
            'Résoudre une équation de degré 2 avec Python',
            'Résoudre une équation quelconque avec Python',
            'Résoudre une inéquation de degré 1',
            'Equation/inéquation avec valeur absolue',
            'Comprendre la différence entre images et antécédents',
            'Fonctions affines'
            ],
        'statistiques': [
            'Découvrir les statistiques sur un exemple',
            'Les statistiques descriptives',
            'TP - Analyse de données en statistiques descriptives',
            'Savoir retrouver les quartiles manuellement',
            'Pourcentage et évolution d\'une valeur',
            'Connaître les règles de probabilité',
            'TP - Loi des grands nombres avec Python',
            ]
    },
    'nsi': {
        'internet': [
            'Internet un modèle en couches',
            'Un réseau mondial',
            'Adresse IP',
            'Le DNS',
            'Liens hypertextes',
            'Comprendre le Web',
            'Structure des pages Web',
            'Réseaux peer-to-peer',
            'Moteurs de recherche',
            'Sécurité sur le Web',
            'Les dangers des réseaux sociaux',
            'Les traces numériques',
            'Modéliser les réseaux sociaux en Python',
            'Créer un site Web avec HTML/CSS',
            'Bootstrap',
            'Découvrir JavaScript'
            ],
        'architecture': [
            'Architecture de Von Neumann',
            'Système Linux',
            'TP - Utiliser le Terminal sur Linux',
            'Concurrence de processus',
            'Adresse IP',
            'Le routage IP',
            'Sécurisation des transmissions',
            'TP - Projet de cryptographie',
            'TP - Attaque brute force',
            'L\'Internet des objets',
            'TP - Système informatique embarqué',
            'Photographie numérique',
            'TP - Photographie numérique',
            'TP - Traitement d\'image avec Gimp',
            'Les coordonnées géographiques',
            'TP - Triangulation',
            'TP - Géolocalisation'
            ],
        'donnees_structurees': [
            'Les formats de fichiers',
            'Lecture/écriture d\'un fichier distant',
            'Introduction aux bases de données',
            'Le modèle relationnel',
            'Le langage SQL',
            'TP - Python et SQLite',
            'Le Cloud computing',
            'Les piles',
            'Les files',
            'Les listes',
            'Les données en arbres',
            'Les données en graphes',
            'Modéliser les graphes en Python'
            ]
    },
    'python': {
        'debuter' : [
            'Découvrir Python',
            'Découvrir les variables',
            'Les variables en détail',
            'Les chaînes de caractères en détail',
            'Les conditions en détail',
            'Les boucles en détail',
            'Les fonctions en détail',
            'TP - Dessiner avec Python',
            'TP - Jeu du pendu, niveau 1',
            'test'
            ],
        'progresser': [
            'Environnement de développement',
            'Construire un code propre',
            'Les listes',
            'Les dictionnaires',
            'La portée des variables',
            'Créer un quiz',
            'Un jeu de devinette',
            'Gérer un accès avec mot de passe',
            'Tracer des courbes avec Python',
            'Exercice',
            'Convertisseur binaire',
            'Jeu de morpion',
            'Bataille navale',
            'Jeu du pendu, niveau 2'
            ],
        'avance': [
            'La modularité dans les projets',
            'Paradigme de programmation',
            'Programmation fonctionnelle',
            'Programmation orientée objet',
            'Principes de la programmation objet',
            'Algorithmique',
            'Test et validation',
            'Interface graphique',
            'Créer un site Web avec Django',
            'Créer un package avec Poetry',
            'TP - Jeu de rôles',
            'TP - Le jeu de la vie',
            'TP - Séquence de génome',
            'TP - Jeu du pendu, niveau 3',
            'Le versioning avec Git'
            ]
    }
}

def creerIndex(request):
    """Affiche la page d'accueil"""
    context = {}
    return render(request, 'index.html', context)


def testNotebook(request):
    context={}
    return render(request, 'bonjour.ipynb', context)


def afficherPage(request, niveau, chapitre, id):
    """Affiche une page de cours"""
    global titres
    context = {'titre': titres[niveau][chapitre][id]}
    context['niveau'] = niveau 
    context['chapitre'] = chapitre 
    context['id'] = id
    i_max = len(titres[niveau][chapitre]) - 1
    context['i_max'] = i_max
    context['i_moins'] = id - 1
    context['i_plus'] = id + 1
    competence = 'competence' + str(id)
    return render(request, 'sources/' + niveau + '/' + chapitre + '/' + competence + '.html', context)


def afficherQuiz(request, niveau, chapitre, id):
    """Affiche une page de quiz de 10 questions rassemblees"""
    context = {
        'niveau': niveau,
        'chapitre': chapitre,
        'id': id
    }
    return render(request, 'quizJS.html', context)


def recupererNiveau(niveau):
    """Renvoie tous les titres relatifs au niveau et pour chaque chapitre du niveau
    target : afficherTableMatieres"""
    global titres 
    for cle, valeur in titres.items():
        if cle == niveau:
            return valeur


def afficherPresentation(request, niveau):
    """Affiche une page de table de matières du niveau"""
    context = recupererNiveau(niveau)
    return render(request, 'sources/' + niveau + '/' + niveau + '.html', context)

def afficherModeleQuiz(request, niveau, chapitre, id):
    """Affiche une page de quiz de 10 questions rassemblees"""
    context = {'pageQuiz': 'home/quiz/quiz' + str(id) + '.js'}
    return render(request, 'modeleQuiz.html', context)

def afficherPartage(request):
    """Affiche la page de partage de documents en ligne"""
    context = {}
    return render(request, 'modelePartage.html', context)

def afficherConnexion(request):
    """Affiche la page de connexion"""
    context = {}
    return render(request, 'connexion.html', context)
