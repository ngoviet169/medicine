<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Repositories\PartnerRepository;
use Illuminate\Contracts\Routing\ResponseFactory;

class PartnersController extends BaseController
{

    public function __construct(Request $request, PartnerRepository $repository, ResponseFactory $response)
    {
        parent::__construct($request, $repository, $response);
    }

    public function index()
    {
        return $this->response->view($this->getViewName('index'));
    }

    public function store()
    {
        $validatedData = $this->validatePartner();
        $data = $this->request->all();
        //registration_image
        $registration_image = '';
        if ($this->request->hasFile('registration_image_file')) {
            $registration_image = $this->repository->saveImage($this->request->file('registration_image_file'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$registration_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }

        //business_registration_image
        $business_registration_image = '';
        if ($this->request->hasFile('business_registration_image_file')) {
            $business_registration_image = $this->repository->saveImage($this->request->file('business_registration_image_file'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$business_registration_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }

        //brand_image
        $brand_image = '';
        if ($this->request->hasFile('brand_image_file')) {
            $brand_image = $this->repository->saveImage($this->request->file('brand_image_file'), $this->getViewsFolder(), ['width' => 400, 'height' => 400]);
            if (!$brand_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }

        $data['brand_image'] = $brand_image;
        $data['registration_image'] = $registration_image;
        $data['business_registration_image'] = $business_registration_image;

        $this->repository->create($data);

        return $this->redirectTo('index');
    }

    public function update($id)
    {
        //$data = $this->request->all();
        //var_dump($data);
        //die();

        $validatedData = $this->validatePartner();
        $item = $this->repository->findOrFail($id);
        $data = $this->request->all();
        //registration_image
        $registration_image = '';
        if ($this->request->hasFile('registration_image_file')) {
            $registration_image = $this->repository->saveImage($this->request->file('registration_image_file'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$registration_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }else{
            $registration_image = $item->registration_image;
        }

        //business_registration_image
        $business_registration_image = '';
        if ($this->request->hasFile('business_registration_image_file')) {
            $business_registration_image = $this->repository->saveImage($this->request->file('business_registration_image_file'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$business_registration_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }else{
            $business_registration_image = $item->business_registration_image;
        }

        //brand_image
        $brand_image = '';
        if ($this->request->hasFile('brand_image_file')) {
            $brand_image = $this->repository->saveImage($this->request->file('brand_image_file'), $this->getViewsFolder(), ['width' => 400, 'height' => 400]);
            if (!$brand_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }else{
            $brand_image = $item->brand_image;
        }

        $data['brand_image'] = $brand_image;
        $data['registration_image'] = $registration_image;
        $data['business_registration_image'] = $business_registration_image;

        $item->fill($data)->save();

        return $this->redirectTo('index');
    }

    public function validatePartner()
    {
        if (in_array($this->request->method(), ['POST']))
            return $this->request->validate([
                'brand_name' => 'required|max:255',
                'brand_image_file' => 'mimes:jpeg,bmp,png,gif|max:4000',
                'address' => 'required|max:255',
                'ward' => 'required|max:255',
                'district' => 'required|max:255',
                'city' => 'required|max:255',
                'home_phone' => 'required|max:15',
                'mobile_phone' => 'required|max:15',
                'facebook' => 'url|max:255',
                'email' => 'between:3,64|email|required',
                'business_registration_number' => 'required|max:45',
                'business_registration_image_file' => 'required|mimes:jpeg,bmp,png,gif|max:4000',
                'website' => 'url|max:255',
                'establish_date' => 'date|required',
                'registration_image_file' => 'required|mimes:jpeg,bmp,png,gif|max:4000',
                'tax_number' => 'max:255',
                'vice_gerent' => 'required|max:255',
                'contact_name' => 'required|max:255',
                'contact_home_phone' => 'required|max:15',
                'contact_mobile_phone' => 'required|max:15',
                'contact_email' => 'email|required'
            ]);
        if (in_array($this->request->method(), ['PUT']))
            return $this->request->validate([
                'brand_name' => 'required|max:255',
                'brand_image_file' => 'nullable|mimes:jpeg,bmp,png,gif|max:4000',
                'address' => 'required|max:255',
                'ward' => 'required|max:255',
                'district' => 'required|max:255',
                'city' => 'required|max:255',
                'home_phone' => 'required|max:15',
                'mobile_phone' => 'required|max:15',
                'facebook' => 'url|max:255',
                'email' => 'between:3,64|email|required',
                'business_registration_number' => 'required|max:45',
                'business_registration_image_file' => 'nullable|mimes:jpeg,bmp,png,gif|max:4000',
                'website' => 'url|max:255',
                'establish_date' => 'date|required',
                'registration_image_file' => 'nullable|mimes:jpeg,bmp,png,gif|max:4000',
                'tax_number' => 'max:255',
                'vice_gerent' => 'required|max:255',
                'contact_name' => 'required|max:255',
                'contact_home_phone' => 'required|max:15',
                'contact_mobile_phone' => 'required|max:15',
                'contact_email' => 'email|required'
            ]);
    }
}
