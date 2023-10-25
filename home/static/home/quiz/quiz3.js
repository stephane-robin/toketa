const titreQcm = "Les conditions";

var questionsData = [
	{
		question: '<p>Une condition sert à ...</p>',
		options:['uniquement changer le type d\'une variable', 'faire ressortir les erreurs d\'un code', 'demander au programme de prendre une décision'],
		correctIndex: 2,
		commentaire: 'Les décisions prises par le programme ont été imaginées à l\'avance par le développeur.'
	},
	{
		question: '<p>Quel est l\'affichage lors de l\'exécution du code suivant :</p>\
<pre><code>nom = "Laurine"<br/>\
if nom == "Alice":<br/>\
  print("bonjour")<br/>\
else:<br/>\
  print("au revoir")</code></pre>',
		options:['bonjour', 'au revoir', 'SyntaxError'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: "<p>quel est l'affichage lors de l'exécution du code print(12 &lt 5) ...</p>",
		options:['False', 'True', '7'],
		correctIndex: 0,
		commentaire: 'Un opérateur sert à effectuer une comparaison de valeurs pour renvoyer True ou False.'
	},
	{
		question: '<p>Quel est l\'affichage lors de l\'exécution du code</p>\
<pre><code>nom = "May"<br/>\
print(nom == "Benjamine")</code></pre>',
		options:['True', 'False', 'Benjamine'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: '<p><p>quel est l\'affichage lors de l\'exécution du code suivant :</p>\
<pre><code>prenom = "Morgane"<br/>\
print(prenom != "Kelsey")</code></pre>',
		options:['NameError : prenom is not defined', 'True', 'False'],
		correctIndex: 1,
		commentaire: 'C\'est vrai que Morgane est différente de Kelsey.'
	},
	{
		question: "<p>quelle est la valeur de x à l'exécution du code suivant :</p>\
<pre><code>a = 4<br/>\
b = 7<br/>\
if a > 0 and a - b > 0:<br/>\
  x = 10<br/>\
else:<br/>\
  x = 20</code></pre>",
		options:['10', '20', '0'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: '<p>quel est l\'affichage lors de l\'exécution du code suivant :</p>\
<pre><code>a = 11<br/>\
b = 8<br/>\
if a &lt 0 or a - b > 0:<br/>\
  print("ok")<br/>\
else:<br/>\
  print("ko")</code></pre>',
		options:['ok', 'ko', 'None'],
		correctIndex: 0,
		commentaire: ''
	},
	{
		question: '<p>Le code suivant va-t-il afficher "bonjour" ?</p>\
<pre><code>nom = "Gabriel"<br/>\
if nom == "Alice":<br/>\
  print("accès autorisé")<br/>\
print("bonjour")</code></pre>',
		options:['non', 'oui', 'le code affiche SyntaxError'],
		correctIndex: 1,
		commentaire: ''
	},
	{
		question: '<p>Le code suivant va-t-il afficher "accès autorisé" ?</p>\
<pre><code>nom = "Gabriel"<br/>\
if nom == "Alice":<br/>\
  print("accès autorisé")<br/>\
print("bonjour")</code></pre>',
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


