<!DOCTYPE html>
<html>
<head>
  <title>Edit User Demo</title>
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
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="vid" id="vid" value="<?php echo $user_obj['vid']; ?>">
      <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" value="<?php echo $user_obj['title']; ?>">
      </div>
      <div class="form-group">
        <label>Model:</label>
        <input type="text" name="model" class="form-control" value="<?php echo $user_obj['model']; ?>">
      </div>
      <div class="form-group">
        <label>Price:</label>
        <input type="text" name="price" class="form-control" value="<?php echo $user_obj['price']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          title: {
            required: true,
            maxlength: 60,
          },
          model: {
            required: true,
            maxlength: 60,
            
          },
          
        price: {
            required: true,
            maxlength: 60,
            
        },
        messages: {
            title: {
            required: "title is required.",
          },
          model: {
            required: "model is required.",
           
          },
          
          price: {
            required: "price is required.",
           
          },
        },
      }
      })
    }
  </script>
</body>
</html>