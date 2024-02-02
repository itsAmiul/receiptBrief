<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $incomingDATA = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $incomingDATA['user_id'] = auth()->id();

        Category::create($incomingDATA);
        return redirect('/categories');
    }
}
