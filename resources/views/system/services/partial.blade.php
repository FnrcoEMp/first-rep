<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Title</th>
            <th class=" dt-center">Icon</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($services as $index => $service)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$service->title_en}}</td>
                <td class=" dt-center">{{$service->icon}}</td>

                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            </a>

                            <a class="dropdown-item"
                               href="{{route('services.edit',$service->id)}}">Edit</a>


                            <a class="dropdown-item del_btn"  data-url="{{route('services.destroy',$service->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$services->links()}}
</div>
