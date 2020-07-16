<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User</title>
  </head>
  <body>
  <table border=1>
    <thead>
    <tr>
      <th>User ID</th>
      <th>Nama</th>
      <th>E-mail</th>
      <th> Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $row):?>
    <tr>
      <td><?=$row['user_id'];?></td>
      <td><?=$row['user_nama'];?></td>
      <td><?=$row['user_email'];?></td>
      <td> <a href="/user/edit/<?= $row['user_id'];?>">Edit</a> 
           <a href="/user/delete/<?= $row['user_id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Delete</a> 
         </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
  <a href="/user/add_new/<?= $row['user_id'];?>">Tambah Data</a>
  <a class="btn btn-primary btn-lg" href="<?= base_url('login/logout'); ?>" role="button">Logout</a>
</div>
  </body>
</html>