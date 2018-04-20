<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\About;
use Auth;
use Validator;

class AppController extends Controller
{

    /**
    *
    * Prototype Home page
    *
    */


    public function index() {
      return view('index');
    }

    /**
    * User Profile
    * @var $id
    *
    */

    public function profile($id) {
      $user = User::find($id);
      if ($user) {
        return view('profile.show',compact('user'));
      }else {
        return redirect('/');
      }
    }


    /**
    *
    * store about data
    *
    *
    */

    public function storeProfile(Request $request) {
      $form_validate = [
        'phone' => 'Phone Number',
        'country' => 'Country',
        'about' => 'Bio',
      ];

      $this->validate($request , [
        'phone' => 'required',
        'country' => 'required|not_in:0',
        'about' => 'required|max:120',
      ],[],$form_validate);

      $about = new About;
      $about->user_id = Auth::user()->id;
      $about->about = $request->about;
      $about->country = $request->country;
      $about->phone = $request->phone;

      $user = User::where('id',Auth::user()->id)->update(['status' => 1]);
      if ($about->save()){
        return back()->with('success' , 'Your Data Updated Successfully');
      }else {
        return back()->with('error' , 'Faild , please try again !');
      }


    }


    /**
    * show all monitors
    *
    * @return $monitors
    */


    public function monitors() {
      $mentors = User::where('role',1)->paginate(12);
      return view('profile.index',compact('mentors'));
    }




}
