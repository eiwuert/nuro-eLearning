<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#regisv").validate({
      rules: {
        nama: {
          required: true,
          minlength: 10
        },
        email: {
          required: true,
          email: true
        },
        username: {
          required: true,
          minlength: 5
        },
        password: {
          required: true,
          minlength: 5
        },
        image: {
          required: true
        }
      },
      messages: {
        nama: {
          required: "Nama harus diisi",
          minlength: "Minimal nama harus 10 kata"
        },
        email: {
          required: "Email harus diisi",
          email: "Email harus dalam format alamat email"
        },
        username: {
          required: "Username harus diisi",
          minlength: "Minimal username harus 5 kata"
        },
        password: {
          required: "Password harus diisi",
          minlength: "Minimal password harus 5 kata"
        },
        image: {
          required: "Foto harus diisi"
        }
      },
      errorElement: 'span',
      errorLabelContainer: '.error'
    });
  });
</script>
<style media="screen">
  .error {
    font-size: 12px;
    color: red;
  }
</style>
<br><br>
<div class="container">
   <div class="card-panel hoverable" style="width:60%;margin:0 auto;">
     <div class="">
       Student Register
     </div>
     <br>
     <form id="regisv" action="<?=base_url('action/addUser')?>" method="post">
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
          <input placeholder="Password" id="password" name="password" type="text" class="validate">
          <label for="password">Password</label>
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
          <label for="test5">Remember Me!</label>
        </span>

     </form>
   </div>
</div>

<br><br>
