<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Catat Pemasukan</title>

    <!-- Bootstrap -->
    <?php $this->load->view('layout/includes'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <h1>Tambah Postingan</h1>
      <br><br><br><br>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kategori</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Isi</label>
          <textarea class="ckeditor" id="isi" name="isi"></textarea>
          </div>
        
        <button type="submit" class="btn btn-primary">Posting</button>
      </form>

  </body>
  </html>