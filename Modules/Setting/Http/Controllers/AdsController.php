<?php
namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Ad;
use Illuminate\Support\Facades\File;

class AdsController extends Controller
{
    public function index()
    {
        $style7 = Ad::firstOrCreate(['slot' => 'home_style7']);
        $style8 = Ad::firstOrCreate(['slot' => 'home_style8']);
        return view('setting::ads.index', compact('style7','style8'));
    }

    public function update(Request $request, string $slot)
    {
        $ad = Ad::firstOrCreate(['slot' => $slot]);
        $data = $request->only(['title','subtitle','button_text','button_url','enabled']);
        $data['enabled'] = $request->boolean('enabled');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $dest = public_path('backend/uploads/ads');
            if (!File::exists($dest)) { File::makeDirectory($dest, 0755, true); }
            $name = $slot.'_'.time().'.'.$file->getClientOriginalExtension();
            $file->move($dest, $name);
            $data['image_path'] = 'backend/uploads/ads/'.$name;
        }
        $ad->fill($data)->save();
        return back()->with('message', ucfirst(str_replace('_',' ', $slot)).' saved');
    }
}

