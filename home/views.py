from django.shortcuts import render

# dictionnaire regroupant les pages du site
titres = {
    'maths': {
        'calcul': {
            'Python pour le calcul de fractions': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Savoir calculer avec les puissances': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'Savoir calculer avec les racines': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Comment simplifier des fractions avec racines': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Découvrir les valeurs absolues': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'Trouver une valeur approchée': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'Déterminer si un nombre est premier avec Python': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            },
            'Trouver les diviseurs d\'un nombre avec Python': {
                'id_chapitre': 7,
                'sections': [
                    'Cours'
                ]
            },
            'Connaître les ensembles de nombres': {
                'id_chapitre': 8,
                'sections': [
                    'Cours'
                ]
            },
            'Savoir manipuler les intervalles': {
                'id_chapitre': 9,
                'sections': [
                    'Cours'
                ]
            },
            'Créer simplement un document avec LaTeX': {
                'id_chapitre': 10,
                'sections': [
                    'Cours'
                ]
            }
        },
        'calcul_litteral': {
            'Ecrire des équations avec Word': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Apprendre à factoriser une expression': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'Utiliser les identités remarquables': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Comment développer une expression': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Résoudre une équation de degré 1 avec Python': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'Résoudre une équation de degré 2 avec Python': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'Résoudre une équation quelconque avec Python': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            },
            'Résoudre une inéquation de degré 1': {
                'id_chapitre': 7,
                'sections': [
                    'Cours'
                ]
            },
            'Equation/inéquation avec valeur absolue': {
                'id_chapitre': 8,
                'sections': [
                    'Cours'
                ]
            },
            'Comprendre la différence entre images et antécédents': {
                'id_chapitre': 9,
                'sections': [
                    'Cours'
                ]
            },
            'Fonctions affines': {
                'id_chapitre': 10,
                'sections': [
                    'Cours'
                ]
            }
        },
        'statistiques': {
            'Découvrir les statistiques sur un exemple': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Les statistiques descriptives': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Analyse de données en statistiques descriptives': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Savoir retrouver les quartiles manuellement': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Pourcentage et évolution d\'une valeur': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'Connaître les règles de probabilité': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Loi des grands nombres avec Python': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            }
        }
    },
    'nsi': {
        'internet': {
            'Internet un modèle en couches': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Un réseau mondial': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'Adresse IP': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Le DNS': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Liens hypertextes': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'Comprendre le Web': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'Structure des pages Web': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            },
            'Réseaux peer-to-peer': {
                'id_chapitre': 7,
                'sections': [
                    'Cours'
                ]
            },
            'Moteurs de recherche': {
                'id_chapitre': 8,
                'sections': [
                    'Cours'
                ]
            },
            'Sécurité sur le Web': {
                'id_chapitre': 9,
                'sections': [
                    'Cours'
                ]
            },
            'Les dangers des réseaux sociaux': {
                'id_chapitre': 10,
                'sections': [
                    'Cours'
                ]
            },
            'Les traces numériques': {
                'id_chapitre': 11,
                'sections': [
                    'Cours'
                ]
            },
            'Modéliser les réseaux sociaux en Python': {
                'id_chapitre': 12,
                'sections': [
                    'Cours'
                ]
            },
            'Créer un site Web avec HTML/CSS': {
                'id_chapitre': 13,
                'sections': [
                    'Cours'
                ]
            },
            'Bootstrap': {
                'id_chapitre': 14,
                'sections': [
                    'Cours'
                ]
            },
            'Découvrir JavaScript': {
                'id_chapitre': 15,
                'sections': [
                    'Cours'
                ]
            }
        },
        'architecture': {
            'Architecture de Von Neumann': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Système Linux': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Utiliser le Terminal sur Linux': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Concurrence de processus': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Adresse IP': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'Le routage IP': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'Sécurisation des transmissions': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Projet de cryptographie': {
                'id_chapitre': 7,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Attaque brute force': {
                'id_chapitre': 8,
                'sections': [
                    'Cours'
                ]
            },
            'L\'Internet des objets': {
                'id_chapitre': 9,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Système informatique embarqué': {
                'id_chapitre': 10,
                'sections': [
                    'Cours'
                ]
            },
            'Photographie numérique': {
                'id_chapitre': 11,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Photographie numérique': {
                'id_chapitre': 12,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Traitement d\'image avec Gimp': {
                'id_chapitre': 13,
                'sections': [
                    'Cours'
                ]
            },
            'Les coordonnées géographiques': {
                'id_chapitre': 14,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Triangulation': {
                'id_chapitre': 15,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Géolocalisation': {
                'id_chapitre': 16,
                'sections': [
                    'Cours'
                ]
            }
        },
        'donnees_structurees': {
            'Les formats de fichiers': {
                'id_chapitre': 0,
                'sections': [
                    'Cours'
                ]
            },
            'Lecture/écriture d\'un fichier distant': {
                'id_chapitre': 1,
                'sections': [
                    'Cours'
                ]
            },
            'Introduction aux bases de données': {
                'id_chapitre': 2,
                'sections': [
                    'Cours'
                ]
            },
            'Le modèle relationnel': {
                'id_chapitre': 3,
                'sections': [
                    'Cours'
                ]
            },
            'Le langage SQL': {
                'id_chapitre': 4,
                'sections': [
                    'Cours'
                ]
            },
            'TP - Python et SQLite': {
                'id_chapitre': 5,
                'sections': [
                    'Cours'
                ]
            },
            'Le Cloud computing': {
                'id_chapitre': 6,
                'sections': [
                    'Cours'
                ]
            },
            'Les piles': {
                'id_chapitre': 7,
                'sections': [
                    'Cours'
                ]
            },
            'Les files': {
                'id_chapitre': 8,
                'sections': [
                    'Cours'
                ]
            },
            'Les listes': {
                'id_chapitre': 9,
                'sections': [
                    'Cours'
                ]
            },
            'Les données en arbres': {
                'id_chapitre': 10,
                'sections': [
                    'Cours'
                ]
            },
            'Les données en graphes': {
                'id_chapitre': 11,
                'sections': [
                    'Cours'
                ]
            },
            'Modéliser les graphes en Python': {
                'id_chapitre': 12,
                'sections': [
                    'Cours'
                ]
            }
        }
    },
    'python': {
        'debuter' : {
            'Découvrir Python':{
                'id_chapitre': 0,
                'sections': [
                    'Un langage interprété',
                    'Structure du code Python',
                    'Premiers pas avec Python'  
                ]
            },
            'Les variables': {
                'id_chapitre': 1,
                'sections': [
                    'Découvrir les variables',
                    'Définir une variable',
                    'Utiliser une variable', 
                    'Les types de variables',
                    'TP - inverser deux variables',
                    'Entraînement'
                ]
            },
            'Interaction avec l\'utilisateur':{
                'id_chapitre': 2,
                'sections': [
                    'Afficher du contenu',
                    'Demander une saisie clavier',
                    'Entraînement'
                ]
            },
            'Les conditions': {
                'id_chapitre': 3,
                'sections': [
                    'Découvrir les conditions',
                    'Structure d\'une condition',
                    'Les booléens',
                    'Structure d\'une condition',
                    'Messages d\'erreur',
                    'Entraînement'
                ]
            },
            'Le type str': {
                'id_chapitre': 4,
                'sections': [
                    'Une chaîne de caractères',
                    'La concaténation',
                    'Méthodes utiles',
                    'Extraire une sous-chaîne'
                ]
            },
            'Les boucles': {
                'id_chapitre': 5,
                'sections': [
                    'Répéter avec la boucle for',
                    'Structure d\'une boucle for',
                    'Parcourir une chaîne',
                    'Découvrir la boucle while',
                    'Structure d\'une boucle while',
                    'Boucle while pour répéter',
                    'TP - la méthode replace()',
                    'TP - tester un palindrome',
                    'TP - la phrase glissante',
                    'Entraînement'
                ]
            },
            'Les fonctions': {
                'id_chapitre': 6,
                'sections': [
                    'Définir une fonction',
                    'Appeler une fonction',
                    'return ou print',
                    'Entraînement'
                ]
            },
            'Les bibliothèques': {
                'id_chapitre': 7,
                'sections': [
                    'Bibliothèque random',
                    'Bibliothèque time'
                ]
            },
            'Travaux Pratiques': {
                'id_chapitre': 8,
                'sections': [
                    'Dessiner avec Python',
                    'Jeu du pendu, niveau 1'
                ]
            }
        },
        'progresser': {
            'Environnement de développement': {
                'id_chapitre': 0,
                'sections': [
                    'Choisir son outil',
                    'Essayer VS Code'
                ]
            },
            'Construire un code propre': {
                'id_chapitre': 1,
                'sections': [
                    ''
                ]
            },
            'Le type list': {
                'id_chapitre': 2,
                'sections': [
                    ''
                ]
            },
            'Le type dict': {
                'id_chapitre': 3,
                'sections': [
                    ''
                ]
            },
            'La portée des variables': {
                'id_chapitre': 4,
                'sections': [
                    ''
                ]
            },
            'Créer un quiz': {
                'id_chapitre': 5,
                'sections': [
                    ''
                ]
            },
            'Un jeu de devinette': {
                'id_chapitre': 6,
                'sections': [
                    ''
                ]
            },
            'Gérer un accès avec mot de passe': {
                'id_chapitre': 7,
                'sections': [
                    ''
                ]
            },
            'Tracer des courbes avec Python': {
                'id_chapitre': 8,
                'sections': [
                    ''
                ]
            },
            'Exercice': {
                'id_chapitre': 9,
                'sections': [
                    ''
                ]
            },
            'Convertisseur binaire': {
                'id_chapitre': 10,
                'sections': [
                    ''
                ]
            },
            'Jeu de morpion': {
                'id_chapitre': 11,
                'sections': [
                    ''
                ]
            },
            'Bataille navale': {
                'id_chapitre': 12,
                'sections': [
                    ''
                ]
            },
            'Jeu du pendu, niveau 2': {
                'id_chapitre': 13,
                'sections': [
                    ''
                ]
            }
        },
        'avance': {
            'La modularité dans les projets': {
                'id_chapitre': 0,
                'sections': [
                    ''
                ]
            },
            'Paradigme de programmation': {
                'id_chapitre': 1,
                'sections': [
                    ''
                ]
            },
            'Programmation fonctionnelle': {
                'id_chapitre': 2,
                'sections': [
                    ''
                ]
            },
            'Programmation orientée objet': {
                'id_chapitre': 3,
                'sections': [
                    ''
                ]
            },
            'Principes de la programmation objet': {
                'id_chapitre': 4,
                'sections': [
                    ''
                ]
            },
            'Algorithmique': {
                'id_chapitre': 5,
                'sections': [
                    ''
                ]
            },
            'Test et validation': {
                'id_chapitre': 6,
                'sections': [
                    ''
                ]
            },
            'Interface graphique': {
                'id_chapitre': 7,
                'sections': [
                    ''
                ]
            },
            'Créer un site Web avec Django': {
                'id_chapitre': 8,
                'sections': [
                    ''
                ]
            },
            'Créer un package avec Poetry': {
                'id_chapitre': 9,
                'sections': [
                    ''
                ]
            },
            'TP - Jeu de rôles': {
                'id_chapitre': 10,
                'sections': [
                    ''
                ]
            },
            'TP - Le jeu de la vie': {
                'id_chapitre': 11,
                'sections': [
                    ''
                ]
            },
            'TP - Séquence de génome': {
                'id_chapitre': 12,
                'sections': [
                    ''
                ]
            },
            'TP - Jeu du pendu, niveau 3': {
                'id_chapitre': 13,
                'sections': [
                    ''
                ]
            },
            'Le versioning avec Git': {
                'id_chapitre': 14,
                'sections': [
                    ''
                ]
            }
        }
    }
}


