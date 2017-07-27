@extends('layouts.backEnd')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="#">Home</a>
    </li>
    <li class="active">slider</li>
  </ul><!-- /.breadcrumb -->

  <div class="nav-search" id="nav-search">
    <form class="form-search">
      <span class="input-icon">
        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
        <i class="ace-icon fa fa-search nav-search-icon"></i>
      </span>
    </form>
  </div><!-- /.nav-search -->
</div>
<div class="page-content">
  @include('partials.backEnd.setting')
  <div class="page-header">
    <h1>
      Slide show
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        create slider
      </small>
    </h1>
  </div><!-- /.page-header -->

  <div class="row createSlide"  style="display:none;" >
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form class="form-horizontal" action="{{ url('/admin/create/slider')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">choose image slide</label>
          <div class="col-sm-6">
            <input type="file" name="imageSlide" class="id-input-file-3 col-sm-6" >

          </div>
          <div class="col-sm-3" >
            <a href="#"  class="close pull-right" >
							<i class="ace-icon fa fa-chevron-down"></i>
						</a>
          </div>

        </div>
          <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">choose background slide</label>
          <div class="col-sm-6">
            <input name="backgroundSlide" type="file" class="id-input-file-3 col-sm-6" >
          </div>

        </div>

        <div class="space-4"></div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title Slide </label>

          <div class="col-sm-9">
            <input type="text" id="form-field-1" name="title" class="col-sm-8" placeholder="Title Slide"  />
          </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> SubTitle Slide </label>

          <div class="col-sm-9">
            <input type="text" id="form-field-1" name="subTitle" class="col-sm-8" placeholder="SubTitle Slide"  />
          </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Short Description </label>

          <div class="col-sm-6">

              <textarea class="form-control " name="description" id="form-field-1-1" placeholder="Default Text"></textarea>
          </div>
        </div>

        <div class="space-4"></div>





        <div class="clearfix form-actions">
          <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
              <i class="ace-icon fa fa-check bigger-110"></i>
              Submit
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
              <i class="ace-icon fa fa-undo bigger-110"></i>
              Reset
            </button>
          </div>
        </div>

        <div class="hr hr-24"></div>



      </form>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->




      <div class="table-header">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-desktop" aria-hidden="true"></i> list Slider
          </div>


           <div class="col-md-6">
             <a  class=" dropForm btn pull-right">
               <i class="fa fa-plus-square-o " aria-hidden="true"></i> Create Form
             </a>

           </div>
        </div>

      </div>

      <!-- div.table-responsive -->

      <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="row">


              <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
												<thead>
                          <tr>
                            <th>No</th>
                            <th>Image Slider</th>
                            <th>Bacground Slider</th>
                            <th>Title</th>
                            <th>SubTitle</th>
                            <th>Description</th>

                            <th>Action</th>
                          </tr>
												</thead>

												<tbody>
                          @foreach ($sliders as $key => $slider)
                          <tr>
                            <td>{{ ($key + 1)  }} </td>
                            <td>
                              <img src="{{ asset($slider->imageSlide) }}" width="100" height="50" alt="">
                            </td>
                            <td>
                              <img src="{{ asset($slider->backgroundSlide) }}" width="100" height="50" alt="">
                            </td>
                            <td >{!! $slider->title !!}</td>
                            <td>{!! $slider->subTitle !!}</td>

                            <td >{!! $slider->description !!}</td>

                            <td>
                              <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                  <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#modal-form" data-toggle="modal">
                                  <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach

                        </tbody>
							    </table>
                      <div class="row">
                        <div class="col-xs-6">
                        <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 10 of 23 entries</div>
                      </div>
                      <div class="col-xs-6">
                          <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
                              {!! $sliders->links() !!}
                          </div>
                      </div>


            </div>
          </div>
        </div>

        <!-- modal -->

        <div id="modal-form" class="modal in" tabindex="-1" style="display: none;">
          <form class="" action="index.html" method="post">


									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">×</button>
												<h4 class="blue bigger">Are you sure want to delete It?</h4>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
													</div>

													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">Location</label>

															<div>
																<select class="chosen-select" data-placeholder="Choose a Country..." style="display: none;">

																</select><div class="chosen-container chosen-container-single" style="width: 321px;" title=""><a class="chosen-single" style="width: 210px;"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop" style="width: 210px;"><div class="chosen-search"><input type="text" autocomplete="off" style="width: 200px;"></div><ul class="chosen-results"></ul></div></div>
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-username">Username</label>

															<div>
																<input type="text" id="form-field-username" placeholder="Username" value="alexdoe">
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-first">Name</label>

															<div>
																<input type="text" id="form-field-first" placeholder="First Name" value="Alex">
																<input type="text" id="form-field-last" placeholder="Last Name" value="Doe">
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer">
                        <button class="btn btn-sm btn-danger">
													<i class="ace-icon fa fa-trash-o"></i>
													Delete
												</button>
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>


											</div>
										</div>
									</div>
              </form>
						</div>



</div><!-- /.page-content -->
@endsection
