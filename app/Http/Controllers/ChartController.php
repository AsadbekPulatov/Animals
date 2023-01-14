<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Type;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $labels = [];
        $values = [];
        foreach ($types as $type) {
            $labels[] = $type->name;
            $values[] = Animal::where('type_id', $type->id)->sum('count');
        }
        $values[] = 0;
        return view('admin.dashboard',compact('labels','values'));
    }
}
