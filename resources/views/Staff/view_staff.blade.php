@extends('layouts.main')


@section('title')
OSMS | Staff Information
@endsection

@section('mtitle')
Staff Information
@endsection


@section('mtitlesub')

@endsection



@section('main_content')
<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{asset('storage')}}/{{$staff->pro_pic}}" width="128" height="128" alt="User profile picture">

        <h3 class="profile-username text-center">{{$staff->name}}</h3>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>StaffID</b> <a class="pull-right">
              {{$staff->staff->eployid}}
            </a>
          </li>
          <li class="list-group-item">
            <b>Role</b> <a class="pull-right">{{$staff->staff->role}}</a>
          </li>
          <li class="list-group-item">
            <b>Basic Salary</b> <a class="pull-right">Gh&cent;{{$staff->staff->salary}}</a>
          </li>
          <li class="list-group-item">
            <b>Joined</b> <a class="pull-right">{{$staff->staff->created_at->diffForHumans()}}</a>
          </li>
        </ul>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">About Me</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <strong><i class="fa fa-book margin-r-5"></i>Qualification</strong>

        <p class="text-muted">
          {{$staff->staff->qualification}}
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i>Location</strong>

        <p class="text-muted">{{$staff->staff->address}}</p>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
       {{--  @if($staff->staff->role == 'Lecturer')
        <li><a href="#leccourses" data-toggle="tab">Courses Assigned</a></li>
        @endif --}}
        <li><a href="#document" data-toggle="tab">Document</a></li>
      </ul>
      <div class="tab-content">

        <div class="active tab-pane" id="profile">

          <div class="panel panel-primary">
            <div class="panel panel-heading">Personal Information</div>
            <div class="panel-body">
             <table id="example1" class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <td>Phone</td>
                  <td>{{$staff->staff->number}}</td>
                </tr>

                <tr>
                  <td>Staff Email</td>
                  <td>{{$staff->email}}</td>
                </tr>

                <tr>
                  <td>Your Email</td>
                  <td>{{$staff->regemail}}</td>
                </tr>

                <tr>
                  <td>Gender</td>
                  <td>{{$staff->staff->gender}}</td>
                </tr>

                <tr>
                  <td>Date of Birth</td>
                  <td>{{$staff->staff->dateofbirth}}</td>
                </tr>

                <tr>
                  <td>Marital Status</td>
                  <td>{{$staff->staff->maritalstatus}}</td>
                </tr>

                <tr>
                  <td>Fathers Name</td>
                  <td>{{$staff->staff->fathername}}</td>
                </tr>

                <tr>
                  <td>Mothers Name</td>
                  <td>{{$staff->staff->mothername}}</td>
                </tr>

                <tr>
                  <td>Work Experence</td>
                  <td>{{$staff->staff->workexperience}}</td>
                </tr>

              </tbody>
            </table>
          </div>  
        </div>


        <div class="panel panel-primary">
          <div class="panel panel-heading">Address</div>
          <div class="panel-body">
           <table id="example1" class="table table-bordered table-striped">
            <tbody>
              <tr>
                <td>Address</td>
                <td>{{$staff->staff->address}}</td>
              </tr>
            </tbody>
          </table>
        </div>  
      </div>



      <div class="panel panel-primary">
        <div class="panel panel-heading">Bank Account Details</div>
        <div class="panel-body">
         <table id="example1" class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Account Title</td>
              <td>{{$staff->staff->acctitle}}</td>
            </tr>

            <tr>
              <td>Bank Name</td>
              <td>{{$staff->staff->bankname}}</td>
            </tr>

            <tr>
              <td>Bank Branch</td>
              <td>{{$staff->staff->bankbranch}}</td>
            </tr>

            <tr>
              <td>Bank Account Number</td>
              <td>{{$staff->staff->accnum}}</td>
            </tr>

          </tbody>
        </table>
      </div>  
    </div>




  </div>

  {{-- <div class="tab-pane" id="leccourses">

    <div class="panel panel-primary">
      <div class="panel panel-heading">Courses Assigned</div>
      <div class="panel-body">

        @hasanyrole('is_superAdmin|is_admin|Human Resource')
        <div class="form-group">
          <label class="control-label" for="inputSuccess">Select Course To Add</label>
          <select class="form-control" id="courses" >
            <option></option>
            @foreach($courses as $row)
            <option value="{{$row->title}} - {{$row->code}}">{{$row->title}} - {{$row->code}} </option>
            @endforeach
          </select>
        </div>
        @endhasanyrole


        <table class="table table-bordered table-bordered">
          <thead>
            <tr>
              <th colspan="4">Assigned Courses</th>
            </tr>
            <tr>
              <th>S.N</th>
              <th>Course</th>
              <th>Code</th>
              @hasanyrole('is_superAdmin|is_admin|Human Resource')
              <th>Acton</th>
               @endhasanyrole
            </tr>
          </thead>
          <tbody>

            @foreach($leccources as $row)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$row->course}}</td>
              <td>{{$row->code}}</td>
              @hasanyrole('is_superAdmin|is_admin|Human Resource')
              <td>
                <a href="#" cid="{{$row->id}}" data-title="{{$row->course}}" class="delcourse btn btn-danger" ><i class='fa fa-trash'></i></a>
              </td>
              @endhasanyrole
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>  
    </div>

  </div>
   --}}

  {{-- <div class="tab-pane" id="payroll">

    <div class="panel panel-primary">
      <div class="panel panel-heading">Payroll</div>
      <div class="panel-body">

        <div class="row">

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-default cardbg">
              <div class="inner">
                <h4>{{$totalnetsalary}}</h4>
                <p>Total Net Salary Paid</p>
              </div>
              <div class="icon">
                <i class="fa fa-money"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-default cardbg">
              <div class="inner">
               <h4>{{$totalgrosssalary}}</h4>
               <p>Total Gross Salary</p>
             </div>
             <div class="icon">
              <i class="fa fa-money"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalnetearning}}</h4>
              <p>Total Earnings</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalnetdeduction}}</h4>
              <p>Total Deductions</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <div class="box-body">
        <table class="table table-bordered"  border="1" cellpadding="10">
          <tr>
            <th>Payslip</th>
            <th>year-Month</th>
            <th>Paid</th>
            <th>Mode of Payment</th>
            <th>Status</th>
            <th>Net Salary</th>
          </tr>
          <tbody>
            @foreach ($payrol as $row)
            <tr>
              <td>{{$row->payslipid}}</td>
              <td>{{$row->year}} - {{$row->month}}</td>
              <td>{{$row->paymentdate}}</td>
              <td>{{$row->modepay}}</td>
              <td>
                <?php
                if($row->status == ''){
                  ?>
                  <label class="badge badge-success">process..</label>
                  <?php
                }

                if($row->status == 'Generated'){
                  ?>
                  <label class="badge badge-info">Generated</label>
                  <?php
                }

                if($row->status == 'Paid'){
                  ?>

                  <label class="badge badge-success viewpay" cid="{{$row->id}}">View Payslip</label>

                  <?php
                }
                ?>
              </td>
              <td>GH&cent; {{$row->netsalary}}</td>
            </tr> 
            @endforeach
            
          </tbody>
        </table>
      </div>

    </div>  
  </div>

