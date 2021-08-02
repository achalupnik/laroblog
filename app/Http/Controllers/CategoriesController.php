<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function addCategory(Request $request) {
        $category_name = trim($request->input('category_name'));
        if($category_name == '') {
            return json_encode(['error', 'Nie możesz dodać kategorii bez nazwy']);
        }
        if(Categories::where('name', '=', $category_name)->count()) {
            return json_encode(['error', 'Istnieje już kategoria o takiej nazwie']);
        }
        $category = new Categories;
        $category->name = $request->input('category_name');
        if($category->save()) {
            return json_encode(['success', 'Kategoria została zapisana']);
        } else {
            return json_encode(['error', 'Wystąpił błąd podczas zapisywania kategorii']);
        }
    }

    public function updateCategoryDisabledState(Request $request) {
        $category_id = $request->input('category_id');
        $category_disabled = !$request->input('toggle_state');
        $category = Categories::find($category_id);
        $category->disabled = $category_disabled;
        $category->save();
    }

    public function deleteCategory(Request $request) {
        $category_id = $request->input('category_id');
        $category = Categories::find($category_id);
        //$category->delete();
        $category->deleted = 1;
        if($category->save()) {
            return json_encode(['success', 'Kategoria została usunięta']);
        } else {
            return json_encode(['error', 'Wystąpił błąd podczas usówania kategorii']);
        }
    }
}
