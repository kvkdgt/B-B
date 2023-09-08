<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;


class CmsController extends Controller
{
    public function add(Request $request)
    {
        $cms = new Cms;
        $cms->name = $request->name;
        $cms->slug = $request->slug;
        $cms->content = $request->content;
        $cms->save();
        return redirect()->route('cms')->with('success', 'New page created.');
    }

    public function edit($id)
    {
        $data = Cms::find($id);
        return view('admin/editCMSPage', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $cms = Cms::find($request->id);
        $cms->name = $request->name;
        $cms->slug = $request->slug;
        $cms->content = $request->content;
        $cms->save();
        return redirect()->route('cms')->with('success', 'Page Updated.');
    }

    public function delete($id)
    {
        Cms::find($id)->delete();
        return redirect()->route('cms')->with('success', 'Page deleted successfully.');
    }

    public function show($name)
    {
        $data = Cms::get()->where('slug', $name);
        if (sizeof($data)) {
            foreach ($data as $a) {
                $id = $a->id;
            }
            $cmsContent = Cms::find($id);
        return view('cms',['cms'=>$cmsContent]);
        }
        else{
        return redirect('/');
        }
    }
}
