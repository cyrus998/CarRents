<?php
  
namespace App\Http\Controllers;
  
use App\Models\Career;
use Illuminate\Http\Request;
  
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::latest()->paginate(5);
    
        return view('careers.index',compact('careers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('careers.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => '',
            'resume' => 'required|mimes:pdf,docx,csv|max:8192',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($resume = $request->file('resume')) {
            $destinationPath = 'resume/';
            $profileImage = date('YmdHis') . "." . $resume->getClientOriginalExtension();
            $resume->move($destinationPath, $profileImage);
            $input['resume'] = "$profileImage";
        }
    
        Career::create($input);
     
        return redirect()->route('careers.index')
                        ->with('success','Your application has been submitted. Thank you!');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        return view('careers.show',compact('career'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('careers.edit',compact('career'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        elseif ($resume = $request->file('resume')) {
            $destinationPath = 'resume/';
            $profileImage = date('YmdHis') . "." . $resume->getClientOriginalExtension();
            $resume->move($destinationPath, $profileImage);
            $input['resume'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }
          
        $career->update($input);
    
        return redirect()->route('careers.index')
                        ->with('success','Career updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();
     
        return redirect()->route('careers.index')
                        ->with('success','Career deleted successfully');
    }
}