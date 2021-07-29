<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php 
  require __DIR__ . '/db/dbDischi.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- my style -->
  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CDN Vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

  <!-- CDN axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Document</title>
</head>
<body>

  <!-- inizio app vue -->
  <div id="app">

    <!-- inizio header -->
    <header>
      <div class="container d-flex justify-content-end align-items-center h-100">
        <select name="genre" id="genre" class="p-2" @change="filterGenre" v-model="selGenre">
          <option value=""> Seleziona un genere... </option>
          <option v-for="genre in arrayGenres" :value="genre"> {{genre}} </option>
        </select>
      </div>
    </header>
    <!-- fine header -->

    <!-- inizio main -->
    <main>
      <div class="container mt-5">
        <div class="row row-cols-5 g-3">
          <div v-for="disco in arrayFiltered" class="col">
            <div class="card bg-secondary text-white h-100">
              <img :src="disco.poster" class="card-img-top" :alt="disco.title">
              <div class="card-body">
                <h5 class="card-title fw-bolder"> {{disco.title}} </h5>
                <p class="card-text"> {{disco.author}} </p>
                <p class="card-text"> {{disco.genre}} </p>
                <p class="card-text"> {{disco.year}} </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- fine main -->

  </div>
  <!-- fine app vue -->



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- My Script -->
  <script src="js/script.js"></script>
</body>
</html>