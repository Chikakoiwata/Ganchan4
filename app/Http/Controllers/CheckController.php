<?php

namespace App\Http\Controllers;

use App\Models\check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
    $checks = Check::all();  // 全てのチェックデータを取得します。
    return view('check', compact('checks'));  // ビューにデータを渡します。
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('new_check');
    }

    public function store(Request $request)
    {
        $checks = check::create([
            'country' => $request->country,
            'tax' => $request->tax,
            'tax_url' => $request->tax_url,
            'danger' => $request->danger,
            'danger_url' => $request->danger_url,
            'remarks' => $request->remarks,
            'user_id' => auth()->user()->id
        ]);

        // 成功メッセージと共に、チェックリストページにリダイレクト
    return redirect()->route('checks.index')->with('success', '新しい確認事項が成功して追加されました');
    }


    /**
     * Display the specified resource.
     */
    public function show(check $check)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(check $check)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, check $check)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(check $check)
    {
        //
    }

    public function showcheck(check $check)
    {
        return view('check', compact('check'));
    }
}
