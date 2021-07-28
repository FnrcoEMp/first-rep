<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>

            <th class=" dt-center">Image</th>

            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

@foreach($clients as $index => $client)
        <tr id="t-12">
            <td class=" dt-center">{{++$index}}</td>


            <td class=" dt-center"><img src="{{asset('storage/'.$client->image)}}" style="width: 50px"></td>



            <td class=" dt-center">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Control
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        </a>

{{--                        <a class="dropdown-item"--}}
{{--                           href="#">Edit</a>--}}

                        <a href="#"   class="dropdown-item" data-toggle="modal" data-target="#UpdatePartners-{{$client->id}}">

                            Edit
                        </a>

                        <a class="dropdown-item del_btn"  data-url="{{route('clients.destroy',$client->id)}}" href="#" data-id="12">Delete</a>


                    </div>
                </div>
            </td>

            <div class="modal fade" id="UpdatePartners-{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="UpdateForm" data-url="{{route('clients.update',$client->id)}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    {{--                                <label class="col-form-label text-right col-lg-3 col-sm-12">partners</label>--}}
                                    <div class="col-lg-6 col-md-9 col-sm-12">

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Client Name*</label>
                                                <input type="text"  name="name_en" required class="form-control" value="{{$client->name_en}}"/>
                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-lg-12">
                                                <label>Client Image*</label>
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
                                                <img src="{{asset('storage/'.$client->image)}}" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button"  class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                <button type="submit"   class="btnSubmit btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </tr>


@endforeach

        </tbody>
    </table>

    {{$clients->links()}}
</div>
