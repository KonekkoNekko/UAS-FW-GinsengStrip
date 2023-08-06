<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;
use PDF;
use Illuminate\Support\Str;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pageTitle = 'Data Produk';
        $products = Product::all();
        confirmDelete();

        return view('admin.productadms.index', compact('products', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pageTitle = 'Add Product';
        return view('admin.productadms.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'productAlbum' => 'required',
            'productArtist' => 'required',
            'productPrice' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File
        $file = $request->file('productphoto');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            //Store File
            $file->storeAs('public/products', $originalFilename);
        }

        // ELOQUENT
        $product = new Product;
        $product->product_album = $request->productAlbum;
        $product->product_artist = $request->productArtist;
        $product->product_price = $request->productPrice;
        if ($file != null) {
            $product->original_filename = $originalFilename;
        }

        $product->save();

        Alert::success('Added Successfully', 'Product Data Added Successfully.');
        return redirect()->route('productadms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::find($id);
        return view('admin.productadms.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // ELOQUENT
        $product = Product::find($id);
        return view('admin.productadms.edit', compact(
            'product'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'productAlbum' => 'required',
            'productArtist' => 'required',
            'productPrice' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get File
        $file = $request->file('productphoto');
        $product = Product::find($id);
        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();

            Storage::disk('public')->delete('products/'. $product->original_filename);
            //Store File
            $file->storeAs('public/products', $originalFilename);
        }

        // ELOQUENT

        $product->product_album = $request->productAlbum;
        $product->product_artist = $request->productArtist;
        $product->product_price = $request->productPrice;
        if ($file != null) {
            $product->original_filename = $originalFilename;
        }
        $product->save();

        Alert::success('Changed Successfully', 'Product Data Changed Successfully.');
        return redirect()->route('productadms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id);
        $deletionpath = 'public/products/' . $product->original_filename;
        Storage::delete($deletionpath);
        $product->delete();
        Alert::success('Deleted Successfully', 'Product Data Deleted Successfully.');
        return redirect()->route('productadms.index');
    }

    public function downloadFile($id)
    {
        $product = Product::find($id);
        $path = 'public/products/' . $product->original_filename;
        $downloadFilename = Str::lower($product->original_filename);

        if (Storage::exists($path)) {
            return Storage::download($path, $downloadFilename);
        }
    }

    public function exportExcel()
    {
        return Excel::download(new ProductExport, 'product_data.xlsx');
    }

    public function exportPdf()
    {
        $products = Product::all();

        $pdf = PDF::loadView('admin.productadms.export_pdf', compact('products'));

        return $pdf->download('product_data.pdf');
    }
}
