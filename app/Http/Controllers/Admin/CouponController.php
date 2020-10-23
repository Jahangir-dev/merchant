<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Models\Category;
use App\Models\Product;
use App\User;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		$coupon = Coupon::orderBy('created_at','desc')->get();
			
		return view('admin.coupon.index', compact('coupon'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{		

		$all_category = Product::all()->pluck('name','id');

		return view('admin.coupon.create', compact('all_category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required|min:3',
			'detail' => 'required|min:3',
			'discount' => 'nullable|numeric',
			'expiry'=>'required',
			'image' => 'nullable|image|mimes:jpg,png,gif,jpeg',
		]);

		$input = $request->all();

		if (isset($input['is_active'])== 1)
	    {
	      $request->validate([
					'price' => 'required'
				]);
	    }

	     $today_date = \Carbon\Carbon::now();                            
         $expire_date = \Carbon\Carbon::createFromFormat('Y-m-d', $input['expiry']);
         $data_difference = $today_date->diffInDays($expire_date, false);  //false param

        if($data_difference < 0) {
            notify()->error('Please Add Future Date');
            return back();
        }
        

	 	$code = $this->generateRandomString(6);
    	$input['type'] = 'c';
    	$input['code'] = $code;

		if ($file = $request->file('image')) {
			
		  $optimizeImage = Image::make($file);
	      $optimizePath = public_path().'/images/coupon/';
	      $name = time().$file->getClientOriginalName();
	      $optimizeImage->save($optimizePath.$name, 72);

		  $input['image'] = $name;

		}

		if (!isset($input['is_featured']))
    	{
      		$input['is_featured'] = 0;
    	}
	    if (!isset($input['is_exclusive']))
	    {
	      $input['is_exclusive'] = 0;
	    }
	    if (!isset($input['is_verified']))
	    {
	      $input['is_verified'] = 0;
	    }
	    if (!isset($input['is_active']))
	    {
	      $input['is_active'] = 0;
	    }
		
    	$input['user_id'] = Auth::user()->id;
		$coupon = Coupon::create($input);

		$coupon->slug = Str::slug($input['title'],'-');

		$uni_col = collect();
		$uni_col->push(Coupon::pluck('uni_id'));
		$uni_col = array($uni_col->flatten());

		do {
		  $random =  Str::random(5);
		} while (in_array($random, $uni_col));

		$coupon->uni_id = $random;
    	$coupon->save();
    	notify()->success('Coupon has been added');
		return back()->with('added', 'Coupon has been added');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Coupon  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Coupon  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{		
		$coupon = Coupon::findOrFail($id);			
		$all_category = Product::all()->pluck('name','id');		
		return view('admin.coupon.edit', compact('coupon','all_category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Coupon  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'title' => 'required|min:3',
			'detail' => 'required|min:3',
			'discount' => 'nullable|numeric',
			'image' => 'nullable|image|mimes:jpg,png,gif,jpeg',
			'expiry'=>'required'
		]);

		$coupon = Coupon::findOrFail($id);

		$input = $request->all();
		
	if (isset($input['is_active'])== 1)
	    {
	      $request->validate([
					'price' => 'required'
				]);
	    }

	     $today_date = \Carbon\Carbon::now();                            
         $expire_date = \Carbon\Carbon::createFromFormat('Y-m-d', $input['expiry']);
         $data_difference = $today_date->diffInDays($expire_date, false);  //false param

        if($data_difference < 0) {
            notify()->error('Please Add Future Date');
            return back();
        }
        

    	$input['type'] = 'c';
    	

		if ($file = $request->file('image')) {
			
			if ($coupon->image != null) {
				
				$image_file = @file_get_contents(public_path().'/images/coupon/'.$coupon->image);

				if($image_file){		
					unlink(public_path().'/images/coupon/'.$coupon->image);
				}

			}

			$optimizeImage = Image::make($file);
      $optimizePath = public_path().'/images/coupon/';
      $name = time().$file->getClientOriginalName();
      $optimizeImage->save($optimizePath.$name, 72);

			$input['image'] = $name;

		}
		
		if (!isset($input['is_featured']))
    {
      $input['is_featured'] = '0';
    }
    else{
      $input['is_featured'] = '1';
    }
    if (!isset($input['is_exclusive']))
    {
      $input['is_exclusive'] = '0';
    }
    else{
      $input['is_exclusive'] = '1';
    }
    if (!isset($input['is_verified']))
    {
      $input['is_verified'] = '0';
    }
    else{
      $input['is_verified'] = '1';
    }
    if (!isset($input['is_active']))
    {
      $input['is_active'] = '0';
    }
    else{
      $input['is_active'] = '1';
    }
    
		$coupon->update($input);
		$coupon->slug = Str::slug($input['title'],'-');
		$coupon->user_id = Auth::user()->id;
    	$coupon->save();
    	notify()->success('Coupon has been updated');
		return redirect()->back()->with('updated', 'Coupon has been updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Coupon  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$coupon = Coupon::findOrFail($id);


		if ($coupon->image != null) {

			$image_file = @file_get_contents(public_path().'/images/coupon/'.$coupon->image);

				if($image_file){		
					unlink(public_path().'/images/coupon/'.$coupon->image);
				}
		}

		$coupon->delete();
		notify()->success('Coupon has been deleted');
		return back()->with('deleted', 'Coupon has been deleted');
	}

	public function bulk_delete(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'checked' => 'required',
		]);

		if ($validator->fails()) {

			return back()->with('deleted', 'Please select one of them to delete');
		}

		foreach ($request->checked as $checked) {

			$this->destroy($checked);
			
		}
		
		return back()->with('deleted', 'Coupon has been deleted');   
	}

 public function dropdown(Request $request) 
  {
    $state = $request['state'];
    if($state == 'true'){
    	//$drop = ForumCategory::where('is_active','1')->where('category','c')->pluck('title','id')->all();
    }
    else{
    	//$drop = ForumCategory::where('is_active','1')->where('category','d')->pluck('title','id')->all();
    }
    return response()->json($drop);
  }

   public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
