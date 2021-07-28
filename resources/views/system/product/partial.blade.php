<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>
            <th class=" dt-center">No.</th>
            <th class=" dt-center">Name</th>
            <th class=" dt-center">Weight</th>
            <th class=" dt-center">Box</th>
            <th class=" dt-center">Rate</th>

            <th class=" dt-center">Control</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $index => $product)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$product->name_en}}</td>
                <td class=" dt-center">{{$product->weight}}</td>
                <td class=" dt-center">{{$product->box}}</td>
                <td class=" dt-center">{{$product->rate}} </td>

                <td class=" dt-center">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            </a>

                            <a class="dropdown-item"
                               href="{{route('products.edit',$product->id)}}">Edit</a>


                            <a class="dropdown-item del_btn"  data-url="{{route('products.destroy',$product->id)}}" href="#" data-id="12">Delete</a>


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$products->links()}}
</div>
