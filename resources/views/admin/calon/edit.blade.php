@extends('/admin/layouts/master',['title'=>'Edit Calon'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
 <!-- ############ PAGE START-->
<div class="padding">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h2>Create Calon</h2>
          </div>
          <div class="box-divider m-0"></div>
          <div class="box-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="Nama">Nama Panggilan</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama Panggilan">
                  </div>
                  <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea name="visi" id="editor1" class="form-control" rows="10" cols="80" placeholder="Masukkan Visi">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="editor1" class="form-control" rows="10" cols="80" placeholder="Masukkan Misi">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="Jenis Calon">Jenis Calon</label>
                    <select name="jenis_calon" id="" class="form-control">
                        <option value="" disabled hidden selected>Pilih Jenis</option>
                        <option value="SMFT">SMFT</option>
                        <option value="BMFT">BMFT</option>
                    </select>
                  </div>
                  
              <div class="form-group">
                <label for="exampleInputFile">Foto</label>
                <input type="file" id="exampleInputFile" class="form-control" name="photo_url">
              </div>
            
              <button type="submit" class="btn white m-b">Submit</button>
            </form>
          </div>
        </div>
      </div>
     
  <!-- ############ PAGE END-->

    </div>
  </div>



@endsection

