@extends('/admin/layouts/master',['title'=>'Mahasiswa'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
 <!-- ############ PAGE START-->
<div class="padding">
    <div class="box">
      <div class="box-header">
        <a href="mahasiswa/create" class="btn btn-success">Create</a>
        <small>List Mahasiswa</small>
        <div class="form-group">
            <select class="form-control" name="" id="selectfilter">
                <option value="" >--All--</option>
            </select>
        </div>
      </div>
      <div class="p-3">
         
        <table id="example"  class="table table-striped table-bordered dt-responsive nowrap">
          <thead>
            <tr>
                <th>
                   Nama
                </th>
                <th>
                    Nim
                </th>
                <th>
                    File
                </th>
                <th>
                    Status
                </th>
                <th>
                    Verified At
                </th>
                <th class="text-center">
                  Action
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach ($mahasiswa as $item)
            <tr>
                <td>{{$item->user->name}}</td>
                <td>{{$item->user->nim}}</td>
                <td> <a href="{{$item->takeimage}}" data-fancybox="gallery" data-caption="{{$item->name}}" ><img src="{{$item->takeimage}}" alt="avatar" style="max-width: 100px"></a></td>
                <td>{{$item->status}}</td>
                <td>{{$item->verified_at}}</td>
                <form action="/admin/mahasiswa/verif/{{$item->id}}" method="POST">
                  @method('put')
                  @csrf
                <input type="hidden" value="{{$item->id}}" name="id">
            <td>@if($item->status == 'terverifikasi' || $item->status == 'voted'  ) <div class=" text-center"><i class="fa fa-check"></i></div> @else<div class=" text-center"><button class="btn btn-danger">Verif</button></div>@endif</td>
                </form>
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