</div>
 --}}

{{-- <div class="tab-pane" id="leave">

  <div class="panel panel-primary">
    <div class="panel panel-heading">Leave</div>
    <div class="panel-body">

      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalleave}}</h4>
              <p>Total Leave</p>
            </div>
            <div class="icon">
              <i class="fa fa-plane"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
             <h4>{{$totalapproved}}</h4>
             <p>Total Approved Leave</p>
           </div>
           <div class="icon">
            <i class="fa fa-plane"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-default cardbg">
          <div class="inner">
           <h4>{{$totalrejected}}</h4>
           <p>Total rejected Leave</p>
         </div>
         <div class="icon">
          <i class="fa fa-plane"></i>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-default cardbg">
        <div class="inner">
         <h4>{{$totalrevert}}</h4>
         <p>Total Reverted Leave</p>
       </div>
       <div class="icon">
        <i class="fa fa-plane"></i>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->



<div class="box-body">
  <table class="table table-bordered"  border="1" cellpadding="10">
    <tr>
      <th>Leave Type</th>
      <th>Leave Date</th>
      <th>Days</th>
      <th>Apply Date</th>
      <th>Reason</th>
      <th>Status</th>
    </tr>
    <tbody>
      @foreach ($leave as $row)
      <tr>
        <td>{{$row->leavetype}}</td>
        <td>{{$row->leavedate}}</td>
        <td>{{$row->days}}</td>
        <td>{{$row->applydate}}</td>
        <td>{{$row->reason}}</td>
        <td>
          <?php
          if($row->status == 'Rejected'){
            ?>
            <label class="badge badge-danger" style="background-color: #dd4b39;">{{$row->status}}</label>
            <?php
          }else if($row->status == 'Approved'){
            ?>
            <label class="badge badge-success" style="background-color: #00a65a;">{{$row->status}}</label>
            <?php
          }else{
            ?>
            <label class="badge badge-info">{{$row->status}}</label>
            <?php
          }
          ?>
        </td>
      </tr> 
      @endforeach

    </tbody>
  </table>
