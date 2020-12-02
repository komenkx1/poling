@extends('/admin/layouts/master',['title'=>'Dashboard'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
      
<!-- ############ PAGE START-->

<div class="row no-gutter">
  <div class="col-md-5 col-lg-4 v-b">
    <div class="padding">
      <div class="box">
        <div class="box-header b-b">
          <h3 class="text-u-c text-muted">Posisi Sementara</h3>
        </div>
        <ul class="list inset">
          <div class="title-post mt-3">
            <h4 class="ml-3">SMFT</h4>
          </div>
          <hr>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle danger">
                <strong class="text-lg">1</strong>
              </span>
            </a>
            <div class="list-body">
              <div ><a href class="_600 ">East Asia &amp; Pacific</a>
              </div>
              <small class="text-muted">Vote : 300 </small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">2</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">Europe &amp; Central Asia</a></div>
            </div>
            <small class="text-muted">Vote : 300 </small>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">3</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">Latin America &amp; Caribbean</a></div>
            </div>
            <small class="text-muted">Vote : 300 </small>
          </li>
          <hr>
          <div class="title-post">
            <h4 class="ml-3">BPMFT</h4>
          </div>
          <hr>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle danger lt">
                <strong class="text-lg text-muted">1</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">Middle East &amp; North Africa</a></div>
            </div>
            <small class="text-muted">Vote : 300 </small>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">2</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">South Asia</a></div>
            </div>
            <small class="text-muted">Vote : 300 </small>
          </li>
        </ul>
      </div>
     
    </div>
  </div>
  <div class="col-md-7 col-lg-8 v-b">
    <div class="padding">
      <div class="box chart">
        <div class="box-header b-b">
          <h3 class="text-u-c text-muted">Rincian Vote</h3>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [{data: 800, label: &#x27;Memilih&#x27;}, {data: 200, label: &#x27;Golput&#x27;}],
            {
              series: { pie: { show: true, innerRadius: 0, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
              legend: {backgroundColor: 'transparent'},
              colors: ['#0cc2aa','#fcc100'],
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },   
              tooltip: true,
              tooltipOpts: { content: '%s: %p.0%' }
            }
          " style="height:465px"></div>
        </div>
      </div>
    </div>
      </div>
  <div class="col-md-7 col-lg-12 v-b">
    <div class="padding">
      <div class="box chart">
        <div class="box-header b-b">
          <h3 class="text-u-c text-muted">Rincian Vote</h3>
        </div>
        <div class="row p-3 p-lg-5">
        <div class="item col-md-6">
          <p for="charSMFT" class="text-center font-weight-bold"># Vote SMFT</p>
          <canvas id="smft" width="250" height="150"></canvas>
        </div>
        <div class="item col-md-6">
          <p for="charSMFT" class="text-center font-weight-bold"># Vote BPMFT</p>
          <canvas id="bpmft" width="250" height="150" ></canvas>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  

@endsection