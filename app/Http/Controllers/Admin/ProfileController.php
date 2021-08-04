<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

use App\Edit;

use Carbin\Carbon;

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

    public function edit()
    {
        return view("admin.profile.edit");
    }

    public function update()
    {
        $edit = new Edit();
        $edit->news_id = $edit->id;
        $edit->edited_at = Carbon::now();
        $edit->save();
        return redirect("admin/profile/edit");
    }
}
