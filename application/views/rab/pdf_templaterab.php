<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pdf template Rab</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    .card-title {
      text-align:center;
      } 
    .form-control{
      width: 350px;
    }

    .table{
      border:1;
    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 9px;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: black;
      color: white;
    }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="content-wrapper">

<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Template RAB</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="customers">
                  <thead>
                  <tr>
                    <th>Uraian Template</th>
                    <th>Volume Rencana</th>
                    <th>Satuan Template</th>
                    <th>Kategori</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($templaterab as $dat) { ?>

                    <tr>
                      <td><?= $dat['uraian_template']; ?></td>
                      <td><?= $dat['volume_template']; ?></td>
                      <td><?= $dat['nama_satuan']; ?></td>
                      <td><?= $dat['kategori']; ?></td>
                    </tr>

                <?php } ?> 
                 </tbody>
                </table>
               
              </div>
              <!-- /.card-body -->
      </div>
      </div>
      </div>
      </div>
  </section>
</div>
</body>
</html>