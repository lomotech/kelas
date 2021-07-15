<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChildRequest;
use App\Models\Child;
use Inertia\Inertia;

class ChildController extends Controller
{
    public function index()
    {
        return Inertia::render('Child/Index');
    }

    public function create()
    {
        return Inertia::render('Child/Create');
    }

    public function store(CreateChildRequest $request)
    {
        $child = Child::create($request->only([
            'name'
        ]));

        return redirect(route('children.index'));
    }
}
