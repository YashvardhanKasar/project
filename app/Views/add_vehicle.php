<!DOCTYPE html>
<html>
<head>
  <title>Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="add_create_vehicle" name="add_create_vehicle" action="<?= site_url(route_to('home.submit_vehicle')) ?>">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" class="form-control">
      </div>
      <div class="form-group">
        <label for="price">Price per day:</label>
        <input type="text" name="price" id="price" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Add Vehicle</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    $(document).ready(function () {
      if ($("#add_create").length > 0) {
        $("#add_create").validate({
          rules: {
            title: {
              required: true,
            },
            model: {
              required: true,
            },
            price: {
              required: true,
            },
          },
          messages: {
            title: {
              required: "Title is required.",
            },
            model: {
              required: "Model is required.",
            },
            price: {
              required: "Price is required.",
            },
          },
        });
      }
    });
  </script>
</body>
</html>
