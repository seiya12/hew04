@extends('layout.admin')

<!-- head -->
@section('title', 'Admin')
@section('style')
<!-- <link rel="stylesheet" href="{{asset('css/admin.css')}}" /> -->

@endsection
@include('common.admin_head')
<!-- header -->
@include('common.admin_header')

<!-- content -->
@section('content')
<div class="row">
  <div class="col-lg-9 main-chart">
    <!--CUSTOM CHART START -->
    <div class="border-head">
      <h3>USER VISITS</h3>
    </div>
    <div class="custom-bar-chart">
      <ul class="y-axis">
        <li><span>10.000</span></li>
        <li><span>8.000</span></li>
        <li><span>6.000</span></li>
        <li><span>4.000</span></li>
        <li><span>2.000</span></li>
        <li><span>0</span></li>
      </ul>
      <div class="bar">
        <div class="title">JAN</div>
        <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">100%</div>
      </div>
      <div class="bar ">
        <div class="title">FEB</div>
        <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
      </div>
      <div class="bar ">
        <div class="title">MAR</div>
        <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
      </div>
      <div class="bar ">
        <div class="title">APR</div>
        <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
      </div>
      <div class="bar">
        <div class="title">MAY</div>
        <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
      </div>
      <div class="bar ">
        <div class="title">JUN</div>
        <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
      </div>
      <div class="bar">
        <div class="title">JUL</div>
        <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
      </div>
    </div>
    <!--custom chart end-->
    <div class="row mt">
      <!-- SERVER STATUS PANELS -->
      <div class="col-md-4 col-sm-4 mb">
        <div class="grey-panel pn donut-chart">
          <div class="grey-header">
            <h5>SERVER LOAD</h5>
          </div>
          <canvas id="serverstatus01" height="120" width="120"></canvas>
          <script>
            var doughnutData = [{
                value: 70,
                color: "#FF6B6B"
              },
              {
                value: 30,
                color: "#fdfdfd"
              }
            ];
            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
          </script>
          <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
              <p>Usage<br/>Increase:</p>
            </div>
            <div class="col-sm-6 col-xs-6">
              <h2>21%</h2>
            </div>
          </div>
        </div>
        <!-- /grey-panel -->
      </div>
      <!-- /col-md-4-->
      <div class="col-md-4 col-sm-4 mb">
        <div class="darkblue-panel pn">
          <div class="darkblue-header">
            <h5>支払方法割合</h5>
          </div>
          <canvas id="serverstatus02" height="120" width="120"></canvas>
          <script>
            var doughnutData = [{
                value: {{ $pointOrCash['parCash'] }},
                color: "#1c9ca7"
              },
              {
                value: {{ $pointOrCash['parPoint'] }},
                color: "#f68275"
              }
            ];
            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
          </script>
          <p>総支払額 ¥{{ number_format($pointOrCash['totalPay']) }}</p>
          <footer>
            <div class="pull-left">
              <h5 style="color:#f68275">{{ $pointOrCash['parPoint'] }}<span style="font-size:0.6em;">%</span> Point</h5>
            </div>
            <div class="pull-right">
              <h5 style="color:#1c9ca7">{{ $pointOrCash['parCash'] }}<span style="font-size:0.6em;">%</span> Cash</h5>
            </div>
          </footer>
        </div>
        <!--  /darkblue panel -->
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4 col-sm-4 mb">
        <!-- REVENUE PANEL -->
        <div class="green-panel pn">
          <div class="green-header">
            <h5>REVENUE</h5>
          </div>
          <div class="chart mt">
            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
          </div>
          <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
        </div>
      </div>
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->

    <div id="morris">
      <div class="row mt">
        <div class="col-lg-6">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Chart Example 1</h4>
            <div class="panel-body">
              <div id="hero-graph" class="graph"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Chart Example 2</h4>
            <div class="panel-body">
              <div id="hero-bar" class="graph"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt">
        <div class="col-lg-6">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Chart Example 3</h4>
            <div class="panel-body">
              <div id="hero-area" class="graph"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Chart Example 4</h4>
            <div class="panel-body">
              <div id="hero-donut" class="graph"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- /col-lg-9 END SECTION MIDDLE -->
  <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->
  <div class="col-lg-3 ds">
    <!-- CALENDAR-->
    <div id="calendar" class="mb">
      <div class="panel green-panel no-margin">
        <div class="panel-body">
          <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
            <div class="arrow"></div>
            <h3 class="popover-title" style="disadding: none;"></h3>
            <div id="date-popover-content" class="popover-content"></div>
          </div>
          <div id="my-calendar"></div>
        </div>
      </div>
    </div>
    <!-- / calendar -->
  </div>
  <!-- /col-lg-3 -->
</div>
<!-- /row -->
@endsection

<!-- footer -->
@include('common.admin_footer')