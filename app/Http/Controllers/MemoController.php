<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try {
            return Memo::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // 例外処理を行うことで、指定したIDのメモが存在しない場合に404エラーを返す
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $memo = Memo::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // 例外処理を行うことで、指定したIDのメモが存在しない場合に404エラーを返す
            abort(404);
        }
        $memo->fill($request->all())->save();
        return $memo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $memo = Memo::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // 例外処理を行うことで、指定したIDのメモが存在しない場合に404エラーを返す
            abort(404);
        }
        $memo->delete();
        return $memo;
    }
}
