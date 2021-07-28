@extends('system.layouts.index')
@section('content')
    <style>
        a.sociall img {
            width: 25px;
        }

        .checkbox-inline.company_Card label {
            display: inline-block;
            text-align: center;
        }

        .checkbox-inline .checkbox span {
            margin: auto;
        }

        .btn .badge {
            position: absolute;
            top: -1px;
            right: 0;
            color: #6993FF;
            border: 1px solid;
            padding: 7px 5px;
            line-height: 0;
            border-radius: 50%;
        }
    </style>

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
                                All certifications
                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        External Office
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        All certifications
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


                    <a href="#"   data-toggle="modal" data-target="#exampleModal" class="btn btn-danger font-weight-bold py-3 px-6">
                        <i class="la la-plus"></i>
                        Add certifications
                    </a>
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

                <div class="row">

                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom">

                            <div class="card-body">

                                {{--                                <div class="accordion accordion-toggle-arrow" id="accordionExample1">--}}
                                {{--                                    <div class="card">--}}
                                {{--                                        <div class="card-header">--}}
                                {{--                                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">--}}
                                {{--                                                Agencies Filters--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">--}}
                                {{--                                            <div class="card-body">--}}
                                {{--                                                <div class="row">--}}
                                {{--                                                    <div class="col-md-4">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Maid Name </label>--}}
                                {{--                                                            <input class="form-control" type="text" value="" name="job_title" id="name"--}}
                                {{--                                                                   placeholder="Maid Name" aria-describedby="jobTitle-error"--}}
                                {{--                                                                   aria-invalid="false">--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-4">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Passport number</label>--}}
                                {{--                                                            <input class="form-control" type="text" value="" name="job_title" id="passportNumber"--}}
                                {{--                                                                   placeholder="Passport number" aria-describedby="jobTitle-error"--}}
                                {{--                                                                   aria-invalid="false">--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-4">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Travel Date</label>--}}
                                {{--                                                            <input type="text" class="form-control travel_date" id="kt_datepicker_1" name="travel_date"--}}
                                {{--                                                                   placeholder="Select date"/>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-3">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Interview</label>--}}
                                {{--                                                            <select class="form-control" name="sm_platform" id="is_interviewed"--}}
                                {{--                                                                    aria-describedby="task_type-error"--}}
                                {{--                                                                    aria-invalid="false">--}}
                                {{--                                                                <option value="" selected="">Select</option>--}}
                                {{--                                                                <option value="1">Complete</option>--}}
                                {{--                                                                <option value="2">no interview</option>--}}
                                {{--                                                            </select>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-3">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Arrival Status</label>--}}
                                {{--                                                            <select class="form-control" name="sm_platform" id="file_status"--}}
                                {{--                                                                    aria-describedby="task_type-error"--}}
                                {{--                                                                    aria-invalid="false">--}}
                                {{--                                                                <option value="" selected="">Select</option>--}}
                                {{--                                                                <option value="1">Arrived</option>--}}
                                {{--                                                                <option value="2">Not Arrived</option>--}}

                                {{--                                                            </select>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-3">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Agencies</label>--}}
                                {{--                                                            <select class="form-control js-select2" name="task_progress" id="agency_id"--}}
                                {{--                                                                    aria-describedby="task_type-error"--}}
                                {{--                                                                    aria-invalid="false">--}}
                                {{--                                                                <option selected value="">Select</option>--}}

                                {{--                                                                <option--}}
                                {{--                                                                    value="6">Ashraf Agency</option>--}}
                                {{--                                                                <option--}}
                                {{--                                                                    value="5">alweradny Agency</option>--}}
                                {{--                                                                <option--}}
                                {{--                                                                    value="4">Abu Saeed agency</option>--}}
                                {{--                                                                <option--}}
                                {{--                                                                    value="3">Hikmat agency</option>--}}
                                {{--                                                            </select>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <div class="col-md-3">--}}
                                {{--                                                        <div class="form-group">--}}
                                {{--                                                            <label>Warranty Status</label>--}}
                                {{--                                                            <select class="form-control" name="task_type" id="warranty_period"--}}
                                {{--                                                                    aria-describedby="task_type-error"--}}
                                {{--                                                                    aria-invalid="false">--}}
                                {{--                                                                <option value="" selected="">Select</option>--}}
                                {{--                                                                <option value="1">Valid</option>--}}
                                {{--                                                                <option value="2">Not valid</option>--}}

                                {{--                                                            </select>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}

                                {{--                                                    <div class="col-md-8"></div>--}}
                                {{--                                                    <div class="col-md-4">--}}
                                {{--                                                        <div class="form-group">--}}

                                {{--                                                            <button type="button" id="btnSubmit"--}}
                                {{--                                                                    class="btn btn-success btn-block font-weight-bold py-3 px-6"--}}
                                {{--                                                                    data-ktwizard-type="action-submit">--}}
                                {{--                                                                Search--}}
                                {{--                                                            </button>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}


                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}


                                <div class="separator separator-dashed mt-8 mb-5"></div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        @include('system.certifications.partial')

                                    </div>


                                </div>


                            </div>
                        </div>


                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->


        </div>
        <!--end::Container-->
        <!-- Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="CreatForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Name *</label>
                                            <input type="text" name="title" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Iso *</label>
                                            <input type="text" name="iso" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Symbol *</label>
                                            <input type="text" name="symbol" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                         <div class="col-lg-12">
                                            <label>Logo *</label>
                                            <div class="image-input image-input-outline" id="kt_image_5">
                                                <div class="image-input-wrapper"
                                                     style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                </div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                       data-action="change" data-toggle="tooltip" title=""
                                                       data-original-title="Personal Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image"
                                                           accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                      data-action="cancel" data-toggle="tooltip"
                                                      title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btnSubmit btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>



        <div class="modal fade" id="UpdatePartners" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <form class="UpdateForm">
                    @csrf
                    {{method_field('PUT')}}


                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <input type="hidden" name="id" id="id_s">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close close-model" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Name *</label>
                                            <input type="text" name="title" class="form-control" id="certificate_title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Iso *</label>
                                            <input type="text" name="iso" class="form-control" id="certificate_iso">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Symbol *</label>
                                            <input type="text" name="symbol" class="form-control" id="certificate_symbol">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                {{--                                <label class="col-form-label text-right col-lg-3 col-sm-12">partners</label>--}}
                                <div class="col-lg-6 col-md-9 col-sm-12">



                                    <div class="form-group row">

                                        <div class="col-lg-12">
                                            <label>Logo*</label>
                                            <div class="image-input image-input-outline" id="kt_image_5">
                                                <div class="image-input-wrapper"
                                                     style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                </div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                       data-action="change" data-toggle="tooltip" title=""
                                                       data-original-title="Personal Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image"
                                                           accept=".png, .jpg, .jpeg" multiple/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                      data-action="cancel" data-toggle="tooltip"
                                                      title="Cancel avatar">
		                                              <i class="ki ki-bold-close icon-xs text-muted"></i>
	                                              </span>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="" id="certificate_img" style="width:150px;height: 100px">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-light-primary font-weight-bold close-model" data-dismiss="modal">Close</button>
                            <button type="submit" id="btnSubmit" class="btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                        </div>


                    </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



@endsection
@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".CreatForm").submit(function (m) {
                $.ajax({
                    type: "POST",
                    //   url: '{{route('certifications.store')}}',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.btnSubmit').addClass('spinner');
                    },
                    complete: function () {
                        $('.btnSubmit').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            toastr.success('Saved.');
                            // location.reload();
                        }
                    },
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>
    <script>

        $(document).ready(function () {
            $(".del_btn").on('click', function (m) {


                var url =$(this).data('url');
                //alert(url);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",
                            url: url,
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
                                    toastr.success('Delete.');
                                    location.reload();
                                }
                            },
                        });

                    }
                });
                m.preventDefault();
            });
        })
    </script>


    <script>

        $(document).ready(function () {
            $(".edit_btn").on('click', function (m) {
                var url =$(this).attr('href');

                $('#UpdatePartners').addClass('show');
                $('#UpdatePartners').css('display','block');

                        $.ajax({
                            type: "GET",
                            url: url,
                            processData: false,
                            contentType: false,

                            complete: function () {

                            },
                            success: function (response) {

                                $('#id_s').val(response.certification.id);
                                $('#certificate_title').val(response.certification.title);
                                $('#certificate_iso').val(response.certification.iso);
                                $('#certificate_symbol').val(response.certification.symbol);
                                $('#certificate_img').attr('src','/storage/'+response.certification.image);


                            },
                        });
                m.preventDefault();
                });


        })
    </script>

    <script>

        $(document).ready(function () {
            $(".close-model").on('click', function (m) {
                $('#UpdatePartners').removeClass('show');
                $('#UpdatePartners').css('display','none');


            });


        })
    </script>
    <script>
        $(document).ready(function () {

            $(".UpdateForm").submit(function (m) {
                var id=$('#id_s').val();

                $.ajax({
                    type: "POST",
                    url: "/admin/certifications/"+id,
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
                            toastr.success('Updated');
                         location.reload();
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

@endpush
