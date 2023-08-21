const titreQcm = "Environnement Python";

var questionsData = [
	{
		question: "Python est un langage ...",
		options:['compilé', 'interprété', 'ni l\'un ni l\'autre'],
		correctIndex: 1,
		commentaire: 'Python est un langage interprété.'
	},
	{
		question: "Un langage compilé ...",
		options:['est plus rapide en général qu\'un langage interprété lors de l\'exécution du code', 'n\'utilise pas de code binaire', 's\'utilise uniquement pour faire des calculs'],
		correctIndex: 0,
		commentaire: 'Un langage compilé est généralement plus rapide.'
	},
	{
		question: 'l\'instruction print("Hello world") permet ...',
		options:['de démarrer une console Python', 'de stocker une première variable en mémoire', 'd\'afficher "Hello world"'],
		correctIndex: 2,
		commentaire: 'L\'instruction print permet d\'afficher du contenu.'
	},
	{
		question: "Un debugger permet ...",
		options:['de faciliter la recherche des erreurs de code en arrêtant le code étape par étape', 'd\'arrêter l\'exécution du code avant qu\'il ne soit trop tard', 'd\'exécuter un code'],
		correctIndex: 0,
		commentaire: 'Le debugger arrête l\'exécution du code étape par étape pour connaître l\'état des variables à chaque ligne décidée par le développeur.'
	},
	{
		question: "Une interface graphique est ...",
		options:['une façon d\'exécuter un code', 'ce que voit l\'utilisateur lorsqu\'il utilise une application', 'un outil mathématique permettant de tracer des graphes'],
		correctIndex: 1,
		commentaire: 'Une interface graphique réalise le lien entre une application et un utilisateur. Elle permet à celui-ci de visualiser le comportement de l\'application.'
	},
	{
		question: "Un éditeur de texte ...",
		options:['facilite la lecture du code', 'édite uniquement les erreurs de code', 'crée le code pour le programmeur'],
		correctIndex: 0,
		commentaire: 'Un éditeur de texte dispose en général de peu de fonctionnalités. Il se contente faciliter la lecture code.'
	},
	{
		question: "Un outil de versioning permet ...",
		options:['de connaître le nom de l\'auteur d\'un code', 'd\'exécuter un code en mode sans erreur', 'de stocker en mémoire plusieurs versions du code'],
		correctIndex: 2,
		commentaire: 'un outil de versioning conserve l\'historique des versions du code et permet de revenir en arrière si besoin.'
	},
	{
		question: "dans un environnement de développement intégré ...",
		options:['tous les réglages sont faits à l\'installation et tous les modules sont installés', 'il faut choisir les réglages, la version de Python à utiliser et installer certains modules', 'les réglages se font automatiquement lors de l\'exécution du code'],
		correctIndex: 1,
		commentaire: 'Un outil de développement offre de nombreuses possibilités dont le debuggage, mais le développeur doit installer lui-même les modules dont il a besoin, et doit choisir son interpréteur pour chaque projet.'
	},
	{
		question: "Un interpréteur Python en ligne ...",
		options:['permet d\'exécuter du code Python', 'permet d\'écrire uniquement du code Python avec un outil de coloration de code', 'sert uniquement à corriger le code pour le mettre aux normes du PEP8'],
		correctIndex: 0,
		commentaire: 'Un interpréteur Python en ligne utilise un serveur sur lequel est installée une version de Python afin d\'exécuter du ConvolverNode.'
	},
	{
		question: "le code source Python d'un fichier monFichier.py est d'abord transformé en une version monFichier.pyc pouvant être lue par l\'ordinateur avant d\'être exécuté : ",
		options:['vrai', 'vrai mais le fichier est renommé monFichier.c.py avant d\'être lu par l\'ordinateur', 'faux'],
		correctIndex: 2,
		commentaire: 'Python est un langage interprété. Il ne transforme pas son code source en une version compilée.'
	}
];

