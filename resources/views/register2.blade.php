<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/vendor/line-awesome-1.3.0/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="containers sign-up-mode">
    <div class="signin-signup">
      <form method="POST" action="{{ route('login') }}" class="sign-in-form">
        @csrf

        <h2 class="title">Sign in</h2>
        <div class="row">
          <div class="input-field col-md-12">
            <label>Your Nim</label>
            <div class="pom-agile">
              <span class="fa fa-user"></span>
              <input placeholder="Your Nim" type="text" name="nim" required="">
            </div>
          </div>
          <div class="input-field col-md-12">
            <label>password</label>
            <div class="pom-agile">
              <span class="fa fa-envelope-open"></span>
              <input placeholder="password" name="password" type="password" required="">
            </div>
          </div>
        </div>
        <input type="submit" value="Login" class="bton" />
        <p class="d-block d-lg-none d-md-none text-center"> belum memiliki akun? silahkan daftar <a class=" "
            id="sign-up-btpn">
            disini
          </a></p>

      </form>
      <form method="POST" action="{{ route('register.create') }}" class="sign-up-form" enctype="multipart/form-data"
        id="myForm1" autocomplete="off">
        @csrf
        <h2 class="title">Sign Up</h2>
        <div class="row">
          <div class="input-field col-md-12">
            <label>Your Nim</label>
            <div class="pom-agile">
              <span class="fa fa-user"></span>
              <input placeholder="Your Nim" name="nim" id="nim" type="text" required="">
            </div>
            <div class="" id="nimList">
            </div>
          </div>
          <div class="input-field col-md-6">
            <label>Password</label>
            <div class="pom-agile">
              <span class="fa fa-key"></span>
              <input type="password" name="password" placeholder="Pasword" id="pwdId" class="form"
                pattern="^[0-9a-zA-Z]{2,30}$" required>
              <div class="valid-feedback text-right">Valid</div>
              <div class="invalid-feedback  text-right">(2 to 30 long)</div>
            </div>
          </div>
          <div class="input-field col-md-6">
            <label>Confirm Password</label>
            <div class="pom-agile">
              <span class="fa fa-key"></span>
              <input type="password" name="password_confirmation" placeholder="Confirm Password" id="cPwdId"
                class="form myCpwdClass" pattern="^[0-9a-zA-Z]{2,30}$" required>

              <div id="cPwdValid" class="valid-feedback text-right">Passwords Match</div>
              <div id="cPwdInvalid" class="invalid-feedback  text-right">a to z only (2 to 6 long)</div>
            </div>
          </div>

          <div class="form-style-agile col-md-12 pb-2">
            <label>Scan KTM/KRM/UKT Ku</label>
            <div class="pom-agile">
              <label class="text-left font-" for="customFile" id="custom-File" style="line-height: 2">Choose
                file</label>
              <input placeholder="Masukan Foto" name="file_url" type="file" id="customFile" required>
              <span class="fa fa-folder" style="line-height: 2"></span>
              <div id="fileInvalid" class="invalid-feedback">a to z only (2 to 6 long)</div>
            </div>
          </div>
        </div>
        <input type="submit" value="Submit" id="submitBtn" class="bton justify-content-center gx-auto">
        <p class="d-block d-lg-none d-md-none text-center"> belum memiliki akun? silahkan daftar <a class=""
            id="sign-in-btpn">
            disini
          </a></p>

    </div>

    </form>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Belum Meiliki Akun ?</h3>
          <p>
            Silahkan Daftar Terlebih Dahulu Melalui Tombol Di Bawah Ini
          </p>
          <button class="bton transparent" id="sign-up-bton">
            Sign up
          </button>
        </div>
        <img src="/img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Sudak Memiliki Akun ?</h3>
          <p>
            Silahkan Melakukan Sign In Melalui Tombol Di Bawah Ini
          </p>
          <button class="bton transparent" id="sign-in-bton">
            Sign in
          </button>
        </div>
        <img src="/img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
  <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>
  <script src="/js/app.js"></script>
  <script src="/js/auth.js"></script>

  <script>
    $(document).ready(function(){
      
        $('#nim').keyup(function(){ 
    var query = $(this).val();
    if(query != '')
    {
     var _token = $('input[name="_token"]').val();
     $.ajax({
      url:"{{ route('autocomplete.fetch') }}",
      method:"POST",
      data:{query:query, _token:_token},
      success:function(data){
       $('#nimList').fadeIn();  
                $('#nimList').html(data);
      }
     });
    }
});

$(document).on('click', 'li', function(){  
    $('#nim').val($(this).text().replace(/[^0-9\.]/g, ''));  
    $('#nimList').fadeOut();  
});
      
      });
  </script>
  <script>
    (function($) {
    $.fn.inputFilter = function(inputFilter) {
      return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    };
  }(jQuery));
  
  
  // Install input filters.
  $("#nim").inputFilter(function(value) {
    return /^-?\d*$/.test(value); });
  </script>

  <script>
    $('#customFile').on("change",function() {
        console.log("change fire");
       var i = $(this).prev('label').clone();
        var file = $('#customFile')[0].files[0].name;
     console.log(file);
        $(this).prev('label').text(file);
     
      });
  </script>
</body>

</html>