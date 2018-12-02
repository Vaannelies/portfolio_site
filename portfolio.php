<!DOCTYPE html>

<html>



<head>
<link rel="stylesheet" href="portfolio.css">

</head>


<body>
  
  <?php
  $bericht = "";
  $statusingevuld = false; //Dit gebruik ik omdat 'isset' niet doet wat ik wil dat het doet.
  if(isset($_POST["onderwerp"])){



      $gegeven = $_POST["onderwerp"];
      $bericht = "hoi";
      $berichttwee = "Je hebt dit ingevoerd: ".$gegeven;


      if($gegeven == "achtergrond"){
          $bericht = ">>> Hond";
          $statusingevuld = true;


      }
      elseif ($gegeven == "hobbys"){
          $bericht = ">>> Kat";
          $statusingevuld = true;
      }
      else {
          $statusingevuld = false;
      }
  }
  ?>

  <header> <!-- hier vind je de titel enzo-->
    <div class="header"><span>

       <h1>  Annelies </h1> </span>
       <h2>  - Een enthousiaste student aan de Hogeschool Rotterdam - </h2>
     
    </div>
  </header> <!-- tot hier-->

  <!-- verdere inhoud van de pagina -->

  <div class="main">
    <br>
    <?php /*/ if(isset($_POST["onderwerp"])){ /*/
          if($statusingevuld == true){?>
		  <div class="gegevensextra">

              <span class="gegevens">

              <br>

               >> NAAM: Annelies <br>
               >> GEBOORTEDATUM: 10 juli 2000 <br>
               >> OPLEIDING: Creative Media and Game Technologies <br>
               >> LEERJAAR: 1 <br><br>

               <form method="post" action="">

               >> WAAR WIL JE MEER OVER WETEN? <br>
               >> TYPE achtergrond OF hobby's
               <input type="text" name="onderwerp">
               <button type="submit"> Verzenden </button>
               </form
                <?php echo "$bericht";?>

               </span>
		   		  <!-- hieronder zie je een stukje php dat test of er een post is gegeven  -->
    <?php } else {
    ?>    <div class="gegevens">

		      <span class="gegevens">

		      <br>

		       >> NAAM: Annelies <br>
		       >> GEBOORTEDATUM: 10 juli 2000 <br>
		       >> OPLEIDING: Creative Media and Game Technologies <br>
		       >> LEERJAAR: 1 <br><br>

			   <form method="post" action="">

		       >> WAAR WIL JE MEER OVER WETEN? <br>
		       >> TYPE achtergrond OF hobby's
			   <input type="text" name="onderwerp">
			   <button type = "submit"> Verzenden </button>
		       </form


		       </span>
    <?php } ?>


		  </div>

	</div>
 
  
 <script src="myscripts.js"></script> 
</body>



<footer>
Test test
</footer>



</html>