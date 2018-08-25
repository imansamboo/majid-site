<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Men;
use Illuminate\Http\Request;

class MensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $mens = Men::where('name', 'LIKE', "%$keyword%")
                ->orWhere('parent_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mens = Men::latest()->paginate($perPage);
        }

        return view('admin.mens.index', compact('mens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Men::create($requestData);

        return redirect('admin/mens')->with('flash_message', 'Men added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $men = Men::findOrFail($id);

        return view('admin.mens.show', compact('men'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $men = Men::findOrFail($id);

        return view('admin.mens.edit', compact('men'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $men = Men::findOrFail($id);
        $men->update($requestData);

        return redirect('admin/mens')->with('flash_message', 'Men updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Men::destroy($id);

        return redirect('admin/mens')->with('flash_message', 'Men deleted!');
    }
}
