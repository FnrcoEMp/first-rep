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
                                OUR VALUES

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/our/values')}}" class="text-muted">
                                        OUR VALUES


                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        OUR VALUES
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
                                            <div class="col-lg-12">
                                                <label>OUR MISSION Ar *</label>

                                                <textarea name="our_mission_ar"  class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR MISSION Ar" id="our_mission_ar"
                                                          rows="2">{{$setting->our_mission_ar}}</textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>OUR MISSION En *</label>

                                                <textarea name="our_mission_en"  class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR MISSION" id="our_mission_en"
                                                          rows="2">{{$setting->our_mission_en}}</textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>OUR VISION Ar *</label>

                                                <textarea name="our_vision_ar" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR VISION Ar" id="our_vision_ar"
                                                          rows="2">{{$setting->our_vision_ar}}</textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>OUR VISION En *</label>

                                                <textarea name="our_vision_en" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR VISION en" id="comments"
                                                          rows="2">{{$setting->our_vision_en}}</textarea>
                                            </div>


                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>OUR Core Value Ar*</label>

                                                <textarea name="our_quality_objective_ar" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR QUALITY OBJECTIVES Ar" id="our_quality_objective_ar"
                                                          rows="2">{{$setting->our_quality_objective_ar}}</textarea>
                                            </div>


                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>OUR Core Value En*</label>

                                                <textarea name="our_quality_objective_en" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="OUR QUALITY OBJECTIVES En" id="our_quality_objective"
                                                          rows="2">{{$setting->our_quality_objective_en}}</textarea>
                                            </div>


                                        </div>






                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Chairman’s Message Ar*</label>

                                                <textarea name="message_ar" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="Chairman’s Message Ar" id="message_ar"
                                                          rows="2">{{$setting->message_ar}}</textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Chairman’s Message En*</label>

                                                <textarea name="message_en" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="Chairman’s Message En" id="message_en"
                                                          rows="2">{{$setting->message_en}}</textarea>
                                            </div>


                                        </div>




                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>About Ar*</label>

                                                <textarea name="about_ar" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="About Ar" id="about_ar"
                                                          rows="2">{{$setting->about_ar}}</textarea>
                                            </div>


                                        </div>



                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>About En*</label>

                                                <textarea name="about_en" class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="About En" id="about_en"
                                                          rows="2">{{$setting->about_en}}</textarea>
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
                    url: '{{route('ourValue.update')}}',
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
                            location.reload();

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

