<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User</title>
  </head>
  <body>
    <form action="/user/update" method="post">
    <h3> Edit User </h3>
    <p>
    <input type="text" name="user_id" value="<?= $user->user_id;?>" disabled> <br>
    <input type="text" name="user_nama" value="<?= $user->user_nama;?>" disabled> <br>
    <input type="text" name="user_email" value="<?= $user->user_email;?>" disabled> <br>
    </p>
    <button type="submit">Update</button>
</form>
</body>
</html>
