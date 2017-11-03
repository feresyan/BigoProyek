<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bigo admin</title

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="cotn_principal">
    <a href="{{ url('/') }}"><button class="btn_home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button></a>
  </div>
    <div class="cont_centrar">
      <div class="cont_login">

        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
              <div class="cont_ba_opcitiy">
                <h2>LOGIN</h2>
                <p>Log in to your account.</p>
                <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
              </div>
          </div>

          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>
              <p>Make new accont</p>
              <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
            </div>
          </div>
        </div>

        <div class="cont_back_info">
           <div class="cont_img_back_grey">
             <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
           </div>
        </div>

        <div class="cont_forms" >
          <div class="cont_img_back_">
            <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
          </div>

          <form class="" action="{{route('login')}}" method="POST">
            <div class="cont_form_login">
              {{ csrf_field() }}
              <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
              <h2>LOGIN</h2>
              <input type="text" placeholder="Email" name="email" />
              <input type="password" placeholder="Password" name="password" />
              <button type="submit" class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
          </form>

          <form class="" action="{{ route('register') }}" method="POST">
            <div class="cont_form_sign_up">
              {{ csrf_field() }}
              <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
              <h2>SIGN UP</h2>
              <input type="text" placeholder="Name" name="name" id="name" />
              <input type="text" placeholder="Email" name="email" id="email" />
              <input type="password" placeholder="Password"  name="password" id="password" />
              <input type="password" placeholder="Password Confirmation" name="password_confirmation" id="password-confirm"/>
              <button type="submit" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
            </div>
          </form>

        </div> <!-- END CONT_FORM_LOGIN -->
      </div>
    </div>
  </div><!--END cotn_principal -->

    <script  src="js/index.js"></script>

</body>
</html>
