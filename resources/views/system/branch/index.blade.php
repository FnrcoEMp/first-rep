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
                                Add Branch

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/branch')}}" class="text-muted">
                                        All Branches


                                    </a>
                                </li>
{{--                                <li class="breadcrumb-item">--}}
{{--                                    <a href="#" class="text-muted">--}}
{{--                                        Add Careers--}}
{{--                                    </a>--}}
{{--                                </li>--}}
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


                                    <div class="card-body">



                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="col-lg-12">





                                                    <div id="kt_repeater_1">
                                                        <div id="kt_repeater_1" class="form-group row mt-8">
                                                            <div data-repeater-list="" class="col-lg-12">
                                                               @if(count($branches) >0)
                                                                @foreach($branches as $branch)
                                                                <div data-repeater-item class="form-group row align-items-left">

                                                                    <div class="col-lg-10 p-0">
                                                                        <div class="form-group">
                                                                        <label>Branch Name En *:</label>
                                                                        <textarea  name="name_en" item-name="work" class="form-control"
                                                                                  placeholder="Branch Name" id="name_en"
                                                                                  rows="2">{{$branch->name_en}}</textarea>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-10 p-0">
                                                                        <div class="form-group">
                                                                            <label>Branch Name Ar *:</label>
                                                                            <textarea  name="name_ar" item-name="work" class="form-control"
                                                                                       placeholder="Branch Name" id="name_en"
                                                                                       rows="2">{{$branch->name_ar}}</textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-10 p-0">
                                                                        <div class="form-group">
                                                                        <label>Branch Address En*:</label>
                                                                        <textarea name="address_en" item-name="work" class="form-control"
                                                                                  placeholder="Branch Address En" id="address_en"
                                                                                  rows="2">{{$branch->address_en}}</textarea>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-10 p-0">
                                                                        <div class="form-group">
                                                                            <label>Branch Address Ar*:</label>
                                                                            <textarea name="address_ar" item-name="work" class="form-control"
                                                                                      placeholder="Branch Address Ar" id="address_ar"
                                                                                      rows="2">{{$branch->address_ar}}</textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-10 p-0">
                                                                        <div class="form-group">
                                                                            <label>Branch Url</label>
                                                                            <input type="url" name="url" item-name="work"
                                                                                   placeholder="Branch URL"  value="{{$branch->url}}" class="form-control">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-2">
                                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-block font-weight-bolder btn-light-danger">
                                                                            <i class="fa fa-trash
"></i>Delete
                                                                        </a>
                                                                    </div>


                                                                    <div class="separator separator-dashed mt-8 mb-5" style="width: 100%;"></div>
                                                                </div>
                                                                    @endforeach
                                                                @else

                                                                    <div data-repeater-item
                                                                         class="form-group row align-items-left">


                                                                        <div class="col-lg-10 p-0">
                                                                            <div class="form-group">
                                                                                <label>Branch Name En *:</label>
                                                                                <textarea  name="name_en" item-name="work" class="form-control"
                                                                                           placeholder="Branch Name" id="name_en"
                                                                                           rows="2"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-10 p-0">
                                                                            <div class="form-group">
                                                                                <label>Branch Name Ar *:</label>
                                                                                <textarea  name="name_ar" item-name="work" class="form-control"
                                                                                           placeholder="Branch Name" id="name_en"
                                                                                           rows="2"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-10 p-0">
                                                                            <div class="form-group">
                                                                                <label>Branch Address En*:</label>
                                                                                <textarea name="address_en" item-name="work" class="form-control"
                                                                                          placeholder="Branch Address En" id="address_en"
                                                                                          rows="2"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-10 p-0">
                                                                            <div class="form-group">
                                                                                <label>Branch Address Ar*:</label>
                                                                                <textarea name="address_ar" item-name="work" class="form-control"
                                                                                          placeholder="Branch Address Ar" id="address_ar"
                                                                                          rows="2"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-10 p-0">
                                                                            <div class="form-group">
                                                                                <label>Branch Url</label>
                                                                                <input type="url" name="url" item-name="work"
                                                                                       placeholder="Branch URL"  value="" class="form-control">
                                                                            </div>
                                                                        </div>




                                                                        <div class="col-md-2">
                                                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-block font-weight-bolder btn-light-danger">
                                                                                <i class="fa fa-trash
"></i>Delete
                                                                            </a>
                                                                        </div>


                                                                        <div class="separator separator-dashed mt-8 mb-5" style="width: 100%;"></div>

                                                                    </div>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">

                                                            <div class="col-lg-3 float-right"
                                                                 style="float: none !important;margin: 0 auto;">
                                                                <a href="javascript:;" data-repeater-create=""
                                                                   class="btn btn-block font-weight-bolder btn-light-primary">
                                                                    <i class="la la-plus"></i> Add a new Branch
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <button type="submit"  id="btnSubmit"  class="btn btn-primary mr-2 spinner-white spinner-right">Submit</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

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
                    url: '{{route('branch.update')}}',
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
