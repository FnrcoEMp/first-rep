<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Category Name</th>
            <th class=" dt-center">Main Category</th>

            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

@foreach($categories as $index => $category)
        <tr id="t-12">
            <td class=" dt-center">{{++$index}}</td>

            <td class=" dt-center">{{$category->name_en}}</td>
            <td class=" dt-center"> {{ $category['category'] ? $category['Category']->name_en :'main category'}}</td>



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

                        <a href="#"   class="dropdown-item" data-toggle="modal" data-target="#UpdatePartners-{{$category->id}}">

                            Edit
                        </a>

                        <a class="dropdown-item del_btn"  data-url="{{route('categories.destroy',$category->id)}}" href="#" data-id="12">Delete</a>


                    </div>
                </div>
            </td>

            <div class="modal fade" id="UpdatePartners-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="UpdateForm" data-url="{{route('categories.update',$category->id)}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
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
                                                <label>Category Name*</label>
                                                <input type="text"  name="name_en" required class="form-control" value="{{$category->name_en}}"/>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Categories*</label>
                                                <select class="form-control select2"   name="parent">
                                                    <option value="" selected=""> Main Category</option>

                                                    @foreach($mainCategories as $cate)
                                                        <option value="{{$cate->id}}"{{$cate->id==$category->parent ? 'selected' : ''}} >{{$cate->name_en}}</option>
                                                    @endforeach

                                                </select>
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

    {{$categories->links()}}
</div>
