<?php

namespace App\Http\Controllers;

use App\Models\estimate;
use App\Models\project;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estimate = estimate::all();
        return view('estimate',[
            'estimate' =>$estimate
        ]);
    }

    public function create()
    {
        return view('estimate');  // あなたのビュー名をここに記入してください
    }



    public function store(Request $request)
    {
        $estimate = estimate::create([
            'daily_rate' => $request->daily_rate,
            'overtime_rate' => $request->overtime_rate,
            'extra_charge' => $request->extra_charge,
            'accomodation_fee' => $request->accomodation_fee,
            'travelling_fee' => $request->travelling_fee,
            'other_fee' => $request->other_fee,
            'other_fee_remarks' => $request->other_fee_remarks,
            'total_fee' => $request->total_fee,
            'remarks' => $request->remarks,
            'project_id' => $request->project_id,
        
        ]);
    
        return redirect()->route('estimates.index');  
    }
    



    /**
     * Display the specified resource.
     */

        public function show(Estimate $estimate)
{
    return view('estimates.show', [
        'estimate' => $estimate,
    ]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(estimate $estimate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estimate $estimate)
    {
        $data = $request->validate([
            'daily_rate' => 'required|integer',
            'overtime_rate' => 'required|integer',
            'extra_charge' => 'required|integer',
            'accomodation_fee' => 'required|integer',
            'travelling_fee' => 'required|integer',
            'other_fee' => 'required|integer',
            'other_fee_remarks' => 'required|string|max:255',
            'total_fee' => 'required|integer',
            'remarks' => 'required|string|max:255',
            'project_id' => 'required|integer',
    
        ]);

        $estimate = estimate::findOrFail($estimate);
        $estimate->update($data);

        return redirect()->route('estimate.show', $estimate)->with('success', 'Estimate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(estimate $estimate)
    {
        //
    }

    //showestimate(Project $project){
        // estimate を抽出する
        ///$estimate = estimate::where(‘project_id’, $project->id)->get();
      //}

    public function showestimate(project $project)
    {
        dd($estimate);
    
        return view('estimate', compact('estimate'));
    }
    

}
