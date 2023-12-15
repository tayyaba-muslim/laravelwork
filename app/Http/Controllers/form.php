<?php

namespace App\Http\Controllers;
use App\Models\formModel;
use Illuminate\Http\Request;

class form extends Controller
{
    public function register(){
        return view('registration');
    }
    public function register_data(Request $request){
        // print_r($request->all());
        // return view('registration');
        $request->validate([
          'name' => 'required',
          'email' => 'required | email',
          'pass'  => 'required'
        ]);

        $data = new formModel();
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->password = $request['pass'];
        $data-> save();
        return redirect('/user-view');

    }
    public function user_view(){
        $records= formModel::all();
        // echo '<pre>';
        // print_r($records->toArray());
        // echo '</pre>';

        $userdata = compact('records');
        return view('user-view')->with($userdata);
    }

    public function user_delete($id){
        // $records= formModel::find($id)->delete();
        // return redirect('user-view');

        $records= formModel::find($id);
        if(!is_null($records)){
            $records->delete();
            return redirect('user-view');
        }else{
             return redirect('user-view');
        }

    }
    public function user_edit($id){
        $records= formModel::find($id);
        // return view('edit');
        $data= compact('records');
        return view('edit')->with($data);


    }
}
