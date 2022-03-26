<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">

    <title>Контакти - Кравецькі додатки. Івано-Франківськ</title>
    <meta name="description" content="Контактна інформація. Де знаходимось так як з нами можна зв'язатись.">
  </head>
  <body>

    <!-- container -->
    <div class="container">

        <!-- header -->
        <head>
            <nav class="navbar navbar-expand-lg navbar-light mt-3 header-main">
    
                <!-- logo -->
                <a class="navbar-brand mx-auto pl-3 pr-3" href="/"><img class="img-fluid" src="assets/img/logo-dodatky.png" alt="Магазин Кравецькі додатки Івано-Франківськ"></a>
                <button class="navbar-toggler mt-3 mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse text-center mt-4 mt-lg-0" id="navbarNavAltMarkup">
                  <!-- navigation -->
                  <div class="navbar-nav ml-auto text-uppercase nav-main">
                    <a class="nav-item nav-link mr-3" href="/products">Асортимент</a>
                    <a class="nav-item nav-link mr-3" href="/services">Послуги</a>
                    <a class="nav-item nav-link mr-3" href="/about_us">Про нас</a>
                    <a class="menu-current nav-item nav-link mr-3" href="/contacts">Контакти</a>
                  </div><!-- /navigation -->
                </div>
    
            </nav>
        </head><!-- /header -->

    </div><!-- /container -->


    <!-- slider -->
    <div class="slider-bg d-none d-md-block">
        <div class="mx-auto slider-container">
          <img class="img-fluid" src="assets/img/slider-1.jpg" alt="">
        </div>
    </div><!-- /slider -->


    <!-- container -->
    <div class="container">

      <h1 class="text-center">Контакти</h1>
      <div class="h-line mx-auto"></div>

        <div class="row d-flex justify-content-center">
        
            <div class="col-lg-6 col-sm-12 mb-4 mr-sm-0 mr-lg-4 text-center">
                <img class="contact-img" src="assets/img/k-world-2.jpg" alt="мереживо">
            </div>
        
            <div class="col-auto mb-4">
                <h5>магазин “Кравецький світ”</h5>
                <p class="mt-2">
                  м.Івано-Франківськ вул. Новгородська, 31<br>
                  тел. (0342) 77-96-93<br>
                  email: <a href="mailto:info@dodatky.com.ua">info@dodatky.com.ua</a>
                </p>
                
                
                <h5 class="pt-4">Графік роботи:</h5>
                <p>
                  Пн.-Пт. з 9:00 до 18:00<br>
                  Субота з 9:00 до 17:00<br>
                  Неділя <strong>Вихідний</strong>
                </p>
            </div>
        
        
        
            <div class="col-lg-6 col-sm-12 mb-4 mr-sm-0 mr-lg-4 text-center">
                <img class="contact-img" src="assets/img/k-dodatky-2.jpg" alt="муліне DMC">
            </div>
            
            <div >
                
                <div class="col-12 mb-4">
                    <h5>магазин “Кравецький додатки”</h5>
                    <p class="mt-2">
                      м.Івано-Франківськ вул. Новгородська, 25<br>
                      email: <a href="mailto:info@dodatky.com.ua">info@dodatky.com.ua</a>
                    </p>
                </div>
                
                <div class="col-auto mb-4">
                    <h5 class="pt-lg-3">Графік роботи:</h5>
                    <p class="mt-2">
                      Пн.-Пт. з 9:30 до 18:00<br>
                      Субота з 9:30 до 17:00<br>
                      Неділя <strong>Вихідний</strong>
                    </p>
                </div>
            
            </div>
        
        </div>
            
  
  
  
  
            
        <?php
        if ( isset($_POST['send-message']) )
        {
            $result_send_mail = send_mail(
              'info@dodatky.com.ua', // Кому
              $_POST['name'], // Від Кого Ім'я
              $_POST['email'], // Від Кого Email
              'Повідомлення з сайту Кравецькі додатки', // Тема Повідомлення
              $_POST['message'] // Текст Повідомлення
            );
        }
        
        
        
        function send_mail( $to, $name, $email, $subject, $message )
        {
            // Провіряємо поля на наявність помилок.
            if ( empty($message) )
            $message_status = 'Текст повідомлення відсутній';
            else
            $message = test_input($message);
        
            if ( empty($email) )
            $message_status = 'Email адрес відсутній';
            elseif ( test_input($email) && !preg_match("/^[a-z0-9_.-]+@([a-z0-9]+.)+[a-z]{2,6}$/i", $email) )
            $message_status = 'Email адресу введено неправильно';
        
            if ( empty($name) )
            $message_status = "Ім'я відсутнє";
            else
            $name =  test_input($name);
        
            if( empty($message_status) )
            {
                $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
                $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
                $headers .= "From: ".$name." <". $email .">\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
        
                $message = "Від: ".$name."\r\nEmail: ".$email."\r\n\r\n".$message;
        
                $send_mail = mail( $to, $subject, $message, $headers );
        
                if( $send_mail )
                {
                    $message_status = 'Ваше повідомлення успішно відправлено';
        
                    unset($_POST);
                    /*
                    // Зроблено для того, щоб чистити поля після успішної відправки листа
                    $POST['name'] = $_POST['name'];
                    $POST['email'] = $_POST['email'];
                    $POST['message'] = $_POST['message'];
                    */
                }
                else
                {
                    $message_status = 'Помилка! Спробуйте пізніше';
                }
            }
        
            return $message_status;
        }
        
        
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>


            
        <h1 id="contact" class="text-center">Контактна форма</h1>
		<div class="h-line mx-auto"></div>
		
		<div class="row mx-auto">

            <?php if ( !empty($result_send_mail) ) echo '<div class="col-12 text-center mb-4 font-weight-bold text-secondary">' . $result_send_mail . '</div>'; ?>
            
    		<div class="col-lg-5 col-md-7 col-sm-9 col-10 mx-auto mb-4">
        		<form action="#contact" method="post">
            		
                  <div class="form-group">
                    <label for="ContactFormName">Ім’я</label>
                    <input type="text" name="name" class="form-control" id="ContactFormName" aria-describedby="emailHelp" value="<?php if ( !empty($_POST['name']) ) echo $_POST['name']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="ContactFormEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="ContactFormEmail" aria-describedby="emailHelp" value="<?php if ( !empty($_POST['email']) ) echo $_POST['email']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="ContactFormMessage">Повідомлення</label>
                    <textarea class="form-control" name="message" id="message" rows="3"><?php if ( !empty($_POST['message']) ) echo $_POST['message']; ?></textarea>
                  </div>
                  
                  <button type="submit" name="send-message" class="submit-button">НАДІСЛАТИ</button>
                  
                </form>
    		</div>
			
		</div>

    </div><!-- /container -->



    <footer class="footer-bg">
      <div class="container footer-main">
        <div class="row">

          <div class="col-md d-none d-md-block text-uppercase">
            <nav>
              <a href="/products">Асортимент</a>
              <a href="/services">Послуги</a>
              <a href="/about_us">Про нас</a>
              <a href="/contacts">Контакти</a>
            </nav>
          </div>

          <div class="col-auto mx-auto">
            <span>© Кравецькі додатки, 1994</span>
          </div>

        </div>
      </div>
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/retina.min.js"></script>
  </body>
</html>