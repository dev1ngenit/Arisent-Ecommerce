<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    //All Privacy
    public function index()
    {
        $items = Privacy::latest()->get();
        return view('admin.pages.privacy.index', compact('items'));
    }

    //Add Privacy
    public function create()
    {
        return view('admin.pages.privacy.create');
    }

    //Store Privacy
    public function store(Request $request)
    {
        $validator = $request->validate(
            [
                'name'            => 'required|max:255',
                'content'         => 'required',
                'effective_date'  => 'required',
                'expiration_date' => 'required',
            ],

            [
                'name.required'            => 'Name is required',
                'content.required'         => 'Content is required',
                'effective_date.required'  => 'Effective Date is required',
                'expiration_date.required' => 'Expiration Date is required',
            ],
        );

        if ($validator) {

            $term                  = new Privacy();
            $term->name            = $request->name;
            $term->content         = $request->content;
            $term->effective_date  = $request->effective_date;
            $term->expiration_date = $request->expiration_date;
            $term->version         = $request->version;

            $term->save();

            return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Inserted Successfully!!');
        }

    }

    public function show($id)
    {

    }

    //Edit Term
    public function edit($id)
    {
        $item = Privacy::findOrFail($id);
        return view('admin.pages.privacy.edit', compact('item'));
    }

    //Update Faq
    public function update(Request $request, $id)
    {

        $privacy = Privacy::findOrFail($id);

        $validator = $request->validate(

            [
                'name'            => 'required|max:255',
                'content'         => 'required',
                'effective_date'  => 'required',
                'expiration_date' => 'required',
            ],

            [
                'name.required'            => 'Name is required',
                'content.required'         => 'Content is required',
                'effective_date.required'  => 'Effective Date is required',
                'expiration_date.required' => 'Expiration Date is required',
            ],
        );

        if ($validator) {

            $privacy->update([

                'name'            => $request->name,
                'content'         => $request->content,
                'effective_date'  => $request->effective_date,
                'expiration_date' => $request->expiration_date,
                'version'         => $request->version,

            ]);

            return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Update Successfully!!');
        }

    }

    public function DeletePrivacy($id)
    {

        Privacy::find($id)->delete();

        toastr()->success('Privacy & Policy Delete Successfully');

        return redirect()->route('admin.privacy-policy.index');
    }

    // Inactive
    public function inactive($id)
    {
        Privacy::find($id)->update([
            'status' => 'inactive',
        ]);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Inactive Successfully!!');
    }

    // Active
    public function active($id)
    {
        Privacy::find($id)->update([
            'status' => 'active',
        ]);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Active Successfully!!');
    }
}
