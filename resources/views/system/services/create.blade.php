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
                                Add Services

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/services')}}" class="text-muted">
                                        All Services


                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/service/create')}}" class="text-muted">
                                        Add Services
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
<form id="CreatForm">
@csrf

                <div class="row">

                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom">

                            <form class="form">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <div class="col-lg-9">
                                            <label>Service Title Ar*</label>
                                            <input type="text"  name="title_ar" class="form-control" placeholder="Service title Ar"/>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-9">
                                            <label>Service Title En*</label>
                                            <input type="text"  name="title_en" class="form-control" placeholder="Service title En"/>
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Description Ar *</label>

                                            <textarea name="description_ar"  class="form-control summernote" id="kt_summernote_1"
                                                      placeholder="Description Ar" id="description_ar"
                                                      rows="2"></textarea>
                                        </div>


                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Description En*</label>

                                            <textarea name="description_en"  class="form-control summernote" id="kt_summernote_1"
                                                      placeholder="Description" id="description_en"
                                                      rows="2"></textarea>
                                        </div>


                                    </div>





                                    <div class="form-group row">
                                        <div class="col-lg-9">
                                            <label>Icon Text*</label>
                                            <input type="text"  name="icon" class="form-control" placeholder="Service Icon"/>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9">
                                        <label>Tags*</label>
                                        <select class="form-control select2"  multiple name="tags[]">
                                            <option value="">Select All</option>
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->title_en}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>



                                    <div class="form-group row">

                                        <div class="col-lg-2 text-center">
                                            <label>Service Image*</label>
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
            $("#CreatForm").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('services.store')}}',
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
                         {{--window.location="{{route('services.index')}}"--}}
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
