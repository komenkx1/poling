<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{$title ?? ''}}</title>
  <meta name="Admin Musma" content="Admin" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="AdminMusma">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/../assets/images/logo.png">

  <!-- style -->
  <link rel="stylesheet" href="/../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css ">

  <link rel="stylesheet" href="/../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="/../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/../assets/styles/font.css" type="text/css" />
  @yeild("head")
</head>

<body>
  <div class="app" id="app">

    @include('admin/layouts/sidebar')
    @include('admin/layouts/navigation')
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="/../">About</a>
          <a class="nav-link" href="/http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    @yield('content')
  </div>
  </div><!-- /.container-fluid -->



  <!-- build:js scripts/app.html.js -->
  <!-- jQuery -->
  <script src="/../libs/jquery/jquery/dist/jquery.js"></script>
  <!-- Bootstrap -->
  <script src="/../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <!-- core -->
  <script src="/../libs/jquery/underscore/underscore-min.js"></script>
  <script src="/../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/../libs/jquery/PACE/pace.min.js"></script>
  <script src="/html/scripts/config.lazyload.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
  <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
  <script src="/html/scripts/ui-jp.js"></script>
  <script src="/html/scripts/ui-include.js"></script>
  <script src="/html/scripts/ui-device.js"></script>
  <script src="/html/scripts/ui-form.js"></script>
  <script src="/html/scripts/ui-nav.js"></script>
  <script src="/html/scripts/ui-scroll-to.js"></script>
  <script src="/html/scripts/ui-toggle-class.js"></script>
  <script src="/html/scripts/palette.js"></script>
  <script src="/html/scripts/ui-load.js"></script>
  <script src="/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/html/scripts/app.js"></script>
  <script src="/js/custom.js"></script>


  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
         initComplete: function() {
        this.api().columns("4").every(function() {
          var column = this;
          var select = $('#selectfilter')
            .appendTo($("#selectfilter"))
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
          });
        });
         }
      } );
} );
  </script>
  <script>
    $(document).ready(function() {

$(".dataTable").on('click','.trash', function () { 
var id = $(this).data('id');
var nama = $(this).data('nama');
var title = document.getElementById("myModalLabel");
title.innerHTML = "Data : "+ nama;
$('#modalDelete').attr('action', '/admin/calon/delete/' + id);
});
  });
  </script>
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1' );
  </script>
  <script>
    $(document).ready(function(){
    
      $('#nim').keyup(function(){ 
  var query = $(this).val();
  if(query != '')
  {
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('calon.fetch') }}",
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
  <!-- endbuild -->
</body>

</html>