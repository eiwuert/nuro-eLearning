<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#loginv").validate({
      rules: {
        username: {
          required: true,
          minlength: 2
        },
        password: {
          required: true,
          minlength: 2
        }
      },
      messages: {
        username :{
          required: "harus diisi ngehe jancok asu",
          minlength: "harus 2"
        },
        password: {
          required: "harus diisi cok",
          minlength: "harus 2"
        }
      },
      submitHandler: function(form) {
        alert('valid');
      },
      errorElement: 'span',
      errorLabelContainer: '.error'
    });
  });
</script>
<style media="screen">
  .error {
    color: red;
    font-size: 12px;
  }
</style>
<br><br>
<div class="container">
  <div class="card-panel hoverable" style="width:60%;margin:0 auto;">
     <div class="">
       Student Login Area
     </div>
     <br>
     <div class="row">
     <form id="loginv" class="col s12" action="<?=base_url('action/cekLogin')?>" method="post">
       <!--   action="<?=base_url('action/cekLogin')?>" -->
       <?php if ($this->session->userdata(md5('notification'))): ?>
         <div class="" style="text-align:center;background-color:#ee6e73;width:100%;padding:10px;color:#fff">
           <?=$this->session->flashdata(md5('notification'))?>
         </div><br><br>
       <?php endif; ?>


       <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate">
          <label for="username" data-error="wrong">Username</label>
          <span id="error"></span>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password" data-error="wrong">Password</label>
          <span id="error"></span>
        </div>
      </div>

        <span style="float:right;">
          <input type="submit" name="name" value="Login" class="waves-effect waves-light btn">
          <a href="<?=site_url('url/register')?>" class="waves-effect waves-light btn">Register</a>
        </span>

        <span style="">
          <input type="checkbox" id="test5" />
          <label for="test5">Remember Me!</label>
        </span>

     </form>
   </div>
    </div>
</div>
<br><br>
