<p>
<b>Rappel</b>

<br /><br />
L'algorithmique distingue trois sortes de paramètres selon qu'ils sont <b>données</b>, <b>résultats</b> ou <b>données-résultats</b>.

<br /><br />
Il n'y a pas de stricte équivalence entre le passage des paramètres en algorithmique et sa traduction en C/C++ (contrairement à certains langages, comme Ada 95 par exemple).

<br /><br />
Dans cet exercice, nous montrerons comment le passage des paramètres <b>par pointeur</b> peut traduire le passage des paramètres <b>données</b> ou <b>données-résultats</b> de l'algorithmique (la notion de  <b>paramètre-résultat</b> est intraduisible en C/C++). 

<br /><br />
<b>Remarque préliminaire</b>

<br /><br />
Il est conseillé de mettre au point et de tester les différentes étapes du programme demandé au fur et à mesure de leur développement.

J'ai placé les corrigés des différentes étapes dans des fichiers distincts pour que vous puissiez les consulter séparément.

Vous pouvez n'utiliser qu'un seul fichier que vous complèterez au fur et à mesure de votre progression. 

<br /><br />
Dans l'espace de noms anonyme du fichier <tt>ParamPtr.cxx</tt>, écrire la fonction <tt>ParamPtr()</tt> qui teste différentes possibilités d'utilisation de pointeurs comme paramètres <b>formels</b> : 

</p>

<ol><li><p>
paramètre donnée de type <tt>int</tt> : <tt>ParamPtr_a.cxx</tt>

</p>

<ul><li><p>
écrire la fonction <tt>Proc1()</tt> qui a pour paramètre <b>donnée</b> un pointeur d'entier.

Elle affiche l'entier, suivi d'une tabulation.

</p></li><li><p>
dans la fonction <tt>ParamPtr()</tt>, appeler <tt>Proc1()</tt> en lui passant un entier préalablement déclaré, puis successivement les trois premiers éléments d'un tableau d'entiers préalablement déclaré et initialisé (agrégat), en utilisant différentes écritures : identificateur du tableau, notation indicée, arithmétique des pointeurs.  

</p></li></ul>

</li><li><p>
paramètres données définissant une "tranche" de tableau " : <tt>ParamPtr_b.cxx</tt>

</p>

<ul><li><p>
écrire la fonction <tt>Proc2()</tt> qui a pour paramètres <b>données</b> <b>deux</b> pointeurs de <tt>string</tt>s supposés pointer sur deux éléments d'un <b>même</b> tableau.

Elle affiche toutes les chaînes de ce tableau dans l'intervalle <b>semi-ouvert</b> défini par ces deux pointeurs, séparées par un espace, puis passe à la ligne suivante.

</p></li><li><p>
dans la fonction <tt>ParamPtr()</tt>, déclarer et initialiser par un agrégat un tableau de 4 chaînes (par exemple), puis appeler <tt>Proc2()</tt> en lui passant successivement :
</p>

<ol><li><p>
la totalité du tableau,

</p></li><li><p>
l'intervalle entre les éléments de rang <tt>1</tt> (inclus) et <tt>3</tt> (exclus)

</p></li><li><p>
un intervalle vide.
</p></li></ol>

</li><li><p>
dans la fonction <tt>ParamPtr()</tt>, déclarer et initialiser une chaîne et appeler la fonction <tt>Proc2()</tt> pour qu'elle affiche cette chaîne (pas facile !)
  
</p></li></ul>

</li><li><p>
paramètres résultats : <tt>ParamPtr_c.cxx</tt>

</p>

<ul><li><p>
écrire la fonction <tt>Proc3()</tt> qui a pour paramètres <b>résultats</b> un pointeur de <tt>string</tt> et un pointeur sur un indice dans cette chaîne.

Elle transforme le caractère pointé en majuscule (fonction standard <tt>toupper()</tt>, du fichier <tt>&lt;cctype></tt>) et passe à l'indice suivant.

</p></li><li><p>

dans la fonction <tt>ParamPtr()</tt>, déclarer et initialiser une chaîne, l'afficher, puis, dans une boucle, la transformer en majuscules par des appels successifs à <tt>Proc3()</tt>.  

<br /><br />
Afficher ensuite la chaîne ainsi modifiée.

</p></li></ol>

</p></li></ul>


