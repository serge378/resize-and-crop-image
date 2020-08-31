<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="css/croppie.css" />
</head>

<body>


  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4 col-10">
        <!-- Card -->
        <div class="card testimonial-card">
          <!-- Background color -->
          <div class="card-up unique-color-dark lighten-1"></div>
          <!-- Avatar -->
          <div class="avatar mx-auto white" id="uploaded_image">
            <img src="img/placeholder-avatar.jpg" class="rounded-circle" alt="woman avatar">
          </div>
          <!-- Content -->
          <div class="card-body">
            <!-- Name -->
            <form class="md-form mt-0">
              <div class="file-field">
                <div class="d-flex justify-content-center">
                  <div class="btn text-white unique-color-dark btn-rounded float-left">
                    <span>Ajouter une photo</span>
                    <input type="file" id="upload-image">
                  </div>
                </div>
              </div>
            </form>
            <hr>
            <!-- Quotation -->
            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
            </p>
          </div>
        </div>
        <!-- Card -->
      </div>
    </div>




    <div id="uploadimageModal" class="modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Rogner la photo</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md text-center">
                <div class="upload-demo"></div>
              </div>

            </div>
          </div>

          <button type="button" class="btn text-white success-color-dark" id="upload-result">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/croppie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/index.js"></script>
</body>

</html>