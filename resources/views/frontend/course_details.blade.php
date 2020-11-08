
@extends('layouts.app_front')
{{-- @section('title','Home')   --}}
@section('content')
  <div class="main-content">
    <!-- Section: inner-header -->
    {{-- <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    @include('layouts.breadcrubs')


    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              {{-- <img src="{{url('')}}/{{$ObjCourse->image}}​​​​​​​" alt=""> --}}
              <img style="width: 100px;height: 100px;" src="{{ url('') }}/{{ $ObjCourse->image }}">
            <h3 class="text-theme-colored line-bottom text-theme-colored">{{$ObjCourse->name}}</h3>
              <h4 class="mt-0"><span class="text-theme-color-2">Price :</span>{{$ObjCourse->price}}</h4>
                <ul class="review_text list-inline">
                  <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li>
                </ul>
              <h5><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, <span class="text-theme-color-2">accounting technologies</span> corporis dolorum blanditiis ullam officia <span class="text-theme-color-2">our university </span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>
              <p>{{$ObjCourse->description}}</p>
            
              <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Course Topics</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#small" data-toggle="tab" >Topic Names</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="small">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Topics</td>
                    </tr>
                    <tr> <th>Coures Name</th> <th>Course Duration</th> </tr>
                    <tbody> 
                      @foreach($arrCourseTopics as  $objCourseTopic )   
                    <tr> <th scope="row">{{$objCourseTopic->topic_name}}</th> <td>{{$objCourseTopic->duration}}</td> </tr> 
                      @endforeach
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="medium">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="large">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses <span class="text-theme-color-2">List</span></h4>
                <div class="services-list">
                  {{-- <ul class="list list-border angle-double-right">
                    @foreach($arrCourses as $ObjCourse)
                    <li class="nav-item" >
                      <a class="nav-link  {{ (Request::segment(1)=='course_details' ? 'active' : ''  )}} " href="{{ url('course_details')}}/{{$ObjCourse->id}}">
                      {{$ObjCourse->name}}​​​​​​​</a></li>
                    @endforeach
                  </ul> --}}
                  <ul class="list list-border angle-double-right">
                    @foreach($arrCourses as $ObjCourse)
                    
                    <li  class=" @if(Request::segment(1)=='course_details' && Request::segment(2)=='1') active @endif">
                      
                      <a href="{{ url('course_details')}}/{{$ObjCourse->id}}">
                      {{$ObjCourse->name}}​​​​​​​</a></li>
                     
                    @endforeach
                  </ul>
                </div>
              </div>
              

              {{-- @if($Objcourse->name==$ObjCourse->name)
                 <a class="@if(Request::segment(1)=='course_details') Active  @endif" href="{{url('course_details')}}/{{$ObjCourse->id}}">{{$ObjCourse->name}}​​​​​​​</a></li>
                {{ (Request::segment(1)=='course_details' && (Request::segment(2)=='$ObjCourse->id' )) ? 'active' : ''  }} --}}
              {{-- <li><a calss="active" href="{{url('course_details')}}/{{$ObjCourse->id}}​​​​​​​​​​​​​​">{{$ObjCourse->name}}​​​​​​​</a></li> --}}
              {{-- @else
              <li><a href="{{url('course_details')}}/{{$ObjCourse->id}}​​​​​​​">{{$ObjCourse->name}}</a></li>
              @endif --}}
            
             
              <div class="widget">
                <h4 class="widget-title line-bottom">Quick <span class="text-theme-color-2">Contact</span></h4>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>


                    <!-- Quick Contact Form Validation-->
                <script type="text/javascript">
                  $("#quick_contact_form_sidebar").validate({​​​​​​​
                    submitHandler: function(form) {​​​​​​​
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({​​​​​​​
                        dataType:  'json',
                        success: function(data) {​​​​​​​
                          if( data.status == 'true' ) {​​​​​​​
                            $(form).find('.form-control').val('');
                          }​​​​​​​
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){​​​​​​​ $(form_result_div).fadeOut('slow') }​​​​​​​, 6000);
                        }​​​​​​​
                      }​​​​​​​);
                    }​​​​​​​
                  }​​​​​​​);
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