</div>




</div>  
</div>

</div> --}}


<div class="tab-pane" id="attendance">

  <div class="panel panel-primary">
    <div class="panel panel-heading">Attendance</div>
    <div class="panel-body">

      <div id="showAttendance">

        <div class="row">

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-default cardbg">
              <div class="inner">
                <h4>{{$totalpresent}}</h4>
                <p>Total Present</p>
              </div>
              <div class="icon">
                <i class="fa fa-check-square"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-default cardbg">
              <div class="inner">
               <h4>{{$totallate}}</h4>
               <p>Total Late</p>
             </div>
             <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalabsent}}</h4>
              <p>Total Absent</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalhalfday}}</h4>
              <p>Total Half Day</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-default cardbg">
            <div class="inner">
              <h4>{{$totalholiday}}</h4>
              <p>Total Holiday</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
          </div>
        </div>


      </div>
      <!-- /.row -->


      <div class="col-md-2">
        <div class="form-group">
          <label class="control-label" for="inputSuccess">Year</label>
          <select class="form-control" id="selectyear" >
            <option></option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
          </select>
        </div>
      </div>


      <div class="box-body">
        <table class="table table-bordered"  border="1" cellpadding="10">
          <tr>
            <th colspan="13">Present: P Late: L Absent: A Half Day: F Holiday: H</th>
          </tr>
          <tr>
            <th>Date|Month</th>
            <th>Jan</th>
            <th>Feb</th>
            <th>Mat</th>
            <th>Apr</th>
            <th>May</th>
            <th>Jun</th>
            <th>Jul</th>
            <th>Aug</th>
            <th>Sep</th>
            <th>Oct</th>
            <th>Nov</th>
            <th>Dec</th>
          </tr>
          <tbody>

            @for ($i = 1; $i < 32; $i++)





            @if (strlen($i) == '1')
            <?php
            $dp = '0'.$i;
            ?>
            @else
            <?php
            $dp = $i;
            ?>

            @endif



            <tr>
              <td>
                {{$dp}}
              </td>

              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '01' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>

              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '02' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>

              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '03' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '04' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '05' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '06' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '07' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '08' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '09' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '10' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '11' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>


              <td>
                @foreach ($attendance as $row)
                @if ($row->day == $dp && $row->month == '12' )
                {{$row->attendance}}
                @endif
                @endforeach
              </td>



            </tr>
            @endfor




          </tbody>
        </table>
      </div>


    </div>



  </div>  
</div>

</div>
<div class="tab-pane" id="document">

  <div class="panel panel-primary">
    <div class="panel panel-heading">Documents</div>
    <div class="panel-body">

     <table class="table table-bordered"  border="1" cellpadding="10">
      <tr>
        <th>filename</th>
        <th>Uploaded</th>
        <th>View</th>
        @hasanyrole('is_admin|is_superAdmin|Human Resource')
        <th>Delect</th>
        @endhasanyrole
      </tr>
      @foreach($staffdoc as $docs)
      <tr>
        <td>{{$docs->title}}</td>
        <td>{{$docs->created_at->diffForHumans()}}</td>
        <td><a href="{{ URL::to($docs->doc)}}" target="_blank" class="btn btn-success"><span class="fa fa-eye"></span></a></td>
        <!-- <td>{{asset('storage', $docs->name)}}</td> -->
        @hasanyrole('is_admin|is_superAdmin|Human Resource')
        <td>
          <a href="#" onclick="if(confirm('Are You Sure ?')){ event.preventDefault(); document.getElementById('delete_doc_{{$docs->id}}').submit(); }" class="btn btn-danger"><i class='fa fa-trash'></i></a>
          <form id="delete_doc_{{$docs->id}}" 
            action="{{ route('deletedoc', ['id'=> $docs->id ]) }}" method="POST" style="display: none;">
            @csrf
          </form> 
        </td>
        @endhasanyrole
      </tr> 
      @endforeach
    </table>

  </div>  
