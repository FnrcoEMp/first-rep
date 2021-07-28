<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Branch;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    public function index(){

        $branches=Branch::all();
      return view('system.branch.index',compact('branches'));
    }

    public function update(Request $request)
    {


        $ids = Branch::select('id')->pluck('id');
        Branch::whereIn('id', $ids)->delete();

        foreach ($request->work as $branch) {
            Branch::updateOrCreate([
                'name_en' => $branch['name_en'],
                'name_ar' => $branch['name_ar'],
                'address_en' => $branch['address_en'],
                'address_ar' => $branch['address_ar'],
                'url' => $branch['url'],
            ]);
        }

        return 'Saved';
    }

}
