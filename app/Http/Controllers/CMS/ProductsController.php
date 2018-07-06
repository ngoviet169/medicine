<?php

namespace App\Http\Controllers\CMS;

use App\Repositories\ProductRepository;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    public function __construct(Request $request, ProductRepository $repository, ResponseFactory $response)
    {
        parent::__construct($request, $repository, $response);
    }

    public function index()
    {
        return $this->response->view($this->getViewName('index'));
    }

    public function store()
    {
        $this->validation();
        $data = $this->request->all();
        $product_image = '';
        if ($this->request->hasFile('product_image')) {
			$product_image = $this->repository->saveImage($this->request->file('product_image'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$product_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }

        $data['product_image'] = $product_image;
        $this->repository->create($data);

        return $this->redirectTo('index');
    }

    public function update($id)
    {

        $this->validation();
        $item = $this->repository->findOrFail($id);
        $data = $this->request->all();

        if ($this->request->hasFile('product_image')) {
            $product_image = $this->repository->saveImage($this->request->file('product_image'), $this->getViewsFolder(), ['width' => 1024, 'height' => 600]);
            if (!$product_image) {
                return redirect()->back()->withError('Could not save image');
            }
        }else{
            $product_image = $item->product_image;
        }

        $data['product_image'] = $product_image;

        $item->fill($data)->save();

        return $this->redirectTo('index');
    }

    public function validation()
    {
        if (in_array($this->request->method(), ['POST']))
            return $this->request->validate([
                'product_name' => 'required|max:255',
                'product_image' => 'mimes:jpeg,bmp,png,gif|max:4000',
                'category_name' => 'required|max:255',
                'price' => 'required|max:255|digits_between:5,15',
                'description' => 'required|max:255',
                'status' => 'required'
            ]);
        if (in_array($this->request->method(), ['PUT']))
            return $this->request->validate([
                'product_name' => 'required|max:255',
                'category_name' => 'required|max:255',
                'price' => 'required|max:255|digits_between:5,15',
                'description' => 'required|max:255',
                'status' => 'required'
            ]);
    }
}
