<!DOCTYPE html>

<html>



<head>
<link rel="stylesheet" href="portfolio.css">

</head>


<body>
  <div class="center" style="display:flex; justify-content:center;">
      <div class="alles" >
          <?php
          $bericht = "";
          $statusingevuld = 0; //Dit gebruik ik omdat 'isset' niet doet wat ik wil dat het doet.
          if(isset($_POST["onderwerp"])){



              $gegeven = $_POST["onderwerp"];
              $bericht = "hoi";
              $berichttwee = "Je hebt dit ingevoerd: ".$gegeven;


              if($gegeven == "vooropleiding"){
                  $bericht = ">>> VOOROPLEIDING: <br><br> 2012 - 2018 <br>    Krimpenerwaard College <br>    Gymnasium diploma <br> C&M - E&M profiel";
                  $statusingevuld = 1;


              }
              elseif ($gegeven == "skills"){
                  $bericht = ">>> SKILLS: <br><br> Programmeren - o.a. in PHP en Javascript, al ben ik nog aan het leren. <br>
                                               Creatieve oplossingen bedenken <br>
                                               Goed kunnen verwoorden of illustreren wat ik bedoel
                                               
                                               
                            <br><br> Maar ook: <br> Stress handelen, positiviteit brengen, snel dingen aanleren, luisteren en doorzetten. <br> ";
                  $statusingevuld = 2;
              }
              else {
                  $statusingevuld = 0;
              }
          }
          ?>

          <header> <!-- hier vind je de titel enzo-->
            <div class="header"><span>

               <h1>  Annelies </h1> </span>
               <h2>  Creative Media & Game Technologies </h2>

            </div>
          </header> <!-- tot hier-->




          <!-- verdere inhoud van de pagina -->





           <div class="main">

        <!-- Hieronder vind je wel 'opdrachtprompt venster' in beeld komt te staan, afhankelijk van de waarde van $statusingevuld. Die waarde wordt bepaald door wat de gebruiker heeft ingevuld in het formulier. -->
            <br>
            <?php /*/ if(isset($_POST["onderwerp"])){ /*/
                  if($statusingevuld == 1){?>   <!-- Dus er is ingevuld 'vooropleiding'. -->
                  <div class="gegevensextra">

                      <span class="gegevens">

                      <br>

                       >> NAAM: Annelies <br>
                       >> GEBOORTEDATUM: 10 juli 2000 <br>
                       >> SCHOOL: Hogeschool Rotterdam <br>
                       >> OPLEIDING: Creative Media and Game Technologies <br>
                       >> LEERJAAR: 1 <br><br>

                       <form method="post" action="">

                       >> WAAR WIL JE MEER OVER WETEN? <br>
                       >> VUL IN vooropleiding OF skills
                       <input type="text" name="onderwerp">
                       <button type="submit"> Verzenden </button>
                       </form
                        <?php echo "$bericht";?> <!-- Hier wordt info gegeven over mijn vooropleiding. -->

                       </span>
                  </div>

            <?php } elseif($statusingevuld == 2){?>  <!-- Dus er is ingevuld 'skills'. -->
                  <div class="gegevensextra2">

                      <span class="gegevens">

                      <br>

                       >> NAAM: Annelies <br>
                       >> GEBOORTEDATUM: 10 juli 2000 <br>
                       >> SCHOOL: Hogeschool Rotterdam <br>
                       >> OPLEIDING: Creative Media and Game Technologies <br>
                       >> LEERJAAR: 1 <br><br>

                       <form method="post" action="">

                       >> WAAR WIL JE MEER OVER WETEN? <br>
                       >> VUL IN vooropleiding OF skills
                       <input type="text" name="onderwerp">
                       <button type="submit"> Verzenden </button>
                       </form
                          <?php echo "$bericht";?>  <!-- Hier vertel ik iets over mijn skills. -->

                       </span>
                  </div>

                          <?php } else { /*/ Dus als er geen input is gegeven in het tekstveldje /*/
                          ?>
                  <div class="gegevens">

                      <span class="gegevens">

                      <br>

                       >> NAAM: Annelies <br>
                       >> GEBOORTEDATUM: 10 juli 2000 <br>
                       >> SCHOOL: Hogeschool Rotterdam <br>
                       >> OPLEIDING: Creative Media and Game Technologies <br>
                       >> LEERJAAR: 1 <br><br>

                       <form method="post" action="">

                       >> WAAR WIL JE MEER OVER WETEN? <br>
                       >> VUL IN vooropleiding OF skills
                       <input type="text" name="onderwerp">
                       <button type = "submit"> Verzenden </button>
                       </form


                       </span>
                  </div>
            <?php } ?>






            <!-- <img src="paraplu.png"> -->





           </div>
      </div>
  </div>
</body>



<footer>

</footer>



</html>
<!--Op de middelbare school ben ik 6 jaar lid geweest van de leerlingenraad waarvan ik 4 jaar de secretaris was.
Ik heb activiteiten georganiseerd en gerealiseerd zoals oliebollen verkopen op school, binnen school anoniem een roos voor iemand kunnen bestellen en laten bezorgen op valentijnsdag,-->
