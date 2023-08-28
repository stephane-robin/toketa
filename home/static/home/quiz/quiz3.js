const titreQcm = "Les conditions";

var questionsData = [
	{
		question: '<p style="color:red;">Une condition sert à ...</p>',
		options:['uniquement changer le type d\'une variable', 'faire ressortir les erreurs d\'un code', 'demander au programme de prendre une décision'],
		correctIndex: 2,
		commentaire: 'Les décisions prises par le programme ont été imaginées à l\'avance par le développeur.'
	},
	{
		question: '<p>Quel est l\'affichage lors de l\'exécution du code suivant :	</p><pre><code class="language-python">nom = "Laurine"</code></pre><p>	if nom == "Alice":	print("bonjour")	else:	print("au revoir") ...</p>',
		options:['bonjour', 'au revoir', 'SyntaxError'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: "quel est l'affichage lors de l'exécution du code print(12 &lt 5) ...",
		options:['False', 'True', '7'],
		correctIndex: 0,
		commentaire: 'Un opérateur sert à effectuer une comparaison de valeurs pour renvoyer True ou False.'
	},
	{
		question: 'Quel est l\'affichage lors de l\'exécution du code nom = "May"	print(nom == "Benjamine") ...',
		options:['True', 'False', 'Benjamine'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: '<p>quel est l\'affichage lors de l\'exécution du code prenom = "Morgane"	print(prenom != "Kelsey") ...',
		options:['NameError : prenom is not defined', 'True', 'False'],
		correctIndex: 1,
		commentaire: 'C\'est vrai que Morgane est différente de Kelsey.'
	},
	{
		question: "quelle est la valeur de x à l'exécution du code suivant a = 4	b = 7	if a > 0 and a - b > 0:	x = 10	else:	x = 20 ...",
		options:['10', '20', '0'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: 'quel est l\'affichage lors de l\'exécution du code a = 11	b = 8	if a &lt 0 or a - b > 0:	print("ok")	else:	print("ko") ...',
		options:['ok', 'ko', 'None'],
		correctIndex: 0,
		commentaire: ''
	},
	{
		question: 'le code suivant va-t-il afficher "bonjour" 	nom = "Gabriel"	if nom == "Alice":	print("accès autorisé")	print("bonjour") ...',
		options:['non', 'oui', 'le code affiche SyntaxError'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: 'Le code suivant va-t-il afficher "accès autorisé" :	nom = "Gabriel"	if nom == "Alice":	print("accès autorisé")	print("bonjour") ...',
		options:['oui', 'non', 'le code affiche SyntaxError'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: "<p>l'instruction elif est identique à else if ... ",
		options:['vrai', 'faux', 'uniquement dans le cas des boucles imbriquées'],
		correctIndex: 0,
		commentaire: ''
	}
];


