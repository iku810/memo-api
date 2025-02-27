<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Memo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $memo = new Memo();
        $memo->fill($request->all())->save();
        // Laravelでは、Eloquentモデルを直接返すと、自動的にJSON形式に変換される
        return $memo;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Memo::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $memo = Memo::findOrFail($id);
        $memo->fill($request->all())->save();
        return $memo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memo = Memo::findOrFail($id);
        $memo->delete();
        return $memo;
    }
}
