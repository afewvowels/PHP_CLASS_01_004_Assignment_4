<!doctype html>
<html>
<head>
  <title>Assignment #4</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='./css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
</head>

<body class=
  <?php
    if(isset($_POST['submitted'])) {
      echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
    } else { echo "";
    }
  ?>
  >
  <header class=
    <?php
      if(isset($_POST['submitted'])) {
        echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
      } else { echo "";
      }
    ?>>
    <?php include('./includes/inc_header.php') ?>
  </header>

  <section id='form_section'>
    <?php
    if(isset($_POST['submitted'])) {
      include('./includes/register_form_handle.php');
    } else {
      include('./includes/register_form.php');
    }
    ?>
  </section>

  <footer class=
    <?php
      if(isset($_POST['submitted'])) {
        echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
      } else { echo "";
      }
    ?>>
    <?php include('./includes/inc_footer.php') ?>
  </footer>
</body>
</html>
