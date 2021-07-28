<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Tag Name</th>

            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

@foreach($tags as $index => $tag)
        <tr id="t-12">
            <td class=" dt-center">{{++$index}}</td>

            <td class=" dt-center">{{$tag->title_en}}</td>



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


                        <a class="dropdown-item" id="del_btn" data-url="{{route('tags.destroy',$tag->id)}}" href="#" data-id="12">Delete</a>


                    </div>
                </div>
            </td>
        </tr>
@endforeach

        </tbody>
    </table>

    {{$tags->links()}}
</div>
