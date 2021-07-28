<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Title</th>
            <th class=" dt-center">type</th>
            <th class=" dt-center">Logo</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($Testimonials as $index => $Testimonial)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$Testimonial->title}}</td>
                <td class=" dt-center">{{$Testimonial->type}}</td>
                <td class=" dt-center"><img src="{{asset('storage/testimonial/'.$Testimonial->logo)}}" style="width:50px"></td>

                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            </a>

                            <a class="dropdown-item"
                               href="{{route('Testimonials.edit',$Testimonial->id)}}">Edit</a>


                            <a class="dropdown-item del_btn"  data-url="{{route('Testimonials.destroy',$Testimonial->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$Testimonials->links()}}
</div>
