@extends('/admin/layouts/master',['title'=>'Mahasiswa'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
  <div class="modal fade" id="verif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alert</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			apakah yakin ingin memverifikasi?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="btnVerif" class="btn btn-danger" data-id="" data-dismiss="modal">Confirm</button>
			</div>
		</div>
	</div>
</div>
 <!-- ############ PAGE START-->
<div class="padding">
    <div class="box">
      <div class="box-header">
        <a href="mahasiswa/create" class="btn btn-success">Create</a>
        <small>List Mahasiswa</small>
        {{-- <div class="form-group">
            <select class="form-control" name="" id="selectfilter">
                <option value="" >--All--</option>
            </select>
        </div> --}}
      </div>
      <div class="p-3 ">
        <table id="example"  class="table hasil table-striped table-bordered dt-responsive nowrap">
          
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

