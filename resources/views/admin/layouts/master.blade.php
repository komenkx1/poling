<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{$title ?? ''}}</title>
  <meta name="Admin Musma" content="Admin" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/img/apple-icon-precomposed.png">
  <meta name="apple-mobile-web-app-title" content="AdminMusma">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/img/apple-icon-precomposed.png">

  <!-- style -->
  <link rel="stylesheet" href="/../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/../assets/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

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
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">Built with Love v1.1.3</span>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src=" https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
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
  @yield('footer')

  <script>
    $(document).ready(function() {
      
      loaddata();
      var currentDate = new Date()
    var day = currentDate.getDate()
    var month = currentDate.getMonth() + 1
    var year = currentDate.getFullYear()
    var tbl = $('#absen');

    var d = day + "-" + month + "-" + year;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('#calon').DataTable({
        order : false,
      });
      $('#absen').DataTable({
        order : false,
        dom: 'Bfrtip',
        buttons: [{
          extend: 'excelHtml5',
          className: 'btn btn-danger',
          text: 'Export to excel',
          title: 'ABSEN MUSMA TEKNIK - '+d,
          filename: 'absen musma - '+d,
          init: function(api, node, config) {
       $(node).removeClass('dt-button')
    },
          exportOptions: {
            rows: {
          search: 'applied'
        },
            orthogonal: 'export',
            columns: [0,1, 2,3]
          }
        }
      ],
     
    });
    
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": false,
        initComplete: function() {
          this.api().columns("3").every(function() {
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
      });

      $(".dataTable").on('click','.trash', function () { 
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var title = document.getElementById("myModalLabel");
        title.innerHTML = "Data : "+ nama;
        $('#modalDelete').attr('action', '/admin/calon/delete/' + id);
      });
          
      $('#nim').keyup(function(){ 
        var query = $(this).val();
        if(query != ''){
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
          
      $("[data-fancybox]").fancybox();

      $(document).on("click", '.btn-verif',function(){ 
          var id = $(this).data('id');
          $('#btnVerif').attr('data-id', id)
          $('#verif').modal('show');
      });

      $(document).on("click", '.btn-delete',function(){ 
          var id = $(this).data('id');
          $('#btnDelete').attr('data-id', id)
          $('#delete').modal('show');
      });

      $(document).on("click",'#btnVerif',function(){
        event.preventDefault()
        var data = $(this).attr('data-id');
        console.log(data);
        var table = $('#example').DataTable(); 

        $.ajax({
          url: '/admin/mahasiswa/verif/' + data,
          type: 'put',
          data: data,
          success: function(data){
            loaddata();

          },
          error: function(data) {
            var errors = data.responseJSON;
            console.log(errors);
          }
        });
      })
      $(document).on("click",'#btnDelete',function(){
        event.preventDefault()
        var data = $(this).attr('data-id');
        console.log(data);

        $.ajax({
          url: '/admin/mahasiswa/delete/' + data,
          type: 'delete',
          data: data,
          success: function(data){
            loaddata();
            $('#alert').modal('show');

          },
          error: function(data) {
            var errors = data.responseJSON;
            console.log(errors);
          }
        });
      })
      function loaddata(){
        $.ajax({
        url: '/admin/mahasiswa/data',
        type: 'get',
        dataType: 'html',
        success: function(data){
          // Destroy existing table
          $('#example').DataTable().destroy();
          
          $('.hasil').html(data);
          // Initialize the table
          $('#example').DataTable({
            "bStateSave": true,
            "fnStateSave": function (oSettings, oData) {
              localStorage.setItem('example', JSON.stringify(oData));
            },
            "fnStateLoad": function (oSettings, oData) {
              return JSON.parse(localStorage.getItem('example'));
            }
          });
        },
        error: function(data) {
          var errors = data.responseJSON;
          console.log(errors);
        }});
      };
    });
  </script>

</body>

</html>