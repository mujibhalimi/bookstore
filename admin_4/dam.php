<?php

class dam{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',//your form field
            'password' => 'required',
        ]);
        $donor = new Donor();
        $donor->name = $request['fullname'];
        $donor->email = $request['email'];
        $donor->password = bcrypt($request['password']);
        $donor->save();
        
        return redirect()->back()->with(['success' => 'you have registered!']);
    }
}