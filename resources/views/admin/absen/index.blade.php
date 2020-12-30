@extends('/admin/layouts/master',['title'=>'Absen'])
@section('content')
<div ui-view class="app-body" id="view">

    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h4 style="position: relative;top:10px">Absen Mahasiswa</h4>
            </div>
            <hr>
            <div class="p-3 ">
                <table id="absen" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Program Studi</th>
                            <th class="text-center">Status Absen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absen as $item)

                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nim}}</td>
                            <td>{{$item->nama_prodi}}</td>
                            <td class="text-center"> <span>&#10004;</span> </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
    $(document).ready(function() {
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
            }],
        });
    });
</script>
@endsection