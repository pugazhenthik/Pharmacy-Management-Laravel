<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Category;
use App\Models\Type;
use App\Models\Generic;
use App\Models\Manufacture;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\MedicineRequest;
use Arr;
class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::with('category','generic','type')->get();
    
        return view('Backend.pages.Medicine.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category:: orderBy('category_name','asc')->get();
        $medTypes = Type::orderBy('type_name','asc')->get();
        $generics = Generic::orderBy('generic_name','asc')->get();
        $manufactures = Manufacture::orderBy('manufac_name','asc')->get();
        $units = Unit::orderBy('unit_name','asc')->get();
        return view('Backend.pages.Medicine.create',compact('categorys','medTypes','generics','manufactures','units'));
    }

    public function subCatFind($id)
    {   
        $subCategory=Category::where('parentId',$id)->get();
        return response()->json($subCategory,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRequest $request)
    {
        $medicine = new Medicine;
        if($request->med_image)
        {    
            $ext=$request->file('med_image')->getClientOriginalExtension();
            $path="Backend_assets/Medicine/";
            $name='Medicine_'.time().'.'.$ext;
            $request->file('med_image')->move($path, $name);
            Arr::set($request,'med_image',$name);
            $medicine->fill($request->all())->save();
        }
        $medicine->fill($request->all())->save();
        $notification = array(
            'title'=>'Medicine',
            'message'=>'Medicine Added Successfully!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $medicine = Medicine::findOrFail($id);
    //    if($medicine->med_image!='')
    //    {
    //        unlink(public_path('Backend_assets/Medicine/').$medicine->med_image);
    //    }
       $delete = $medicine->delete();
       if($delete){
        $notification = array(
            'title'=> 'Medicine',
            'message' => 'Successfully! Medicine Information Deleted',
            'alert-type' => 'success',
        );
       }
       else{
           $notification = array(
            'title'=> 'Customar',
            'message' => 'Successfully! Customar Information Deleted',
            'alert-type' => 'error',
          ); 
        } 
        return redirect()->back()->with($notification);
    }
}
