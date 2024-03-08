<!DOCTYPE html>
<html>
<head>
  <title> Add User With Validation Demo</title>
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
    <form method="post" id="add_create" name="add_create" action="<?= site_url(route_to('home.submit_booking')) ?>">
      <div class="form-group">
        <label>From Date:</label>
        <input type="date" name="from_date" class="form-control">
      </div>
      <div class="form-group">
        <label>To Date:</label>
        <input type="date" name="to_date" class="form-control">
      </div>
      <div class="form-group">
        <label>Message</label>
        <input type="text" name="message" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Add booking</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        from_date: {
          name: {
            required: true,
          },
          
          
        },
        to_date: {
          name: {
            required: "Name is required.",
          },
         
        },
        message: {
          name: {
            required: "Name is required.",
          },
         
        },
      })
    }
  </script>
</body>
</html>