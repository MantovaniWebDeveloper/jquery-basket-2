/*FUNZIONE RANDOM DA UN NUMERO MINIMO AD UNO MASSIMO*/
function numeroRandom(numeroMin, numeroMax){
  var numRandomRisultante = Math.floor(Math.random() * (numeroMax - numeroMin + 1));
  return numRandomRisultante;
}
/*************************************/
//funzione generatore Codice
function generaCodice(arrayNumeri,arrayLettere){

  var codiceToString = "";
  var arrayCodice = [];
  var arrayLettereLunghezza = arrayLettere.length - 1;
  var arrayNumeriLunghezza = arrayNumeri.length - 1;

  for (var i = 0; i < 3; i++) {
    var mischiaArray = (Math.floor((Math.random()*arrayLettereLunghezza)+1));
    arrayCodice.push(arrayLettere[mischiaArray])
  }
  for (var i = 0; i < 3; i++) {
    var mischiaArrayNum = (Math.floor((Math.random()*arrayNumeriLunghezza)+1));
    arrayCodice.push(arrayNumeri[mischiaArrayNum]);
  }
  codiceToString = arrayCodice.toString().toUpperCase().replace(/,/gi,"");

  return codiceToString;
}
/*************************************/

//funzione per verificare se l'utente inserisce un codice esistente

function verificaCodice(array, inputUtente) {
  var trovato = false;
  var i = 0;
  while (!trovato) {
    codiceSalvato = array[i].codiceUnivoco;
    if (codiceSalvato == inputUtente) {
      console.log("Codice : " + array[i].codiceUnivoco);
      document.getElementById('codiceUnivoco').innerHTML = array[i].codiceUnivoco;
      console.log("Punti realizzati : " + array[i].puntiRealizzati);
      document.getElementById('puntiRealizzati').innerHTML = array[i].puntiRealizzati;
      console.log("Rimbalzi : " + array[i].rimbalzi);
      document.getElementById('rimbalzi').innerHTML = array[i].rimbalzi;
      console.log("Falli : " + array[i].falli);
      document.getElementById('falli').innerHTML = array[i].falli;

      trovato = true;
    }
    else {
      console.log("codice insesitente");
      document.getElementById('codiceUnivoco').innerHTML = "Codice non trovato..";
      trovato = false;
      i++;
    }

  }
  return trovato;
}
/*************************************/
