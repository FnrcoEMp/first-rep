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
                                All certifications Request
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
                                        All certifications Request
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


                    <a href="#" data-toggle="modal" data-target="#exampleModal"
                       class="btn btn-danger font-weight-bold py-3 px-6">
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
                                <div class="separator separator-dashed mt-8 mb-5"></div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                @include('system.certifications.request_certificationAjax')

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



    </div>



@endsection
@push('js')

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
                            type: "Post",
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

@endpush
