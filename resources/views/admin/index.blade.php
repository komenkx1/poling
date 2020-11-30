@extends('/admin/layouts/master',['title'=>'Dashboard'])
@section('content')

      <!-- Small boxes (Stat box) -->
<!-- ############ PAGE START-->
<div ui-view class="app-body" id="view">
      
<!-- ############ PAGE START-->
<div class="dker">
  <div class="tab-content tab-alt">
    <div class="tab-pane in active" id="world">
      <div class="padding">
        <div class="row-col">
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm">5,600</h1>
            <span class="inline l-h-1x">
              Markets <br>
              <small class="text-muted">From africa to asia</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm text-primary">31,000</h1>
            <span class="inline l-h-1x">
              Employees  <br>
              <small class="text-muted">From 16 countries</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x text-white text-shadow inline m-r-sm">4,300</h1>
            <span class="inline l-h-1x">
              Suppliers  <br>
              <small class="text-muted">From Nike to PE</small>
            </span>
          </div>
        </div>
      </div>
      <div style="height: 62vh" ui-jp="vectorMap" ui-options="{
        map: 'world_mill_en',
        markers: [{latLng: [52.5167, 13.3833], name: &#x27;Berlin&#x27;}, {latLng: [48.8567, 2.3508], name: &#x27;Paris&#x27;}, {latLng: [35.6833, 139.6833], name: &#x27;Tokyo&#x27;}, {latLng: [40.7127, -74.0059], name: &#x27;New York City&#x27;},{latLng: [49.2827, -123.1207], name: &#x27;City of Vancouver&#x27;},{latLng: [22.2783, 114.1747], name: &#x27;Hong Kong&#x27;},{latLng: [55.7500, 37.6167], name: &#x27;Moscow&#x27;},{latLng: [37.7833, -122.4167], name: &#x27;San Francisco&#x27;},{latLng: [39.9167, 116.3833], name: &#x27;Beijing&#x27;}],
        normalizeFunction: 'polynomial',
        backgroundColor: 'transparent',
        regionsSelectable: true,
        markersSelectable: true,
        regionStyle: {
          initial: {
            fill: 'rgba(120,130,140,0.2)'
          },
          hover: {
            fill: '#a88add',
            stroke: '#fff'
          },
        },
        markerStyle: {
          initial: {
            fill: 'rgba(0,0,0,0.1)',
            stroke: '#fff'
          },
          hover: {
            fill: '#0cc2aa',
            stroke: '#fff'
          }
        },
        series: {
          markers: [{
            attribute: 'fill',
            scale: ['#0cc2aa','#a88add', '#fcc100'],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          },{
            attribute: 'r',
            scale: [5, 20],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          }]
        }
      }" >
      </div>
    </div>
    <div class="tab-pane" id="usa">
      <div class="padding">
        <div class="row-col">
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm text-primary">580</h1>
            <span class="inline l-h-1x">
              Markets <br>
              <small class="text-muted">From africa to asia</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm">12,500</h1>
            <span class="inline l-h-1x">
              Employees  <br>
              <small class="text-muted">From 16 countries</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x text-white text-shadow inline m-r-sm">1,000</h1>
            <span class="inline l-h-1x">
              Suppliers  <br>
              <small class="text-muted">From Nike to PE</small>
            </span>
          </div>
        </div>
      </div>
      <div style="height: 62vh" ui-jp="vectorMap" ui-options="{
        map: 'us_aea_en',
        markers: [{latLng: [40.71, -74.00], name: &#x27;New York&#x27;},{latLng: [34.05, -118.24], name: &#x27;Los Angeles&#x27;},{latLng: [41.87, -87.62], name: &#x27;Chicago&#x27;},{latLng: [29.76, -95.36], name: &#x27;Houston&#x27;},{latLng: [39.95, -75.16], name: &#x27;Philadelphia&#x27;},{latLng: [38.90, -77.03], name: &#x27;Washington&#x27;},{latLng: [37.36, -122.03], name: &#x27;Silicon Valley&#x27;}],
        backgroundColor: 'transparent',
        regionsSelectable: true,
        markersSelectable: true,
        regionStyle: {
          initial: {
            fill: '#ffffff'
          },
          selected: {
            fill: '#f44455'
          }
        },
        series: {
          markers: [{
            attribute: 'fill',
            scale: ['#0cc2aa','#f77a99', '#6cc788'],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          },{
            attribute: 'r',
            scale: [5, 20],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          }]
        }
      }" >
      </div>
    </div>
  </div>
  <div class="row-col">
    <div class="col-xs-3 v-m nav-active-primary">
      <div class="p-a">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link p-x-sm active white" href data-toggle="tab" data-target="#world">
              <span class="h5 _700 l-s-n-2x">world</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-x-sm white" href data-toggle="tab" data-target="#usa">
              <span class="h5 _700 l-s-n-2x">usa</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-6 v-m text-center text-sm text-muted p-a">Worldwide map data from 1990 - 2010</div>
    <div class="col-xs-3 v-m text-right">
      <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[70,30], {type:'pie', height:22, sliceColors:['#0cc2aa','transparent']}" class="sparkline inline m-r"></span>
      <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[30,70], {type:'pie', height:22, sliceColors:['#0cc2aa','transparent']}" class="sparkline inline m-r"></span>
    </div>
  </div>
</div>
<div class="row no-gutter">
  <div class="col-md-5 col-lg-4">
    <div class="padding">
      <div class="box">
        <div class="box-header b-b">
          <h3 class="text-u-c text-muted">Top 5 Areas</h3>
        </div>
        <ul class="list inset">
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle primary">
                <strong class="text-lg">1</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">East Asia &amp; Pacific</a></div>
              <small class="text-muted">GDP (current US$) $12.57 trillion</small>
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
              <small class="text-muted">GDP (current US$) $1.811 trillion</small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">3</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">Latin America &amp; Caribbean</a></div>
              <small class="text-muted">GDP (current US$) $4.764 trillion</small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">4</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">Middle East &amp; North Africa</a></div>
              <small class="text-muted">GDP (current US$) $1.523 trillion</small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle light lt">
                <strong class="text-lg text-muted">5</strong>
              </span>
            </a>
            <div class="list-body">
              <div><a href class="_600">South Asia</a></div>
              <small class="text-muted">GDP (current US$) $2.608 trillion </small>
            </div>
          </li>
        </ul>
      </div>
      <div class="box row-col">
        <div class="row-cell p-a black lt">
          <a href>View the Europe economic</a>
        </div>
        <div class="row-cell p-a">
          <a href>View the South Asia economic</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 col-lg-8 v-b">
    <div class="padding">
      <div class="text-center m-b">
        <h6 class="text-u-c">The Global Economy in Transition</h6>
        <p class="text-muted">Focuses on financial flows, trends in external debt, and other major financial indicators</p>
      </div>
      <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
        [
          { 
            data: [[1, 10], [2, 8], [3, 27], [4, 25], [5, 50], [6, 30], [7, 25]], 
            points: { show: true, radius: 5}, 
            splines: { show: true, tension: 0.45, lineWidth: 4, fill: 0.1} 
          },
          { data: [[1, 10], [2, 8], [3, 27], [4, 25], [5, 50], [6, 30], [7, 25]], 
            bars: { show: true, barWidth: 0.05, align: 'center', lineWidth: 0, fillColor: { colors: [{ opacity: 0.1 }, { opacity: 0.1}] } } 
          }
        ], 
        {
          colors: ['#0cc2aa','#0cc2aa'],
          series: { shadowSize: 3 },
          xaxis: { show: true, font: { color: '#0cc2aa' }, position: 'bottom' },
          yaxis:{ show: false, font: { color: '#ccc' }},
          grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'transparent' },
          tooltip: true,
          tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
        }
      " style="height:360px" >
      </div>
      <div class="text-muted text-xs m-t"><span class="pull-right">2015</span>International Debt Statistics (IDS)</div>
    </div>
  </div>
</div>
<div class="row no-gutter">
  <div class="col-md-7 col-lg-8 light lt v-b">
    <div class="text-center p-a m-b-lg">
      <h6 class="text-u-c">Global Goals for a Better World</h6>
      <p class="text-muted"><em>2010 - 2015</em></p>
    </div>
    <div style="overflow: hidden">
      <div style="margin: 0 -2px">
        <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
          [
            { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
              points: { show: true, radius: 0}, 
              splines: { show: true, tension: 0.45, lineWidth: 0, fill: 0.8} 
            },
            { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
              points: { show: true, radius: 0}, 
              splines: { show: true, tension: 0.45, lineWidth: 0, fill: 1} 
            }
          ], 
          {
            colors: ['#0cc2aa','#0cc2aa'],
            series: { shadowSize: 3 },
            xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
            yaxis:{ show: false, font: { color: '#ccc' }},
            grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
            tooltip: true,
            tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
          }
        " style="height:140px" >
        </div>
      </div>
    </div>
    <div class="p-a-md primary">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="m-0 _600">98%</h3>
          <span class="text-muted">School enrollment</span>
        </div>
        <div class="col-sm-4">
          <h3 class="m-0 _600">75%</h3>
          <span class="text-muted">Financial Sector</span>
        </div>
        <div class="col-sm-4">
          <h3 class="m-0 _600">78%</h3>
          <span class="text-muted">PMI</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 col-lg-4 white">
    <ul class="list inset m-0">
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[70,30], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#0cc2aa']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Agriculture &amp; Rural Development</a></div>
          <small class="text-muted">Rural population (4% of total population)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[90,10], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Climate Change</a></div>
          <small class="text-muted">CO2 emissions (21kt)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[80,20], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Economy &amp; Growth</a></div>
          <small class="text-muted">Services, etc., value added (75% of GDP)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[75,25], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Education</a></div>
          <small class="text-muted">School enrollment, primary (120% gross)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[85,15], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Financial Sector</a></div>
          <small class="text-muted">Market capitalization of listed companies (45% of GDP)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[85,15], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Science &amp; Technology</a></div>
          <small class="text-muted">Research and development expenditure (2.12% of GDP)</small>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Boxed Layout</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
          <label class="p-a col-sm-6 light pointer m-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-sm-6 grey pointer m-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-sm-6 dark pointer m-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-sm-6 black pointer m-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>
    
    <div class="switcher box-color black lt" id="sw-demo">
      <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a>
      <div class="box-header">
        <h2>Demos</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="row no-gutter text-u-c text-center _600 clearfix">
          <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
            class="p-a col-sm-6 success">
            <span class="text-white">Zero</span>
          </a>
          <a href="dashboard.1.html"
            class="p-a col-sm-6 blue">
            <span class="text-white">One</span>
          </a>
          <a href="dashboard.2.html"
            class="p-a col-sm-6 warn">
            <span class="text-white">Two</span>
          </a>
          <a href="dashboard.3.html"
            class="p-a col-sm-6 danger">
            <span class="text-white">Three</span>
          </a>
          <a href="dashboard.4.html"
            class="p-a col-sm-6 green">
            <span class="text-white">Four</span>
          </a>
          <a href="dashboard.5.html"
            class="p-a col-sm-6 info">
            <span class="text-white">Five</span>
          </a>
          <div 
            class="p-a col-sm-6 lter">
            <span class="text">...</span>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
