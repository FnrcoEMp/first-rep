@extends('system.layouts.index')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        Dashboard </h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Info-->


            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="row">

                    <div class="col-xl-12">


                        <div class="row">
                            <div class="col-xl-12">

                                <div class="row">

                                    <div class="col-xl-4">

                                        <!--begin::Callout-->
                                        <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center p-5">
                                                    <!--begin::Icon-->
                                                    <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                                            <i class="fas fa-suitcase fa-3x text-primary"></i>

                                <!--end::Svg Icon-->
                            </span></div>
                                                    <!--end::Icon-->

                                                    <!--begin::Content-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                                            Total Maid
                                                            <div class="text-dark-75">
                                                                80

                                                            </div>
                                                        </a>

                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Callout-->

                                    </div>
                                    <div class="col-xl-4">

                                        <!--begin::Callout-->
                                        <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center p-5">
                                                    <!--begin::Icon-->
                                                    <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                                            <i class="fas fa-file-upload fa-3x text-primary"></i>

                                <!--end::Svg Icon--></span></div>
                                                    <!--end::Icon-->

                                                    <!--begin::Content-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                                            Total User
                                                            <div class="text-dark-75">
                                                                1398

                                                            </div>
                                                        </a>

                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Callout-->

                                    </div>
                                    <div class="col-xl-4">

                                        <!--begin::Callout-->
                                        <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center p-5">
                                                    <!--begin::Icon-->
                                                    <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                                            <i class=" fab fa-sistrix fa-3x text-primary"></i>

                                <!--end::Svg Icon-->
                            </span></div>
                                                    <!--end::Icon-->

                                                    <!--begin::Content-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                                            Total Requests

                                                            <div class="text-dark-75">
                                                                800

                                                            </div>
                                                        </a>

                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Callout-->

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 text-center">
                                        <img alt="Logo" src="{{url('SystemDesign')}}/assets/media/logos/logo-letter-13.png" class="logo-default"/>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Row-->
                </div>

                <!--end::Dashboard-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    @endsection
