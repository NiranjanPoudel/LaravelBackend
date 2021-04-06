<?php

namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Customer
{
   // protected $table = 'customers';

    function getAllCustomers(){
       $data= DB::table('customers')->get();
       return $data;
    }



   function addCustomer($data){

    $id = DB::table('customers')->insertGetId($data);
    $data = DB::table('customers')->find($id);

     return $data;
   }

   function deleteCustomer($id){
      DB::table('customers')->where('id',$id)->delete();
   }

   function updateCustomer($id,$data){
       DB::table('customers')->where('id',$id)->update($data);
   }
   function getOneCustomer($id){
     $data= DB::table('customers')->where('id',$id)->get()->first();
     return $data;
   }

}
?>
