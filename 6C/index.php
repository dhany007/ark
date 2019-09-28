<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Frontend Test Figma </title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav>
    <div class="nav-wrapper black">
      <a href="#" class="brand-logo center">Frontend Test</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><i class="material-icons">dehaze</i></a></li>
          <li><a href="#"><i class="material-icons">pan_tool</i></a></li>
        </ul>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect waves-light btn">Log in</a></li>
        </ul>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <h4>Arkademy Bootcamp  <button data-target="modalAdd" class="right btn modal-trigger">Add</button></h4>

        <!-- Modal Add Button -->
        <div id="modalAdd" class="modal">
          <div class="modal-content">
            <h4>Add Data</h4>
            <div class="row">
              <form class="col s12"  method="POST" action="aksitambah.php">
                  <div class="input-field col s12">
                    <input name = "nama" placeholder="Nama anda" id="first_name" type="text" class="validate"> 
                    <label for="first_name">Nama</label>
                  </div>
                <div class="input-field col s12">
                  <select name = "kerja" >
                    <option value="" disabled selected>Choose Work</option>
                    <option value="1">Frontend Dev</option>
                    <option value="2">Backend Dev</option>
                  </select>
                  <label>Work</label>
                </div>
                <div class="input-field col s12">
                  <select name = "gaji">
                    <option value="" disabled selected>Choose Salary</option>
                    <option value="1">Rp. 10.000.000</option>
                    <option value="2">Rp. 12.000.000</option>
                  </select>
                  <label>Salary</label>
                </div>
                <div class="modal-footer">
                  <button class="right btn" type="submit">Add</button>
                </div>
              </form>
            </div>
          </div>

        </div>


        <!-- Modal Edit Button -->
        <div id="modalEdit" class="modal">
          <div class="modal-content">
            <h4>Edit Data</h4>
            <div class="row">
              <form class="col s12">
                  <div class="input-field col s12">
                    <input placeholder="Nama anda" id="first_name" type="text" class="validate">
                    <label for="first_name">Nama</label>
                  </div>
                <div class="input-field col s12">
                  <select>
                    <option value="" disabled selected>Choose Work</option>
                    <option value="1">Backend Dev</option>
                    <option value="2">Frontend Dev</option>
                  </select>
                  <label>Work</label>
                </div>
                <div class="input-field col s12">
                  <select>
                    <option value="" disabled selected>Choose Salary</option>
                    <option value="1">Rp. 12.000.000</option>
                    <option value="2">Rp. 10.000.000</option>
                  </select>
                  <label>Salary</label>
                </div>
                
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button href ="#" class="right btn">Edit</button>
          </div>
        </div>

        <!-- Modal Hapus Button -->
        <div id="modalHapus" class="modal">
          <div class="modal-content">
            <h4>Hapus Data</h4>
            <p>Data sianu telah dihapus</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
          </div>
        </div>

        <table class="responsive-table"> 
          <thead>
            <tr>
              <th>Name</th>
              <th>Work</th>
              <th>Salary</th>
              <th>Action</th>
            </tr>
          </thead>
          
          <tbody>
          <?php
                include "koneksi.php";
                $data=mysqli_query($koneksi,"SELECT Name.id as id, Name.name as nama, Work.name as kerja, Kategori.salary as gaji FROM ((Name INNER JOIN Work ON Name.id_work = Work.id) INNER JOIN Kategori ON Name.id_salary = Kategori.id)");
                while($d=mysqli_fetch_array($data)){ ?>
                    <tr>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['kerja'] ?></td>
                        <td><?php echo $d['gaji'] ?></td>
                        <td>
                          <ul>
                            <button href = "hapus.php?id=<?php echo $d['id']; ?>" class="btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                            <button data-target="modalEdit" class="btn-flat modal-trigger"><i class="material-icons">create</i></button>
                          </ul>
                        </td>
                    </tr>
            <?php
                }
            ?>
            
           
           
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  </body>
</html>
