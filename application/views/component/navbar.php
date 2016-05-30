<div class="navbar-fixed">
  <ul id="dropdown1" class="dropdown-content">
   <li><a href="<?=site_url('siswa/setting/')?>/<?=$this->session->userdata('id')?>">Setting</a></li>
   <li><a href="<?=site_url('siswa/dest')?>">Logout</a></li>
  </ul>
   <nav>
     <div class="container">
     <div class="nav-wrapper">
       <a href="#!" class="brand-logo">nur<span style="color:#64b5f6">o</span>digital</a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
         <li class="waves-effect"><a href="<?=base_url('')?>">Home</a></li>
         <li><a href="<?=site_url('learning')?>">Belajar</a></li>
         <li><a href="<?=site_url('exam')?>">Ujian</a></li>
         <li><a href="<?=site_url('forum')?>">Forum</a></li>
         <?php if ($this->session->userdata('siswa_valid')==FALSE): ?>
           <?php if ($this->uri->segment(1)=="login") { ?>
             <li><a href="<?=site_url('register')?>">Regiter</a></li>
           <?php } else if($this->uri->segment(1)=="register") { ?>
             <li><a href="<?=site_url('login')?>">Login</a></li>
           <?php } else { ?>
             <li><a href="<?=site_url('login')?>">Login</a></li>
             <li><a href="<?=site_url('register')?>">Regiter</a></li>
          <?php } ?>
         <?php endif; ?>
         <?php if ($this->session->userdata('siswa_valid')==TRUE) { ?>
           <li>
             <a class="dropdown-button" href="#!" data-activates="dropdown1">
              <?=$this->session->userdata('nama')?>
               <i class="material-icons right">arrow_drop_down</i>
             </a>
           </li>
         <?php } ?>
       </ul>
       <ul class="side-nav" id="mobile-demo">
         <li><a href="sass.html">Sass</a></li>
         <li><a href="badges.html">Components</a></li>
         <li><a href="collapsible.html">Javascript</a></li>
         <li><a href="mobile.html">Mobile</a></li>
       </ul>
     </div>
   </div>
   </nav>
 </div>
