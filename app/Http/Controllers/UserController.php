<?php
namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

public function options()
	{
		return view('choice');
	}

	public function forSignin()
	{
		return view('forSignin');
	}

public function forSignup()
	{
		return view('forSignup');
	}


	public function getDashboard()
	{
		$user  = Auth::user();
		//dd($user->getProfile());
		if($user){
			//$pro=$user->getprofile()->userid;
		return view('dashboard', compact("user"));
		}
		else
			return view('choice');
	}

	

	public function postSignUp(Request $request)
	{
		$email = $request['email'];
		$first_name = $request['first_name'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->email = $email;
		$user->first_name = $first_name;
		$user->password = $password;

		$user->save();
		$profile = new Profile();
		$profile->userid = $user->id;
		//$profile->about-'hellow';
		//$profile->save();
		//dd($user->getProfile());
		//if ($request->hasFile('image')) {
        
		$file=Input::file('image');
		$newFilename = $file->getClientOriginalName() .$user->id;
		$destinationPath= public_path() .'/files/';
		$file->move($destinationPath, $newFilename);
		$picPath='http://localhost/mzlaravel/public'.'/files/' .$newFilename;
		$profile->profilePic = $picPath;
		$profile->save();
		//$profile->profilePic=
		//$filename = $image->getClientOriginalName();
		//}
		
		Auth::login($user);
		

		return redirect()->route('dashboard',$user->first_name);
		
	}

	public function postSignIn(Request $request)

	{
		//$user = new User();
		if(\Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			$user  = Auth::user();
			return redirect()->route('dashboard', $user->first_name);
		}
		return redirect()->back();

	}
}