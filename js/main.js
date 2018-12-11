var arrayLettere = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y"];
var arrayNumeri = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
var legaBasket = [];

//genero aun array di oggeti con 100 oggetti giocatori basket
for (var i = 0; i <= 100; i++) {
  nuovoGiocatore = {
    //ad ogni giocatore di basket vanno assciate
    //queste propietà
    //Codice giocatore univoco(formato da 3 lettere maiuscole
    //casuali e tre numeri)
    codiceUnivoco: generaCodice(arrayNumeri, arrayLettere),
    "puntiRealizzati": numeroRandom(2, 50),
    "rimbalzi": numeroRandom(1, 25),
    "falli": numeroRandom(1, 10)
  }
  legaBasket.push(nuovoGiocatore);
}
console.log(legaBasket);
/*Questo ciclo solo per prendere uno dei codici generati*/

/********************************************************/

$(document).ready(function() {
  for (var i = 0; i < legaBasket.length - 1; i++) {
    console.log(legaBasket[i].codiceUnivoco);
    var templateBase = $('#contentioreGiocatori').html();
    var template = Handlebars.compile(templateBase);
    var context = {codiceUnivoco : legaBasket[i].codiceUnivoco};
    var html    = template(context);
    $('#resultlistaCodici').append(html);
  }



});
