<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>

            <th class=" dt-center">Logo</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

@foreach($companies as $index => $company)
        <tr id="t-12">
            <td class=" dt-center">{{++$index}}</td>
            <td class=" dt-center">{{$company->name}}</td>





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

                        <a href="#"   class="dropdown-item" data-toggle="modal" data-target="#UpdatePartners-{{$company->id}}">

                            Edit
                        </a>

                        <a class="dropdown-item del_btn" data-url="{{route('companies.destroy',$company->id)}}" href="#" data-id="12">Delete</a>


                    </div>
                </div>
            </td>

            <div class="modal fade" id="UpdatePartners-{{$company->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="UpdateForm" data-url="{{route('companies.update',$company->id)}}">
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
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input type="text" name="name" placeholder="Company name"  value="{{$company->name}}" class="form-control">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button"  class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                <button type="submit"  class="btnSubmit btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </tr>


@endforeach

        </tbody>
    </table>

    {{$companies->links()}}
</div>