def creerIndex(request):
    """Affiche la page d'accueil"""
    context = {}
    return render(request, 'index.html', context)


def calculerNbSections(cours: str, niveau: str, chapitre: str) -> int:
    """Calcule le nombre de sections dans le chapitre courant
    dependency : afficherPage"""
    global titres
    return len(titres[cours][niveau][chapitre]['sections'])


def trouverNomChapitre(cours: str, niveau: str, id_chapitre: int) -> str:
    """affiche le nom du chapitre courant
    dependency: afficherPage"""
    global titres
    for cle, valeur in titres[cours][niveau].items():
        if valeur['id_chapitre'] == id_chapitre:
            return cle

def trouverNomSection(cours: str, niveau: str, chapitre: str, id_section: int) -> str:
    """affiche le nom de la section courante
    dependency: afficherPage"""
    global titres
    return titres[cours][niveau][chapitre]['sections'][id_section]

    
def afficherPage(request: object, cours: str, niveau: str, id_chapitre: int, id_section: int) -> object:
    """Affiche une page de cours"""
    global titres   
    chapitre = trouverNomChapitre(cours, niveau, id_chapitre)    
    context = {}
    context['cours'] = cours 
    context['niveau'] = niveau 
    context['id_chapitre'] = id_chapitre
    context['id_section'] = id_section
    context['chapitre'] = chapitre
    context['section'] = trouverNomSection(cours, niveau, chapitre, id_section)
    context['listeSections'] = titres[cours][niveau][chapitre]['sections']
    context['i_max'] = calculerNbSections(cours, niveau, chapitre) - 1
    context['i_moins'] = id_section - 1
    context['i_plus'] = id_section + 1
    return render(request, f'sources/{cours}/{niveau}/competence{id_chapitre}-{id_section}.html', context)


def afficherQuiz(request, niveau, chapitre, id):
    """Affiche une page de quiz de 10 questions rassemblees"""
    context = {
        'niveau': niveau,
        'chapitre': chapitre,
        'id': id
    }
    return render(request, 'quizJS.html', context)


def afficherPresentation(request, cours):
    """Affiche une page de presentation du cours contenant une table de matieres des chapitres pour
    chaque niveau"""
    global titres
    context = {}
    for cle, valeur in titres[cours].items():
        listeChapitres = []
        for c in valeur.keys():
            listeChapitres.append(c)  
        context[cle] = listeChapitres
    return render(request, f'sources/{cours}/{cours}.html', context)


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


def afficherSandbox(request):
    """affiche une page contenant une sandbox Python"""
    context = {}
    return render(request, 'sandbox.html', context)
