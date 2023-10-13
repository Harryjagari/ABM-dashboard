<?php

namespace App\Http\Controllers;
use App\Models\DataFeed;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    
    public function create()
    {
        return view('pages.lead.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|string|max:100',
            'Email' => 'required|string|max:100|email',
            'Address' => 'nullable|string',
            'Phone' => 'nullable|string',
            'Mobile' => 'nullable|string',
            'Website' => 'nullable|string',
            'Company' => 'nullable|string',
            'Inquiry_for' => 'nullable|string',
        ]);
    
        // Create a new lead instance and associate it with the authenticated user
        $lead = new Lead($data);
        $lead->user_id = auth()->user()->id; // Assuming user_id is the foreign key column.
    
        $lead->save();
    
        return view('pages/lead/create')->with('success', 'Lead created successfully');
    }
    

    // Retrieve all leads
    public function index()
    {
        $leads = Lead::all(); 
       
       
        return view('pages.lead.create', ['leads' => $leads]);
    }

    // Update a lead by ID
    public function update(Request $request, $id)
    {
        $record = Lead::find($id);
        $record = $request->validate([
            'Name' => 'required|string|max:100',
            'Email' => 'required|string|max:100|email',
            'Address' => 'nullable|string',
            'Phone' => 'nullable|string',
            'Mobile' => 'nullable|string',
            'Website' => 'nullable|string',
            'Company' => 'nullable|string',
            'Inquiry_for' => 'nullable|string',
        ]);

        $lead = new Lead($record);
        $lead->user_id = auth()->user()->id;
        $lead->update($record);

        return view('pages/lead/edit')->with('success', 'Lead updated successfully');
    }

    
    public function search(Request $request)
    {
            // get the search term
    //     $text = $request->input('search');

    // // search the members table
    //      $patients = DB::leads('patients')->where('Name', 'Like', $text)->get();
        
        
    //     //$query = $request->get('query');
    //     //$searchTerm = $request->input('search');
    //      //if ($request->ajax()) {
        
    //      //$leads = Lead::where('Name', 'LIKE', '%' . $searchTerm . '%')
    //      //->orWhere('Email', 'LIKE', '%' . $searchTerm . '%')
    //      //->orWhere('Company', 'LIKE', '%' . $searchTerm . '%')
    //      //->get();
    //      //}
    //     return view('pages.lead.view', compact('leads'));
    }


    public function destroy($id)
    {
        // Find the Lead instance by its ID
        $lead = Lead::find($id);
    
        if ($lead) {
            // Delete the Lead instance
            $lead->delete();
            // Optionally, you can add a success message or other actions here
        } else {
            
        }
    
        // Redirect back to the view or any other action you need
        return redirect()->route('leads.index');
    }

    public function edit($id)
    {
        $record = Lead::find($id);
        return view('pages.lead.edit', ['record' => $record]);
    }
}
