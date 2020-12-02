@extends('/admin/layouts/master',['title'=>'Calon'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
 <!-- ############ PAGE START-->
<div class="padding">
    <div class="box">
      <div class="box-header">
        <a href="calon/create" class="btn btn-success">Create</a>
        <small>List Mahasiswa</small>
        {{-- <div class="form-group">
            <select class="form-control" name="" id="selectfilter">
                <option value="" >--All--</option>
            </select>
        </div> --}}
      </div>
      <div class="p-3">
         
        <table id="example"  class="table table-striped table-bordered dt-responsive nowrap">
          <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Prodi</th>
                <th>Jenis calon</th>
                <th>Photo</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($calon as $item)
          <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Delete Confirmation</h3>

                </div>
                <div class="modal-body">
                  <p class="error-text"><i class="fa fa-warning modal-icon"></i>apakah anda yakin ingin menghapus item ini?

                </div>
                <div class="modal-footer">
                    <form id="modalDelete" action="#" method="post">
                    @method('delete')
                    @csrf
                  <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button> <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
            <tr>
                <td>{{$item->nim}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->visi}}</td>
                <td>{{$item->misi}}</td>
                <td>{{$item->prodi->nama_prodi}}</td>
                <td>{{$item->jenis_calon}}</td>
                <td>{{$item->photo_url}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><a class="btn btn-primary" href="/admin/calon/edit/{{$item->id}}">Edit</a> | <a href="#myModal" class="trash btn btn-danger" data-id="{{$item->id}}" data-nama="{{$item->nama}}" role="button" data-toggle="modal">Hapus</a>
                
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

