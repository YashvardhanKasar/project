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
      <input type="hidden" name="bid" id="bid" value="<?php echo $user_obj['bid']; ?>">
      <div class="form-group">
        <label>From Date:</label>
        <input type="date" name="from_date" class="form-control" value="<?php echo $user_obj['from_date']; ?>">
      </div>
      <div class="form-group">
        <label>To Date:</label>
        <input type="date" name="to_date" class="form-control" value="<?php echo $user_obj['to_date']; ?>">
      </div>
      <div class="form-group">
        <label>Message</label>
        <input type="text" name="message" class="form-control" value="<?php echo $user_obj['message']; ?>">
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
          from_date: {
            required: true,
          },
          to_date: {
            required: true,
            
          },
          message: {
            required: true,
            maxlength: 60,
            
        },
        messages: {
          from_date: {
            required: "Name is required.",
          },
          to_date: {
            required: "rate is required.",
           
          },
          message: {
            required: "rate is required.",
            rate: "It does not seem to be a valid email.",
            maxlength: "The message should be or equal to 60 chars.",
          },
        },
      }
      })
    }
  </script>
</body>
</html>