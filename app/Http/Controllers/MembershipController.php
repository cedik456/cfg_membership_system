<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Requests\MembershipFormRequest;

class MembershipController extends Controller
{


    public function index()
    {
        $memberships = Membership::all();
        return view('membership.index', compact('memberships'));
    }

    public function create()
    {
        return view('membership.create');
    }

    public function store(MembershipFormRequest $request) 
    {
        $data = $request->validated();

        $membership = Membership::create($data);
        return redirect('add-membership')->with('message', 'Membership Added Successfully');

    }

    public function edit($membership_id)
    {
     
        $membership = Membership::find($membership_id);

        return view('membership.edit', compact('membership'));
    }

    public function update(MembershipFormRequest $request, $membership_id)
    {
        $data = $request->validated();

        $membership = Membership::where('id', $membership_id)->update([
            'name' => $data['name'],
            'address' => $data['address'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'contactInfo' => $data['contactInfo'],
            'duration' => $data['duration']
        ]);

        return redirect('/memberships')->with('message', 'Membership Updated Successfully');
    } 

    public function destroy($membership_id)
    {
        $membership = Membership::find($membership_id)->delete();
        return redirect('/memberships')->with('message', 'Membership Delete Succesfully');
    }
}
