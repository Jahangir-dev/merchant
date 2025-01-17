<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\BrandContract;
use App\Http\Controllers\BaseController;
use App\User;
use App\Role;

class BrandController extends BaseController
{
    /**
     * @var BrandContract
     */
    protected $brandRepository;

    /**
     * CategoryController constructor.
     * @param BrandContract $brandRepository
     */
    public function __construct(BrandContract $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $brands = $this->brandRepository->listBrands();

        $brands = $brands->filter(function($brand){
                    if(!empty($brand['user_id'])){

                        $brand->first_name = User::where('id',$brand['user_id'])->pluck('first_name')->first();
                    }
                    return $brand;
                 });

        $this->setPageTitle('Brands', 'List of all brands');
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::whereHas(
                    'role', function($q){
                        $q->where('type', 'merchant');
                    })->get();

        $this->setPageTitle('Brands', 'Create Brand');
        return view('admin.brands.create',compact('users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000',
            'user_id'  =>  'required'
        ]);

        $params = $request->except('_token');

        $brand = $this->brandRepository->createBrand($params);

        if (!$brand) {
            return $this->responseRedirectBack('Error occurred while creating brand.', 'error', true, true);
        }
        return $this->responseRedirect('admin.brands.index', 'Brand added successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $brand = $this->brandRepository->findBrandById($id);

        $users = User::whereHas(
                    'role', function($q){
                        $q->where('type', 'merchant');
                    })->get();

        $this->setPageTitle('Brands', 'Edit Brand : '.$brand->name);
        return view('admin.brands.edit', compact('brand','users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $brand = $this->brandRepository->updateBrand($params);

        if (!$brand) {
            return $this->responseRedirectBack('Error occurred while updating brand.', 'error', true, true);
        }
        return $this->responseRedirectBack('Brand updated successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $brand = $this->brandRepository->deleteBrand($id);

        if (!$brand) {
            return $this->responseRedirectBack('Error occurred while deleting brand.', 'error', true, true);
        }
        return $this->responseRedirect('admin.brands.index', 'Brand deleted successfully' ,'success',false, false);
    }
}
