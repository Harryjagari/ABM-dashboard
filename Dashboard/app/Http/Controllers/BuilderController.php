<?php
class BuilderController extends Controller
{
    public function create()
    {
        return view('builder')->with([
            // can provide a previously-saved form definition here
            'definition' => null, 
        ]);
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'definition' => 'required|json'
        ]);
        
        // You can then save this to your DB, a file,
        // or whatever you're using for persistence.
        dump($data['definition']);
    }
}