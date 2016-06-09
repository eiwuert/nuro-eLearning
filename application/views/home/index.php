<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$title?> - e-Learning</title>
    <link rel="stylesheet" href="<?=base_url('')?>assets/materialize/css/ghpages-materialize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=base_url('')?>assets/materialize/css/prism.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=base_url('')?>assets/materialize/dist/css/materialize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=base_url('')?>assets/materialize/extras/noUiSlider/nouislider.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/news.css" media="screen" title="no title" charset="utf-8">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script> -->
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
  <?php $this->load->view('component/navbar') ?>

  <?php $this->load->view('home/getPage', FALSE) ?>
  </body>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
  </script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/dist/js/materialize.min.js"></script>
  <!-- <script type="text/javascript" src="<?=base_url('')?>assets/materialize/extras/nouislider/nouislider.min.js"></script> -->
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/animation.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/buttons.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/cards.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/carousel.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/character_counter.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/chips.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/collapsible.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/dropdown.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/forms.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/global.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/hammer.min.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/init.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/initial.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/jquery.hammer.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/jquery.timeago.min.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/leanModal.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/materialbox.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/parallax.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/prism.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/pushpin.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/scrollFire.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/scrollspy.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/sideNav.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/slider.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/tabs.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/toasts.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/tooltip.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/transitions.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/velocity.min.js"></script>
  <script type="text/javascript" src="<?=base_url('')?>assets/materialize/js/waves.js"></script>
</html>
