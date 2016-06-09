<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/validate.js"></script>
<style media="screen">
  .error {
    font-size: 12px;
    color: red;
  }
</style>
<br><br>
<div class="container">
   <div class="card-panel hoverable" style="width:60%;margin:0 auto;">
     <!-- <form id="regisv" action="<?=base_url('register/addUser')?>" method="post"> -->
     <?php
      $attributes = array(
        'id'  => 'regisv'
      );
     ?>
     <?=form_open_multipart('register/addUser', $attributes) ?>
       <!--   action="<?=base_url('action/cekLogin')?>" -->
       <?php if ($this->session->flashdata(md5('notification'))) { ?>
         <div class="" style="text-align:center;background-color:#ee6e73;width:100%;padding:10px;color:#fff">
           <?=$this->session->flashdata(md5('notification'))?>
         </div><br><br>
       <?php } else if ($this->session->flashdata(md5('sukses'))) { ?>
         <div class="" style="text-align:center;background-color:#26a69a;width:100%;padding:10px;color:#fff">
           <?=$this->session->flashdata(md5('sukses'))?>
         </div><br><br>
       <?php } ?>

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Nama Lengkap" id="nama" name="nama" type="text" class="validate">
          <label for="nama">Nama Lengkap</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Email" id="email" name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Username" id="username" name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <select id="jurusan" name="jurusan">
            <option value="" disabled selected>Pilih Jurusan</option>
            <?php foreach ($jurusan as $data) { ?>
              <option value="<?=$data->id_jurusan;?>"><?=$data->jurusan;?></option>
            <?php } ?>
          </select>
          <label>Jurusan</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <select id="kelas" name="kelas">
            <option value="" disabled selected>Pilih Kelas</option>
            <?php foreach ($kelas as $data) { ?>
              <option value="<?=$data->id_kelas;?>"><?=$data->kelas;?></option>
            <?php } ?>
          </select>
          <label>Kelas</label>
        </div>
      </div>

      <div class="file-field input-field">
        <div class="btn">
          <span>Foto</span>
          <input type="file" name="image" required>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload foto">
        </div>
      </div>
      <br>
        <span style="float:right;">
          <input type="submit" name="name" value="Register" class="waves-effect waves-light btn">
        </span>

        <span style="">
          <input type="checkbox" id="test5" />
          <label for="test5">Ingat Saya!</label>
        </span>

     </form>
   </div>
</div>

<br><br>
