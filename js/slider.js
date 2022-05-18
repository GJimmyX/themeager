/* JS pour le slider de la page d'accueil */

var index = 0;
sliding(index);

function slidingCurrent(n) {
    sliding(index += n);
}