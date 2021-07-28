<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Name En</th>
            <th class=" dt-center">Position En</th>
            <th class=" dt-center">Role En</th>
            <th class=" dt-center">Image</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teams as $index => $team)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$team->name_en}}</td>
                <td class=" dt-center">{{$team->position_en}}</td>
                <td class=" dt-center">{{$team->role_en}}</td>
                <td class=" dt-center"><a href="{{url('storage/'.$team->image)}}">
                        <img src="{{asset('storage/'.$team->image)}}" style="width:80px;height: 80px">
                    </a></td>


                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            </a>

                            <a class="dropdown-item"|
                               href="{{route('teams.edit',$team->id)}}">Edit</a>


                            <a class="dropdown-item del_btn"  data-url="{{route('teams.destroy',$team->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
            </table>
    {{$teams->links()}}
</div>
