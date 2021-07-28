<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th> UserName </th>
            <th>Certificate Title</th>
            <th> Status</th>
            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($certifications as $index => $certificaion)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>
                <td class=" dt-center">{{$certificaion['user']->name}}</td>
                <td class=" dt-center">{{$certificaion['certificate']->title}}</td>

                <td class=" dt-center">
                    @if($certificaion->isCreated == 0)
                    <span class="btn btn-danger">Hold</span>
                    @else
                       <a href="{{url('show/certificate/'.$certificaion->user_id.'/'.$certificaion->certificate_id)}}">
                           <span class="btn btn-success">success</span>
                       </a>
                    @endif
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          @if($certificaion->isCreated == 0)
                                <a class="dropdown-item"   href="#" >Delete</a>
                                <a class="dropdown-item"   href={{url('admin/add/certificate/'.$certificaion->id)}} >add Certificate</a>
                            @else
                                <a href="{{route('certificate.show',$certificaion->id)}}" class="dropdown-item">Show</a>
                                <a class="dropdown-item"   href="{{route('certificate.edit',$certificaion->id)}}" >Edit</a>
                                <a class="dropdown-item del_btn"  data-url="" href="#" >Delete</a>
                            @endif

                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$certifications->links()}}
</div>
