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
                               Social Accounts

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/social')}}" class="text-muted">
                                        Social Accounts


                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        Social Accounts
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
                <form id="UpdateForm">
                    @csrf

                    <div class="row">

                        <div class="col-md-12">
                            <!--begin::Card-->
                            <div class="card card-custom">

                                <form class="form">
                                    <div class="card-body">



                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Facebook*</label>
                                                <input type="text"  name="facebook" class="form-control" placeholder="facebook" value="{{$social->facebook}}"/>
                                            </div>

                                        </div>





                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Instagram *</label>
                                                <input type="text"  name="instagram" class="form-control" placeholder="Instagram" value="{{$social->instagram}}"/>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Youtube*</label>
                                                <input type="text"  name="youtube" class="form-control" placeholder="Youtube" value="{{$social->youtube}}"/>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Pinterest *</label>
                                                <input type="text"  name="pinterest" class="form-control" placeholder="pinterest" value="{{$social->pinterest}}"/>
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
            $("#UpdateForm").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('social.update')}}',
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
                            toastr.success('Updated.');

                        }
                    },
                    // error:function (reject){
                    //     //  console.log(reject);
                    //
                    //     if(reject.status == 422){
                    //         var reponse = $.parseJSON(reject.responseText);
                    //         jQuery.each(reponse.errors, function (key, value) {
                    //
                    //             toastr.error(value);
                    //         });
                    //     }
                    // }
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>
@endpush

