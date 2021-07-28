<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>

            <th class=" dt-center">#</th>
            <th class=" dt-center">Training title</th>
            <th class=" dt-center">Trainer.</th>
            <th class=" dt-center">Trainer Level.</th>
            <th class=" dt-center">Lessons</th>
            <th class=" dt-center">Enrolled</th>
            <th class=" dt-center">Access</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($trainings as $index => $training)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$training->title_en}}</td>
                <td class=" dt-center">{{$training->level_en}}</td>
                <td class=" dt-center">{{$training['trainer']->name_en}}</td>
                <td class=" dt-center">{{$training->lesson_en}}</td>
                <td class=" dt-center">{{$training->enrolled_en}}</td>
                <td class=" dt-center">{{$training->access_en}}</td>

                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            </a>

                            <a class="dropdown-item"
                               href="{{route('trainings.edit',$training->id)}}">Edit</a>


                            <a class="dropdown-item del_btn"  data-url="{{route('trainings.destroy',$training->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$trainings->links()}}
</div>
