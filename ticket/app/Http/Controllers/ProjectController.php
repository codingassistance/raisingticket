<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function addp()
    {
        return view('tickets.addp');
    }

    public function projectstore(Request $request)
    {
        $request->validate([
            'pname' => 'required',
            'plink' => 'required',
            'emails.*' => 'required|email'
        ]);
        if (Project::where('pname', $request->input('pname'))->orWhere('plink', $request->input('plink'))->exists()) {
            return back()->withErrors([
                'pname' => 'Project with this name already exists.',
                'plink' => 'Project with this link already exists.'
            ]);
        }
        if (empty($request->input('emails'))) {
            return back()->withErrors(['emails' => 'Please add at least one email address.']);
        }
        $emails = $request->input('emails');
        $emailsJson = json_encode($emails);
        Project::create([
            'pname' => $request->input('pname'),
            'plink' => $request->input('plink'),
            'emailList' => $emailsJson
        ]);
        return redirect('/');
    }
}
