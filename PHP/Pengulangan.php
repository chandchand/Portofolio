<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>P<span>HP</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            
            <ul class="dropdown-menu extended tasks-bar">
              
                
          <!-- settings end -->
          <!-- inbox dropdown start-->
        
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
           
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Chandra</h5>
          <li class="mt">
            <a class="active" href="">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
            <a href="latihan.php">
              <i class="fa fa-task"></i>
              <span>Latihan Dasar</span>
              </a>
          </li>
          <li>
                           <a href="Pengulangan.php">
              <i class="fa fa-task"></i>
              <span>Pengulangan</span>
              </a>
          
          </li>
          <li>
                          <a href="CRUD/index.php">
              <i class="fa fa-task"></i>
              <span>CRUD</span>
              </a>
          
          </li>
          <li>
                          <a href="case of.php">
              <i class="fa fa-task"></i>
              <span>Case Of</span>
              </a>
          
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
               <h1>Pengulangan PHP</h1>
    <p>Pada PHP ada 4 jenis perulangan yang bisa kita gunakan:</p>
  <ul>
    <li>Perulangan For</li>
    <li>Perulangan While</li>
    <li>Perulangan Do/While</li>
    <li>Perulangan Foreach</li>   
  </ul>
    <h1>A.Perulangan For-1</h1>
    <b><p>Contoh Script</p></b>
    <p>Hasil Dari <a href="Contoh for 1.php"> For-1</a></p>
  <!-- HTML generated using hilite.me -->
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
<span style="color: #557799">&lt;?php</span>

<span style="color: #008800; font-weight: bold">for</span>(<span style="color: #996633">$i</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; <span style="color: #996633">$i</span> <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">9</span>; <span style="color: #996633">$i</span><span style="color: #333333">++</span>)
{
    <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$i</span> <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&#39;&lt;br /&gt;&#39;</span>;
}

<span style="color: #557799">?&gt;</span>
&lt;/body&gt;
&lt;/html&gt;
</pre></div>

<ul>
  <h1>B.Pengulangan While</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Pengulangan/Contoh While.php">While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span> 

<span style="color: #996633">$ulangi</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>;

<span style="color: #008800; font-weight: bold">while</span>(<span style="color: #996633">$ulangi</span> <span style="color: #333333">&lt;</span> <span style="color: #0000DD; font-weight: bold">10</span>){
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;p&gt;Ini adalah perulangan ke-</span><span style="background-color: #eeeeee">$ulangi</span><span style="background-color: #fff0f0">&lt;/p&gt;&quot;</span>;
    <span style="color: #996633">$ulangi</span><span style="color: #333333">++</span>;
}

<span style="color: #557799">?&gt;</span>
</pre></div>

<ul>
  <h1>C.Pengulangan Do/While</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Pengulangan/Contoh Do_While.php">Do/While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span> 

<span style="color: #996633">$ulangi</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">10</span>;

<span style="color: #008800; font-weight: bold">do</span> {
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;p&gt;ini adalah perulangan ke-</span><span style="background-color: #eeeeee">$ulangi</span><span style="background-color: #fff0f0">&lt;/p&gt;&quot;</span>;
    <span style="color: #996633">$ulangi</span><span style="color: #333333">--</span>;
} <span style="color: #008800; font-weight: bold">while</span> (<span style="color: #996633">$ulangi</span> <span style="color: #333333">&gt;</span> <span style="color: #0000DD; font-weight: bold">0</span>);

<span style="color: #557799">?&gt;</span>
</pre></div>
<ul>
  <h1>B.Pengulangan Foreach</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Pengulangan/Foreach.php">While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #996633">$books</span> <span style="color: #333333">=</span> [
    <span style="background-color: #fff0f0">&quot;PHP Dasar&quot;</span>,
    <span style="background-color: #fff0f0">&quot;Funtion&quot;</span>,
    <span style="background-color: #fff0f0">&quot;HTML&quot;</span>,
    <span style="background-color: #fff0f0">&quot;Boostrap&quot;</span>
];

<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;h5&gt;Judul Latihan:&lt;/h5&gt;&quot;</span>;
<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;ul&gt;&quot;</span>;
<span style="color: #008800; font-weight: bold">foreach</span>(<span style="color: #996633">$books</span> <span style="color: #008800; font-weight: bold">as</span> <span style="color: #996633">$buku</span>){
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;li&gt;</span><span style="background-color: #eeeeee">$buku</span><span style="background-color: #fff0f0">&lt;/li&gt;&quot;</span>;
}
<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;/ul&gt;&quot;</span>;

<span style="color: #557799">?&gt;</span>
</pre></div>

<p>Sumber Dari PetaniKode.com</p>

       </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
            s
    <!--footer start-->
   <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>CHANDRA</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          SMK MVP ARS internasional  ---><a href="https://smkmvp-bdg.sch.id/">Our Team</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>