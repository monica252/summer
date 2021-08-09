<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Prohis;

use App\Edit;

use Carbon\Carbon;

class ProfileController extends Controller
{
    public function add()
    {
        return view("admin.profile.create");
    }
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Profile::$rules);
        $profile = new Profile();
        $form = $request->all();

        $profile->fill($form);
        $profile->save();

        return redirect("admin/profile/create");
    }

    public function edit(Request $requst)
    {
        return view("admin.profile.edit");
    }
    public function update()
    {
        $edit = new Edit();
        $edit->profile_id = $edit->id;
        return redirect("admin/profile/edit");
    }
}