</div>

</div>





</div>
</div>
</div>
</div>



<div id="displaypayslip"></div>



@endsection



@section('script')

<script type="text/javascript">
  $('document').ready(function(){

    //start
    $(document).on("change","#courses", function(e){
      e.preventDefault();
      var value = $(this).val();
      var lecid = '{{$lectid}}';
      var _token = $('meta[name=csrf-token]').attr('content');
      var split = value.split('-');
      var cid = split[1];
      // alert(cid);
      // return;
      swal({
       title: "Are you sure?",
       text: "Assign "+split[0]+" ("+split[1]+") To This Lecturer",
       icon: "warning",
       buttons: ['Cancel', 'Yes Assign'],
       dangerMode: true,
     })
      .then((willDelete) => {
       if (willDelete) {

        $.ajax({

          beforeSend: function(){
            $.LoadingOverlay("show");
          },
          complete: function(){
            $.LoadingOverlay("hide");
          },

          url: '{{route('lecturer-assign-course')}}',
          type: 'POST',
          data: {_token : _token , cid: cid, lecid: lecid},
          success: function(data){ 

            if(data.match("success")){

             // swal("Course Assigned Successfully, Reload Page to Take Effect",{
             //   icon: 'success',
             // });
             toastr.success('Course Assigned Successfully, Reload Page to Take Effect');

             window.location.reload();
           }else{
            
              toastr.error('Failed! Course Has Already Been Assigned to this lecturer');
             // swal("Failed! Course Has Already Been Assigned to this lecturer",{
             //   icon: 'warning',
             // });


           }


         },
         error: function (data) {
          console.log('Error:', data);
        }
      });  

      }
    });



    });

    $(document).on("click",".delcourse", function(e){
      e.preventDefault();
      var cid = $(this).attr("cid");
      var _token = $('meta[name=csrf-token]').attr('content');
      var  ctitle = $(this).data('title');
      swal({
        title: "Are you sure?",
        text: "Remove "+ctitle+" From Assigned Courses",
        icon: "warning",
        buttons: ['Cancel', 'Yes Remove'],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          $.ajax({

            beforeSend: function(){
              $.LoadingOverlay("show");
            },
            complete: function(){
              $.LoadingOverlay("hide");
            },

            url: '{{route('lecturer-remove-assign-course')}}',
            type: 'POST',
            data: {_token : _token , cid: cid},
            success: function(data){ 

             //  swal(" Course Removed Successfully, Reload Page to take Effect",{
             //   icon: 'success',
             // });
              toastr.success('Course Removed Successfully, Reload Page to take Effect');

              window.location.reload();

            },
            error: function (data) {
              console.log('Error:', data);
            }
          });  

        }
      });

    });




    $(document).on("change","#selectyear",function(e){
      e.preventDefault();
      var value = $(this).val();
      var lectid = '{{$lectid}}';
      var _token = $('meta[name=csrf-token]').attr('content');

      $.ajax({
        beforeSend: function(){
          $.LoadingOverlay("show");
        },
        complete: function(){
          $.LoadingOverlay("hide");
        },

        url: '{{route('yearfetch')}}',
        type: 'POST',
        data: {_token : _token , lectid: lectid, value: value},
        success: function(data){ 
          $("#showAttendance").html(data);
        },
        error: function (data) {
          console.log('Error:', data);
        }
      });  

      //alert(value);
    });



    $(document).on("click",".viewpay",function(e){
      e.preventDefault();
      var cid = $(this).attr("cid");
      var _token = $('meta[name=csrf-token]').attr('content');

      $.ajax({
        beforeSend: function(){
          $.LoadingOverlay("show");
        },
        complete: function(){
          $.LoadingOverlay("hide");
        },

        url: '{{route('view_payroll_now')}}',
        type: 'POST',
        dataType: 'json',
        data: {_token : _token , cid: cid},
        success: function(data){ 
          
          $("#displaypayslip").html(data.message);
          //alert(data.message);
          $("#viewpay").modal('show');
          
        },
        error: function (data) {
          console.log('Error:', data);
        }
      }); 


    });


    $(document).on("click","#print_pay", function(e){
      e.preventDefault();
      var mode = 'iframe'; // popup
      var close = mode == "popup";
      var options = { mode : mode, popClose : close};
      $("#viewpay").printArea(options);

    });



  });

</script>


@endsection