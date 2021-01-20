<p>
<b>Rappel</b>

<br /><br />
L'algorithmique distingue trois sortes de param�tres selon qu'ils sont <b>donn�es</b>, <b>r�sultats</b> ou <b>donn�es-r�sultats</b>.

<br /><br />
Il n'y a pas de stricte �quivalence entre le passage des param�tres en algorithmique et sa traduction en C/C++ (contrairement � certains langages, comme Ada 95 par exemple).

<br /><br />
Dans cet exercice, nous montrerons comment le passage des param�tres <b>par pointeur</b> peut traduire le passage des param�tres <b>donn�es</b> ou <b>donn�es-r�sultats</b> de l'algorithmique (la notion de  <b>param�tre-r�sultat</b> est intraduisible en C/C++). 

<br /><br />
<b>Remarque pr�liminaire</b>

<br /><br />
Il est conseill� de mettre au point et de tester les diff�rentes �tapes du programme demand� au fur et � mesure de leur d�veloppement.

J'ai plac� les corrig�s des diff�rentes �tapes dans des fichiers distincts pour que vous puissiez les consulter s�par�ment.

Vous pouvez n'utiliser qu'un seul fichier que vous compl�terez au fur et � mesure de votre progression. 

<br /><br />
Dans l'espace de noms anonyme du fichier <tt>ParamPtr.cxx</tt>, �crire la fonction <tt>ParamPtr()</tt> qui teste diff�rentes possibilit�s d'utilisation de pointeurs comme param�tres <b>formels</b> : 

</p>

<ol><li><p>
param�tre donn�e de type <tt>int</tt> : <tt>ParamPtr_a.cxx</tt>

</p>

<ul><li><p>
�crire la fonction <tt>Proc1()</tt> qui a pour param�tre <b>donn�e</b> un pointeur d'entier.

Elle affiche l'entier, suivi d'une tabulation.

</p></li><li><p>
dans la fonction <tt>ParamPtr()</tt>, appeler <tt>Proc1()</tt> en lui passant un entier pr�alablement d�clar�, puis successivement les trois premiers �l�ments d'un tableau d'entiers pr�alablement d�clar� et initialis� (agr�gat), en utilisant diff�rentes �critures : identificateur du tableau, notation indic�e, arithm�tique des pointeurs.  

</p></li></ul>

</li><li><p>
param�tres donn�es d�finissant une "tranche" de tableau " : <tt>ParamPtr_b.cxx</tt>

</p>

<ul><li><p>
�crire la fonction <tt>Proc2()</tt> qui a pour param�tres <b>donn�es</b> <b>deux</b> pointeurs de <tt>string</tt>s suppos�s pointer sur deux �l�ments d'un <b>m�me</b> tableau.

Elle affiche toutes les cha�nes de ce tableau dans l'intervalle <b>semi-ouvert</b> d�fini par ces deux pointeurs, s�par�es par un espace, puis passe � la ligne suivante.

</p></li><li><p>
dans la fonction <tt>ParamPtr()</tt>, d�clarer et initialiser par un agr�gat un tableau de 4 cha�nes (par exemple), puis appeler <tt>Proc2()</tt> en lui passant successivement :
</p>

<ol><li><p>
la totalit� du tableau,

</p></li><li><p>
l'intervalle entre les �l�ments de rang <tt>1</tt> (inclus) et <tt>3</tt> (exclus)

</p></li><li><p>
un intervalle vide.
</p></li></ol>

</li><li><p>
dans la fonction <tt>ParamPtr()</tt>, d�clarer et initialiser une cha�ne et appeler la fonction <tt>Proc2()</tt> pour qu'elle affiche cette cha�ne (pas facile !)
  
</p></li></ul>

</li><li><p>
param�tres r�sultats : <tt>ParamPtr_c.cxx</tt>

</p>

<ul><li><p>
�crire la fonction <tt>Proc3()</tt> qui a pour param�tres <b>r�sultats</b> un pointeur de <tt>string</tt> et un pointeur sur un indice dans cette cha�ne.

Elle transforme le caract�re point� en majuscule (fonction standard <tt>toupper()</tt>, du fichier <tt>&lt;cctype></tt>) et passe � l'indice suivant.

</p></li><li><p>

dans la fonction <tt>ParamPtr()</tt>, d�clarer et initialiser une cha�ne, l'afficher, puis, dans une boucle, la transformer en majuscules par des appels successifs � <tt>Proc3()</tt>.  

<br /><br />
Afficher ensuite la cha�ne ainsi modifi�e.

</p></li></ol>

</p></li></ul>


