<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReturnPolicy;
use Illuminate\Http\Request;

class ReturnPolicyController extends Controller
{
    //All Privacy
    public function index()
    {
        $items = ReturnPolicy::latest()->get();
        return view('admin.pages.return-policy.index', compact('items'));
    }

    //Add Privacy
    public function create()
    {
        return view('admin.pages.return-policy.create');
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

            $term                  = new ReturnPolicy();
            $term->name            = $request->name;
            $term->content         = $request->content;
            $term->effective_date  = $request->effective_date;
            $term->expiration_date = $request->expiration_date;
            $term->version         = $request->version;

            $term->save();

            return redirect()->route('admin.return-policy.index')->with('success', 'Data Inserted Successfully!!');
        }

    }

    public function show($id)
    {

    }

    //Edit Term
    public function edit($id)
    {
        $item = ReturnPolicy::findOrFail($id);
        return view('admin.pages.return-policy.edit', compact('item'));
    }

    //Update
    public function update(Request $request, $id)
    {

        $privacy = ReturnPolicy::findOrFail($id);

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

            return redirect()->route('admin.return-policy.index')->with('success', 'Data Update Successfully!!');
        }

    }

    public function DeleteReturn($id)
    {

        ReturnPolicy::find($id)->delete();

        // toastr()->success('Return & Policy Delete Successfully');

        return redirect()->route('admin.return-policy.index')->with('success', 'Data Delete Successfully!!');
    }

    // Inactive
    public function inactive($id)
    {
        ReturnPolicy::find($id)->update([
            'status' => 'inactive',
        ]);

        return redirect()->route('admin.return-policy.index')->with('success', 'Data Inactive Successfully!!');
    }

    // Active
    public function active($id)
    {
        ReturnPolicy::find($id)->update([
            'status' => 'active',
        ]);

        return redirect()->route('admin.return-policy.index')->with('success', 'Data Active Successfully!!');
    }
}
