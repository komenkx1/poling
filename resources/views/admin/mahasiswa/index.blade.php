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
                <th data-toggle="true">
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th data-hide="phone,tablet">
                    Job Title
                </th>
                <th data-hide="phone,tablet" data-name="Date Of Birth">
                    DOB
                </th>
                <th data-hide="phone">
                    Status
                </th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
                <td>Easer</td>
                <td>Dragoo</td>
                <td>Drywall Stripper</td>
                <td data-value="250833505574">13 Dec 1977</td>
                <td >Active</td>
            </tr>
            <tr>
                <td>Maple</td>
                <td>Halladay</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td data-value="694116650726">30 Dec 1991</td>
                <td>sds</td>
                </td>
            </tr>
            
            <tr>
                <td>Lorraine</td>
                <td>Mcgaughy</td>
                <td>Hemodialysis Technician</td>
                <td data-value="437400551390">11 Nov 1983</td>
                <td data-value="2"><span title="Disabled">Disabled</td>
            </tr>
      
            <tr>
                <td>Judi</td>
                <td>labeltt</td>
                <td>Electrical Lineworker</td>
                <td data-value="362134712000">23 Jun 1981</td>
                <td>Active</td>
            </tr>
 
          </tbody>
          <tfoot class="hide-if-no-paging">
            <tr>
                <td colspan="5" class="text-center">
                    <ul class="pagination"></ul>
                </td>
            </tr>
          </tfoot>
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

