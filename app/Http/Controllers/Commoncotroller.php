<?php

namespace App\Http\Controllers;

use App\Mail\WorkMail;
use App\Models\contact;
use App\Models\workjob;
use App\Models\workservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Commoncotroller extends Controller
{
    public function index(){
        $allservice = workservice::where('time','<>', 'no')->get();
        $alljob = workjob::paginate(3);
        return view('index',compact('allservice','alljob'));
    }
    
    public function contact(Request $request){
        if($request->input('name')||$request->input('email') ){
            $contact = new contact();
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->phone = $request->input('phone');
            $contact->text = $request->input('text');
            $contact->save();
            session()->flash('flash_message', 'この度は、お問い合わせいただき誠にありがとうございました。
            お送りいただきました内容を確認の上、担当者より折り返しご連絡させていただきます。');
            return view('contact');
        }else
        {
            return view('contact');
        }
      
    }
    
    public function work(Request $request){
       if($workRequest = $request->input('service'))
       {
        $getServiceInfo = workservice::where('id','=', $workRequest)
        ->first();
        return view('work',compact('getServiceInfo'));
       }
        else
        {
            return view('index');
        }
    }
    
    public function workRequest(Request $request){
        if($request->input('name') || $email = $request->input('email') || $email = $request->input('phone')){
            $name = $request->input('name');
            $mail = $request->input('mail');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $worktext = $request->input('message');
            $work = $request->input('work'); 
            $email = 'tmkee0525@gmail.com';
            Mail::send(new WorkMail($name, $email,$phone, $mail, $address,$worktext,$work));
            session()->flash('flash_message', 'この度は、ご依頼いただき誠にありがとうございました。
            お送りいただきました内容を確認の上、担当者より折り返しご連絡させていただきます。');
            return back();
        }
        else
        {
            return view('index');
        } 
    }
    
    public function job(){
        $alljob = workjob::paginate(6);
        return view('job',compact('alljob'));
    }
    
    public function jobDetail(Request $request){
        $alljob = workjob::where('id', '=', $request->input('job'))
        ->first();
        return view('jobdetail',compact('alljob'));
    }


    public function about(){
        return view('about');
    }
    public function service(){
        $allservice = workservice::where('time','<>', 'no')->get();
        return view('service',compact('allservice'));
    }

    public function nimokun(){
        $alljob = workjob::all();
        return view('admin',compact('alljob'));
    }
}