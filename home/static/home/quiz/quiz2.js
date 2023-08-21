const titreQcm = "Les chaînes";

var questionsData = [
	{
		question: 'le code suivant print("5" + "3") affiche : ...',
		options:['8', '5+3', '53'],
		correctIndex: 2,
		commentaire: 'Les chiffres sont ici considérés comme des caratères qu\'on concatène.'
	},
	{
		question: 'le code suivant print("5 + 3") affiche ...',
		options:['5 + 3', '8', '53'],
		correctIndex: 0,
		commentaire: 'Les chiffres sont ici considérés comme des caractères qu\'on concatène.'
	},
	{
		question: "le code suivant print(5 + 3) affiche ...",
		options:['8', '53', '5 + 3'],
		correctIndex: 0,
		commentaire: 'Les chiffres sont ici considérés comme des nombres avec lesquels on effectue des calculs.'
	},
	{
		question: 'dans le code suivant age = input("quel est ton âge ?") la variable age a pour type ...',
		options:['int', 'str', 'None'],
		correctIndex: 1,
		commentaire: 'Les valeurs saisies sont toujours de type string.'
	},
	{
		question: 'l\'instruction print("3.65".isnumeric() affiche ...',
		options:['False', 'True', 'SyntaxError: unexpected EOF while parsing'],
		correctIndex: 0,
		commentaire: 'isnumeric() teste les valeurs entières, pas les nombres réels.'
	},
	{
		question: "pour sauter une ligne dans une chaîne de caractères, il faut utiliser ...",
		options:['\\l', '\\t', '\\n'],
		correctIndex: 2,
		commentaire: '\\n comme pour nextline.'
	},
	{
		question: 'ville = "Amsterdam", pour afficher Amster il faut exécuter ...',
		options:['ville[:6]', 'ville[0:6[', 'ville[1:5]'],
		correctIndex: 0,
		commentaire: 'Le 1er indice est 0, c\'est au niveau du 2ème indice qu\'on coupe la sous-chaîne.'
	},
	{
		question: 'nom = "Duchêne"	prenom = "Anatole"	pour afficher "Antoine Duchêne" en utilisant les variables ci-dessus, il faut écrire ...',
		options:['print(prenom nom)', 'print(prenom + " " + nom)', 'print(prenom.nom)'],
		correctIndex: 1,
		commentaire: 'On utilise dans ce cas la concaténation +.'
	},
	{
		question: 'l\'exécution du code suivant prenom = "Alexi" 	print(f"{prenom}s est un élève sérieux")	affiche ...',
		options:['Alexis est un élève sérieux', 'Alexi est un élève sérieux', 'SyntaxError: f-string: single \'}\' is not allowed'],
		correctIndex: 0,
		commentaire: 'L\'affichage avec formatage permet de récupérer la valeur de la variable prenom.'
	},
	{
		question: "pour stocker une valeur entière saisie par l'utilisateur dans une variable score, je dois écrire le code ... ",
		options:['score = input("quel est votre meilleur score ?")', 'score.input("quel est votre meilleur score ?")', 'score = int(input("quel est votre meilleur score ?"))'],
		correctIndex: 2,
		commentaire: 'La valeur stockée doit rester entière.'
	}
];


