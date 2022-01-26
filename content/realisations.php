<!DOCTYPE html>
<html lang="en">

<body>

  <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded bg-light">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Coming Soon</span>
                <span class="section-heading-lower">Vos réalisations</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto ">

                  <?php
              $array = [
                ['Stéphane' ,  ' Razafia','"https://razafiasimanana.needemand.com/"'],
                ['Yen Nhi' ,  ' Ho Tong Minh','https://hotongminh.needemand.com/'],
                ['Baudino' ,  ' Pierre-Olivier','https://pierre-olivierb.github.io'],
                ['Kim' ,  ' Young Hee','https://kim.needemand.com/'],
                ['Cochonneau' ,  'Laurent','https://cochonneau.needemand.com/'],
                ['Hernandez' ,  'Raul','https://hernandez.needemand.com/'],
                ['Patrick' ,  'Arnaud','https://arnaud.needemand.com/'],
                ['Jean-Bernard' ,  'Briois','https://briois.needemand.com/'],
                ['Sylvie' ,  'Linxe','https://linxe.needemand.com/'],
                ['Mourichon' ,  'Thibault','https://mourichon.needemand.com/'],
                ['Julien' ,  'Grossi','https://grossi.needemand.com/'],
                ]; 
?>

<?php foreach($array as $key => $value): ?>
    <li class="list-unstyled-item list-hours-item d-flex justify-content-between"> 
    <?= $value[0] ?> <?=$value[1]?>
    <a class="ml-auto" href=" <?= $value[2] ?> "> portefolio</a>
    </li>
<?php endforeach  ?>
    
                
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>Promo 2021-2022</strong>
                  <br>
                  Concepteurs & développeurs d'application 
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Needemand</em>
                </small>
                <br>
                contact@needemand.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/delai.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Projet Fil Rouge</span>
                  <span class="section-heading-lower">Contexte</span>
                </h2>
                
                <p class="mb-0">Projet réalisé dans le cadre d'une formation. 
                  En partie en groupe et 
                  en partie individuellement, 
                  ce projet est le résultat d'un 
                  apprentissage lors d'une formation       
                  </p>
                  <p>Temps de réalisation du projet <em>5 mois environ</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  

</html>

