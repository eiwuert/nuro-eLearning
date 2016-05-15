<br><br>
<div class="container">
   <div class="card-panel hoverable" style="width:60%;margin:0 auto;">
     <div class="">
       Student Register
     </div>
     <br>
     <form class="" action="<?=base_url('action/addUser')?>" method="post">
       <label for="">Nama Lengkap</label>
       <input type="text" name="username" value="" placeholder="Full Name">

       <label for="">Username</label>
       <input type="text" name="username" value="" placeholder="Username">

       <label for="">Password</label>
       <input type="text" name="password" value="" placeholder="Password">

       <label for="">Kelas</label>
       <select class="browser-default">
         <option value="" disabled selected>Choose your option</option>
         <option value="1">Kelas 10</option>
         <option value="2">Kelas 11</option>
         <option value="3">Kelas 12</option>
       </select>
       <br>

       <label for="">Jurusan</label>
       <select class="browser-default">
         <option value="" disabled selected>Choose your option</option>
         <option value="1">RPL</option>
         <option value="2">MM</option>
         <option value="3">TKJ</option>
       </select>
       <br>

       <label for="">Picture</label>
       <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload your photo for profile picture">
          </div>
        </div>

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
