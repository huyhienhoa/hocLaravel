<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = $this->categories();
        return view('frontend.categories',compact('categories'));
    }
    
    public function categories(){
        $categories = Category::all();
        return $categories;
    }

    public function showAddForm(){
        return view('frontend.addcategory');
    }

    public function createCategory(Request $request){
        $category = new Category();
        $category->name = $request->input("name");
        $category->save();
        return redirect()->action('HomeController@index');
    }

    public function showEditForm($id){
        $category = Category::find($id);
        return view('frontend.editcategory',['category' => $category]);
    }

    public function updateCategory(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->input("name");
        $category->save();
        return redirect()->action('HomeController@index');
    }
    
    public function showDeleteForm($id){
        $category = Category::find($id);
        return view('frontend.deletecategory',['category'=>$category]);
    }
    
    public function deleteCategory(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        $request->session()->flash('success','Da xoa thanh cong');
        return redirect()->action('HomeController@index');
    }
}








