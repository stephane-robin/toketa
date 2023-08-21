const titreQcm = "Les variables";


var questionsData = [
	{
		question: 'Les guillemets "" servent à définir la valeur d\'une variable de type chaîne de caractères ...',
		options:['vrai', 'faux', 'il faut au contraire enlever les guillemets dans le cas d\'une chaîne de caractères'],
		correctIndex: 0,
		commentaire: 'Les définissent la valeur d\'une variable sous forme de texte.'
	},
	{
		question: 'L\'instruction print("prenom") affiche ...',
		options:['prenom', 'prénom', 'la valeur de la variable prenom'],
		correctIndex: 0,
		commentaire: 'Le code affiche exactement ce qui est écrit entre les guillemets.'
	},
	{
		question: "Pour connaître le type de la variable annee il faut exécuter l'instruction ...",
		options:['print(type(annee))', 'print(annee.type())', 'print=type(annee)'],
		correctIndex: 0,
		commentaire: ''
	},
	{
		question: "L'opérateur % sert à ...",
		options:['rajouter des commentaires dans un code', 'calculer la puissance d\'un nombre par un autre', 'calculer le reste de division d\'un nombre par un autre'],
		correctIndex: 2,
		commentaire: 'L\'opérateur % appelé modulo est souvent utilisé. Il calcule le reste de division.'
	},
	{
		question: 'Le code suivant x = 2\ny = 3\nx = y\ny = x sert à inverser les valeurs des variables x et y ...',
		options:['vrai', 'faux', 'il permet en fait de rajouter x à y'],
		correctIndex: 1,
		commentaire: 'Il est nécessaire d\'introduire une variable temporaire pour ne pas perdre la valeur de <strong>x</strong>.'
	},
	{
		question: "Quels sont les types de variables existant en Python ...",
		options:['int, float, text, varchar', 'int, float, str, bool', 'None, real, decimal, text'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: 'le code suivant print("nom" + "prenom") affiche ...',
		options:['nom prenom', 'la valeur de la variable nom suivie de la valeur de la variable prenom', 'nomprenom'],
		correctIndex: 2,
		commentaire: 'On ne trouve aucun espace entre les guillemets, donc nom et preenom seront affichés collés.'
	},
	{
		question: 'si l\'on dispose des variables nom = "Pierre" et age = 17, qu\'obtient-on lorsqu\'on exécute le code suivant print(nom + age) ...',
		options:['nom + age', 'Pierre17', 'un message d\'erreur'],
		correctIndex: 2,
		commentaire: 'On ne peut pas concaténer des variables de types différents.'
	},
	{
		question: 'si l\'on dispose des variables nom = "Pierre" et age = "17", qu\'obtient-on lorsqu\'on exécute le code suivant print(nom + age) ...',
		options:['nom + age', 'Pierre17', 'Pierre 17'],
		correctIndex: 1,
		commentaire: 'Il n\'y a aucun espace à l\'intérieur des guillemets.'
	},
	{
		question: 'l\'instruction "\n" permet de ... ',
		options:['sauter une ligne', 'créer une tabulation', 'n\'existe pas en Python'],
		correctIndex: 0,
		commentaire: 'L\'instruction doit être contenue entre des guillements pour fonctionner.'
	}
];


