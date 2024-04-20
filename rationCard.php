<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Ration</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php require_once("header.php"); ?>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="addNewRationCard.php" method="post" name="add">
          <div class="p-4 bg-light rounded shadow">
            <div class="h3 text-center font-bold text-danger mb-4">
              Request Ration Card
            </div>
            <div class="mb-3">
              <label for="name" class="form-label font-bold">Candidate Name :</label>
              <input
                id="name"
                name="name"
                class="form-control"
                placeholder="Enter name"
                type="text"
                style="background: #d8e2e8; color:balck; font-weight:bold;"
              />
            </div>
            <div class="mb-3">
              <label for="adhar" class="form-label font-bold">Adhar Card No. :</label>
              <input
                id="adhar"
                name="adhar"
                class="form-control placehoder:bg-info"
                placeholder="Enter adhar no."
                type="number"
                style="background: #d8e2e8; color:balck; font-weight:bold;"
               
              />
            </div>
            <div class="mb-3">
              <label for="ration" class="form-label font-bold">Ration No. :</label>
              <input
                id="ration"
                name="ration"
                class="form-control"
                placeholder="Enter ration"
                type="number"
                style="background: #d8e2e8; color:balck; font-weight:bold;"
              />
            </div>
            <button class="btn btn-success w-100">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php require_once("footer.php"); ?>
  
  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
