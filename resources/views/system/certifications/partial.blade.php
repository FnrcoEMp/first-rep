<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th>Certificate Title</th>
            <th>Certificate ISO</th>
            <th>Certificate Symbol</th>
            <th class=" dt-center">Logo</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($certificaions as $index => $certificaion)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>
                <td class=" dt-center">{{$certificaion->title}}</td>
                <td class=" dt-center">{{$certificaion->iso}}</td>
                <td class=" dt-center">{{$certificaion->symbol}}</td>
                <td class=" dt-center"><img src="{{asset('storage/'.$certificaion->image)}}"  style="width: 50px"></td>
                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">



                            {{--                        <a class="dropdown-item"--}}
                            {{--                           href="#">Edit</a>--}}

                            <a href="{{route('certifications.edit',$certificaion->id)}}"    class="dropdown-item edit_btn" data-toggle="modal" data-target="#UpdatePartners-{{$certificaion->id}}">

                                Edit
                            </a>

                            <a class="dropdown-item del_btn" id="del_btn" data-url="{{route('certifications.destroy',$certificaion->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>



            </tr>


        @endforeach

        </tbody>
    </table>

    {{$certificaions->links()}}
</div>
