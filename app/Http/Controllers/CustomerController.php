<?php

namespace App\Http\Controllers;
use App\Model\Customer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function getAllCustomers(){
      $customerModel=new Customer();
      $data=$customerModel->getAllCustomers();
      return response()->json($data);
    }
   public function addCustomer(Request $request){
        // $file=$request->file('file');
        // $uploadPath='public/image';
        // $originalImage=$file->getClientOriginalName();
        // $file=move( $uploadPath,$originalImage);
        $customerModel=new Customer();
        $data = $customerModel->addCustomer($request->all());

        //$customerModel.save();
        return response()->json($data);
    }
   public function deleteCustomer(Request $request){
     $id=$request->id;
     $customerModel=new Customer();
     $customerModel->deleteCustomer($id);

   }

   public function updateCustomer(Request $request){
     $id=$request->id;
     $customerModel=new Customer();
     $customerModel->updateCustomer($id,$request->all());
   }

   public function getOneCustomer(Request $request){
    $id=$request->id;
    $customerModel=new Customer();
    $data=$customerModel->getOneCustomer($id);
    return response()->json($data);


  }


}


