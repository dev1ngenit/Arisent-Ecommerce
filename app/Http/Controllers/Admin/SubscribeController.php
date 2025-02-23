<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //All Contact
    public function AllSubscribe()
    {
        $subscribes = Subscribe::all();
        return view('admin.pages.subscribe.all_subscribe', compact('subscribes'));
    }

   

    //Delete Contact
    public function DeleteContact($id)
    {
        Subscribe::findOrFail($id)->delete();

        toastr()->success('Subscribe Delete Successfully');
        return redirect()->route('all.subscribe');
    }
}
