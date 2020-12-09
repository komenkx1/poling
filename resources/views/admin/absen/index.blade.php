@extends('/admin/layouts/master',['title'=>'Absen'])
@section('content')

<!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
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

<!-- ############ PAGE END-->

</div>
</div>
<!-- / -->

<!-- theme switcher -->


@endsection