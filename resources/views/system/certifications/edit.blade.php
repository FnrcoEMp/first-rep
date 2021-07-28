@extends('system.layouts.index')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">

                    <!--begin::Heading-->
                    <div class="d-flex flex-column">

                        <!--begin::Breadcrumb-->

                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                Add Certificate

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/certifications')}}" class="text-muted">
                                        All Certificate


                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        Add Certificate
                                    </a>
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->

                </div>
                <!--end::Info-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">


                    <!--begin::Button-->

                    <!--end::Button-->


                </div>
                <!--end::Toolbar-->

            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Dashboard-->
                <form id="UpdatetForm"  data-url="{{route('certificate.update',$Requestcertification->id)}}">
                    @csrf

                    <div class="row">

                        <div class="col-md-12">
                            <!--begin::Card-->
                            <div class="card card-custom">

                                <form class="form">
                                    <div class="card-body">


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Trainee Name</label>
                                                <select class="form-control" name="user_id" >
                                                    <option value="" selected="">Select</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}" {{$Requestcertification->user_id==$user->id ?'selected':''}}>{{$user->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Trainee name in Certificate</label>
                                                <input type="text"  name="username_certificate" class="form-control" placeholder="Trainee name in Certificate" value="{{$Requestcertification->username_certificate}}"/>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Trainer Name</label>
                                                <select class="form-control" name="trainer_id">
                                                    <option value="" selected="">Select</option>
                                                    @foreach($teams as $team)
                                                        <option value="{{$team->id}}" {{$Requestcertification->trainer_id==$team->id ?'selected':''}}>{{$team->name_en}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <div class="col-lg-9">

                                                <label>Company Name</label>
                                                <select class="form-control" name="compnay_id">
                                                    <option value="" selected="">Select</option>
                                                    @foreach($companies as $company)
                                                    <option value="{{$company->id}}" {{$Requestcertification->compnay_id==$company->id ?'selected':''}}>{{$company->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Certificate status</label>
                                                <select class="form-control" name="status">
                                                    <option value="" selected=""> Selected</option>
                                                    <option value="1" {{$Requestcertification->status==1 ?'selected':''}}> Successfully completed</option>
                                                    <option value="2" {{$Requestcertification->status==2 ?'selected':''}}>Attended</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Certificate Title</label>
                                                <select class="form-control" name="title" id="CertificateTitle">
                                                    <option value="" selected=""> Selected</option>
                                                    <option value="1" {{$Requestcertification->status==1 ?'selected':''}}> Awareness &amp; internal auditor</option>
                                                    <option value="2" {{$Requestcertification->status==2 ?'selected':''}}>Awareness </option>
                                                    <option value="3" {{$Requestcertification->status==3 ?'selected':''}}>Internal auditor </option>

                                                </select>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Certificate Name</label>
                                                <select class="form-control" id="certificateId" name="certificate_id" >
                                                    @foreach($certifications as $certification)
                                                        <option value="{{$certification->id}}" {{$Requestcertification->certificate_id==$certification->id ?'selected':''}}>{{$certification->iso}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Certificate Issue Date</label>

                                                <input type="date" name="date" class="form-control" value="{{$Requestcertification->date}}">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Start Date</label>

                                                <input type="date" name="start_date" class="form-control" value="{{$Requestcertification->start_date}}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>End  Date</label>
                                                <input type="date" name="end_date" class="form-control" value="{{$Requestcertification->end_date}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="from-group">
                                                    <label>Serial No.</label>
                                                    <input type="text" name="serial" value="{{$Requestcertification->serial}}" readonly="" class="form-control serialValue" style="display: inline">

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="from-group">
                                                    <label>&nbsp;
                                                    </label>
                                                    <a href="#" class="CreateSerial btn btn-success pinner-white spinner-right"  style="margin-top:25px">

                                                        <span class="LoadingSerial" style="display:none">  <i class="fa fa-spinner fa-spin"></i></span>
                                                        Generate Serial</a>
                                                </div>

                                            </div>


                                        </div>




                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">



                                                    <button type="submit"  id="btnSubmit"  class="btn btn-primary mr-2 spinner-white spinner-right">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>


                        </div>
                        <!--end::Card-->
                    </div>
                </form>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>


@stop

@push('js')
    <script>
        $(document).ready(function () {
            $("#UpdatetForm").submit(function (m) {
                var url=$(this).data('url');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#btnSubmit').addClass('spinner');
                    },
                    complete: function () {
                        $('#btnSubmit').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            toastr.success('Saved.');
                            window.location="/admin/certification/request"
                        }
                    },
                    error:function (reject){
                        //  console.log(reject);

                        if(reject.status == 422){
                            var reponse = $.parseJSON(reject.responseText);
                            jQuery.each(reponse.errors, function (key, value) {

                                toastr.error(value);
                            });
                        }
                    }
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>

    <script>
        $(document).ready(function(){

            $(document).on('click' ,'.CreateSerial' ,function(e) {


                var id=$('#certificateId').val();

                $.ajax({
                    url:'/admin/generate/serial/'+id,
                    type: "GET",
                    beforeSend: function () {
                        $('.CreateSerial').addClass('spinner');
                    },
                    complete: function () {
                        $('.CreateSerial').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {

                            $('.serialValue').val(response)
                            //    location.reload();


                        }
                    },
                });
                e.preventDefault();

            });
        });
    </script>
@endpush
