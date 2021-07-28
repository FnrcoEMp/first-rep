<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\CertificateRequest;
use App\Model\Company;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Model\Certification;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class CertificationController extends Controller
{
    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificaions=Certification::orderby('id','desc')->paginate(20);

        return view('system.certifications.index' ,compact('certificaions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $validator=Validator::make($request->all(),[
            'title'  =>'required|string',
            'symbol' =>'required|string|unique:certifications',
            'image' =>'required|file:mimes:jpeg:png,jpg',
            'iso' =>'required|string|unique:certifications',
        ]);
        if($validator->fails()){
            return  response(['errors'=>$validator->errors()]);
        }
        $data['image']=$this->uploadSingleImage($request->image,'certifications');
          Certification::create($data);

          return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        return response(['certification'=>$certification]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        $data['image']=$request->all();
        $validator=Validator::make($request->all(),[
            'title'  =>'required|string',
            'symbol' =>'required|string|unique:certifications,symbol,'.$certification->id,
            'image' =>'sometimes|nullable|file:mimes:jpeg:png,jpg',
            'iso' =>'required|string|unique:certifications,symbol,'.$certification->id,
        ]);
        if($validator->fails()){
            return  response(['errors'=>$validator->errors()]);
        }
        if($request->hasFile('image')){
            $data['image']=$this->uploadSingleImage($request->image,'certifications');
        }
        $certification->update($data);
        return 'Update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();
        return 'deleted';
    }

    public function cerification_request(){

        $certifications=CertificateRequest::with(['user','certificate'])->paginate(20);
        return view('system.certifications.request_certification' ,compact('certifications'));

    }

    public function add_certificate($id=null){

        if($id)
            $Requestcertification=CertificateRequest::findorfail($id);
        else
            $Requestcertification=null;

        $certifications=Certification::all();
        $users=User::all();
        $teams=Team::all();
        $companies=Company::all();
        return view('system.certifications.create' ,compact('teams','users','Requestcertification','certifications','companies'));

    }

    public function save_certificate(Request $request){
        $validator=Validator::make($request->all(),[
            'user_id'   =>'required|numeric',
            'trainer_id'   =>'required|numeric',
            'certificate_id'   =>'required|numeric',
            'status'    =>'required|numeric',
            'title'     =>'required|string',
            'date'      =>'required|date',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'serial' =>'required|unique:certificate_requests',
            'username_certificate' =>'required|string',
            'compnay_id' =>'required|numeric',
        ]);
        $request->merge(['isCreated'=>1]);


        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        if($request->requestCertificate){
            $Requestcertification=CertificateRequest::findorfail($request->requestCertificate);
            $Requestcertification->update($request->all());
        }else{
            CertificateRequest::create($request->all());
        }
    }
    public function generate_serial($id){

        $certificate=Certification::where('id',$id)->first();

        $digits = 6;
        //    Eg. substr(str_shuffle("0123456789"), 0, 5);
        return 'FN-'.$certificate->symbol.'-'.substr(str_shuffle("0123456789"), 0, 5);
    }
    public function certificate_show($id){

        $certificate=CertificateRequest::findorfail($id);
        $pdf =Pdf::loadView('system.certifications.pdf', ['certificate'=>$certificate], [], [
            'format' => 'A4-L'
        ]);
        $output = $pdf->output();

        return new \Illuminate\Http\Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline',
            'filename' => "company.pdf'"]);
    }

    public function certificate_Edit($id){

        $Requestcertification=CertificateRequest::findorfail($id);
        $certifications=Certification::all();
        $users=User::all();
        $teams=Team::all();
        $companies=Company::all();

        return view('system.certifications.edit' ,compact('companies','teams','users','Requestcertification','certifications'));

    }

    public function Update_certificate(Request $request ,$id){


        $validator=Validator::make($request->all(),[
            'user_id'   =>'required|numeric',
            'trainer_id'   =>'required|numeric',
            'certificate_id'   =>'required|numeric',
            'status'    =>'required|numeric',
            'title'     =>'required|string',
            'date'      =>'required|date',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'serial' =>'required|unique:certificate_requests,serial,'.$id,
            'username_certificate' =>'required|string',
            'compnay_id' =>'required|numeric',
        ]);
        $request->merge(['isCreated'=>1]);


        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
            $Requestcertification=CertificateRequest::findorfail($id);
            $Requestcertification->update($request->all());
    }



}
