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
                                All Products

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/products')}}" class="text-muted">
                                        All Products


                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/products/create')}}" class="text-muted">
                                        Add Products
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
                <form id="UpdateForm"  enctype="multipart/form-data" data-url="{{route('products.update',$product->id)}}">
                    @csrf
                    {{method_field('PUT')}}

                    <div class="row">

                        <div class="col-md-12">
                            <!--begin::Card-->
                            <div class="card card-custom">

                                <form class="form">
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>product Name *</label>
                                                <input type="text"  name="name_en" class="form-control" placeholder="Product Name" value="{{$product->name_en}}"/>
                                            </div>

                                        </div>





                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Description *</label>

                                                <textarea name="description"  class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="description" id="description"
                                                          rows="2" >{{$product->description}}</textarea>
                                            </div>


                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Box *</label>
                                                <input type="text"  name="box" class="form-control" placeholder="box" value="{{$product->box}}"/>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Weight *</label>
                                                <input type="text"  name="weight" class="form-control" placeholder="Weight" value="{{$product->weight}}"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Is Feature *</label>
                                                <input type="checkbox"  name="isfeature" value="yes" {{$product->isfeature =='yes'?'checked':''}}/>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <label>Categories *</label>
                                                <select class="form-control select2"  multiple name="categories[]">
                                                    <option value="" disabled>Select All</option>
                                                    @foreach($Maincategories as $category)
                                                        <optgroup label="{{$category->name_en}}">
                                                            @foreach($category['categories'] as $cate)
                                                                <option value="{{$cate->id}}" {{ (in_array($cate->id ,$categoryProduct))  ?'selected' :''}}>{{$cate->name_en}}</option>
                                                            @endforeach
                                                        </optgroup>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Additional Information *</label>

                                                <textarea name="additional_information"  class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="Additional Information" id="additional_information"

                                                          rows="2">{{$product->additional_information}}</textarea>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Delivery Payment *</label>

                                                <textarea name="delivery_payment"  class="form-control summernote" id="kt_summernote_1"
                                                          placeholder="Delivery Payment" id="delivery_payment"

                                                          rows="2">{{$product->delivery_payment}}</textarea>
                                            </div>


                                        </div>
                                        <div class="form-group row">

                                            <div class="col-lg-2 text-center">
                                                <label>Product Image*</label>
                                                <div class="image-input image-input-outline" id="kt_image_5">
                                                    <div class="image-input-wrapper"
                                                         style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                    </div>

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                           data-action="change" data-toggle="tooltip" title=""
                                                           data-original-title="Personal Image">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="files[]"
                                                               accept=".png, .jpg, .jpeg" multiple />
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                          data-action="cancel" data-toggle="tooltip"
                                                          title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                                                </div>



                                            </div>
                                            <br>


                                        </div>

                                        <div class="form-group row ">
                                            @foreach($product->images as $image)
                                                <img src="{{asset('storage/product/'.$image->image)}}" style="width: 150px;height: 150px">
                                            @endforeach
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
                            toastr.success('Update.');
                            window.location="{{route('products.index')}}"
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
