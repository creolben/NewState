@extends('master')

@section('content')
    <div class='row'>
      <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src={{ asset("/bower_components/AdminLTE/dist/img/avatar.png") }}  alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src={{ asset("/bower_components/AdminLTE/dist/img/house1.jpg") }} alt="Photo">

              <p> Address: {{$address}} </p>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <p> zestimate: {{$zestimate}} </p>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <div class="box-comment">
                <!-- User image -->
                <p> zestimate: {{$zestimate}} </p>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src={{ asset("/bower_components/AdminLTE/dist/img/avatar.png") }} alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Randomly Generated Tasks</h3>
                    <p> zpid: {{ $zpid }} </p>
                    <p> Address: {{$address}} </p>
                    <p> zestimate: {{$zestimate}} </p>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @foreach($tasks as $task)
                        <h5>
                            {{ $task['name'] }}
                            <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}%</small>
                        </h5>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
                        </div>
                    @endforeach

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </div><!-- /.col -->
        <div class='col-md-6'>
            
       <div class="box box-solid bg-teal-gradient">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"><svg height="250" version="1.1" width="454.15625" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.828125px; top: -0.59375px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text x="40" y="213.5" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" style="text-anchor: end; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">0</tspan></text><path fill="none" stroke="#efefef" d="M52.5,213.5H429.15625" stroke-width="0.4" style=""></path><text x="40" y="166.375" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" style="text-anchor: end; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">5,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,166.375H429.15625" stroke-width="0.4" style=""></path><text x="40" y="119.25" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" style="text-anchor: end; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">10,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,119.25H429.15625" stroke-width="0.4" style=""></path><text x="40" y="72.125" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" style="text-anchor: end; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">15,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,72.125H429.15625" stroke-width="0.4" style=""></path><text x="40" y="25" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" style="text-anchor: end; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">20,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,25H429.15625" stroke-width="0.4" style=""></path><text x="360.0647815300491" y="226" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" transform="matrix(1,0,0,1,0,5.75)" style="text-anchor: middle; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">2013</tspan></text><text x="192.5518201610045" y="226" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" font-weight="normal" transform="matrix(1,0,0,1,0,5.75)" style="text-anchor: middle; font-family: 'Open Sans'; font-size: 10px; font-weight: normal;"><tspan dy="3.46875">2012</tspan></text><path fill="none" stroke="#efefef" d="M52.5,188.37295C63.02200323717786,188.10905,84.06600971153358,189.9628194139298,94.58801294871145,187.31735C105.11478374512683,184.6706819139298,126.16832533795755,168.3756659685864,136.69509613437293,167.2044C147.11221306832564,166.0453347185864,167.94644693623107,180.23261805619134,178.36356387018378,177.996025C188.775913244899,175.76045555619135,209.6006119943294,151.5459784559326,220.0129613690446,149.31575C230.53496460622245,147.0620347059326,251.57897108057819,157.71631227349943,262.100974317756,160.06025C272.6277451141714,162.40524977349943,293.6812867070022,179.20740890052357,304.20805750341754,168.07150000000001C314.6251744373702,157.05159015052357,335.4594083052757,78.38880456703109,345.8765252392284,71.43697500000002C356.1744531922434,64.56468581703109,376.7703090982735,105.03530219258074,387.0682370512885,112.77502500000001C397.59024028846636,120.68315844258073,418.63424676282216,128.71505625,429.15625,134.0284" stroke-width="2" style=""></path><circle cx="52.5" cy="188.37295" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="94.58801294871145" cy="187.31735" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="136.69509613437293" cy="167.2044" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="178.36356387018378" cy="177.996025" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="220.0129613690446" cy="149.31575" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="262.100974317756" cy="160.06025" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="304.20805750341754" cy="168.07150000000001" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="345.8765252392284" cy="71.43697500000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="387.0682370512885" cy="112.77502500000001" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle><circle cx="429.15625" cy="134.0284" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style=""></circle></svg><div class="morris-hover morris-default-style" style="left: 176.9895238690446px; top: 82px; display: none;"><div class="morris-hover-row-label">2012 Q1</div><div class="morris-hover-point" style="color: #efefef">
  Item 1:
  6,810
</div></div></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="120" height="120" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background-image: none; font-style: normal; font-variant-caps: normal; font-weight: bold; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                  <div class="knob-label">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="120" height="120" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background-image: none; font-style: normal; font-variant-caps: normal; font-weight: bold; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="120" height="120" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background-image: none; font-style: normal; font-variant-caps: normal; font-weight: bold; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>

                  <div class="knob-label">In-Store</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          </div><!-- /end donut chart -->
    </div><!-- /.row -->
    <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="row">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 201.375px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 247.46875px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 219.09375px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 172.53125px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 123.578125px;">CSS grade</th></tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
@endsection