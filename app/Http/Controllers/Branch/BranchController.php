<?php

namespace App\Http\Controllers\Branch;
use App\service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\appointment;
use App\Branch;
use Validator;


class BranchController extends Controller
{
    //

    public function index()
    {
        app()->setLocale(Session::get('locale'));
        $BranchName=Branch::find(auth()->user()->branches_id)->branches_name;
        $InformationArray=Array(
            "BranchName"=>$BranchName
        );

        return view('Branch.index',$InformationArray);
    }



    public function Createappointment()
    {


        app()->setLocale(Session::get('locale'));
        $services=service::all();
        $BranchName=Branch::find(auth()->user()->branches_id)->branches_name;
        $InformationArray=Array(
            "BranchName"=>$BranchName,
            "services"=>$services
        );


        return view('Branch.Createappointment',$InformationArray);
    }




    public function StoreAppointment(Request $request)
    {




        $Date=Carbon::tomorrow()->format("Y-m-d");



        $validator = Validator::make($request->all(), [
            'Count' => 'required|string|max:50',
         //   'Requset_date' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }




          $CountOfRecored=appointment::where('branches_id','=',auth()->user()->branches_id)->where('date','=',$Date)->count();
          if ($CountOfRecored>1)
          {
            appointment::where('branches_id','=',auth()->user()->branches_id)->where('date','=',$Date)->update([
                "av_count"=>$request->Count,
                "service_id"=>$request->Service,
            ]);

          }


          else
          {

            appointment::create([
                'branches_id'  =>auth()->user()->branches_id
                , 'service_id'  =>$request->Service
              , 'date'=>$Date,
               "av_count"=>$request->Count,
          ]);

          }



        
        return response()->json(['status'=>'success'],200);

    }



    // Showappointment




    public function Showappointment()
    {

        app()->setLocale(Session::get('locale'));
        $BranchName=Branch::find(auth()->user()->branches_id)->branches_name;
        $InformationArray=Array(
            "BranchName"=>$BranchName
        );


        return view('Branch.Showappointment',$InformationArray);
    }
}
