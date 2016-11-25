@extends('partner.main')
@section('content')
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content">
          <!-- BEGIN PAGE HEADER-->
          <!-- BEGIN THEME PANEL -->

          <!-- END THEME PANEL -->
          <!-- BEGIN PAGE BAR -->
          <div class="page-bar">
              <ul class="page-breadcrumb">
                  <li>
                      <span>Toolbox</span>
                      <i class="fa fa-circle"></i>
                  </li>
                  <li>
                      <span>Organizations</span>
                  </li>
              </ul>
              <div class="page-toolbar">
                  <div class="pull-right tooltips btn btn-sm">
                      <i class="icon-calendar"></i>&nbsp;
                      <span id="asdfg"></span>
                      <script>
                          var d = new Date();
                          var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                          var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                          var dow = days[d.getDay()];
                          var datex = d.getDate();
                          var month = months[d.getMonth()];
                          var year = d.getFullYear();
                          var fulldatex = dow+" "+datex+" "+month+" "+year;
                          document.getElementById("asdfg").innerHTML = fulldatex;
                      </script>
                      <!--<span class="thin uppercase hidden-xs"></span>&nbsp;
                      <i class="fa fa-angle-down"></i>-->
                  </div>
              </div>
          </div>
          <!-- END PAGE BAR -->
          <!-- BEGIN PAGE TITLE-->

          <div class="row " >
              <div class="col-md-4">
                  <h3 class="page-title">Organizations <small>Double click to add credits</small></h3>
              </div>
              <div class="col-md-8 ">
                  <div class="pull-right row" style="padding-right: 10px">
                      <div>



                      </div>
                  </div>
              </div>
          </div>


          <!-- END PAGE TITLE-->
          <!-- END PAGE HEADER-->
          <!-- BEGIN DASHBOARD STATS 1-->
          <div class="content row hidden" id="changeurl_Div" style="padding-left: 21px">
              <hr/>
              <form method="post">
                  <input type="text" hidden id="prodid" name="prodid">
                  <p class="bold lead m-t-0" style="padding-left: 8px; font-size:1.04em" id="orgname" name="orgname">Organisation Name</p>
                  <div class="form-group col-md-5">
                      <label class="control-label" for="urlold">Add Credits</label>
                      <div class="">
                          <input type="number" id="urlold" name="urlold" class="form-control input-sm" >
                      </div>
                  </div>
                  <!--<div class="form-group col-md-5">
                      <label class="control-label" for="urlnew">Add Credits</label>
                      <div class="">
                          <input type="text" id="urlnew" name="urlnew" class="form-control input-sm" placeholder="additional credit">
                      </div>
                  </div>-->
                  <div class="form-group col-md-2" style="padding-top: 24px;">
                      <button class="btn btn-danger waves-effect waves-light btn-sm">Cancel</button>
                      <button class="btn btn-success waves-effect waves-light btn-sm" id="changeurl" name="changeurl" >Change</button>
                  </div>
              </form>
              <hr/>
          </div>



          <div class="row">
              <div class="col-md-12">
                  <!-- BEGIN EXAMPLE TABLE PORTLET-->

                  </script>

                  <div class="table-both-scroll dataTables_wrapper">
                    <!--table-->
                    {!! $dataTable->table(['class' => 'cell-border display compact nowrap']) !!}
                  </div>
              </div>
          </div>

      </div>
      <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
  <!-- BEGIN QUICK SIDEBAR -->
  <!-- END QUICK SIDEBAR -->

@endsection

@section('pageLevelScripts')
          <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>

          <!-- DataTables -->
          <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
          <!-- Bootstrap JavaScript -->
          <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
          <!-- App scripts -->
          <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
          <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
          {{Html::script("vendor/datatables/buttons.server-side.js")}}
          {!! $dataTable->scripts() !!}
          <script type="text/javascript">
            $.fn.dataTable.ext.errMode = 'throw';
          </script>
@endsection

@section('pageLevelStyles')

    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->

         <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

         <!-- BEGIN PAGE LEVEL PLUGINS -->
         {{Html::style("assets/global/plugins/datatables/datatables.min.css")}}
         {{Html::style("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")}}
         <!-- END PAGE LEVEL PLUGINS -->
@endsection
