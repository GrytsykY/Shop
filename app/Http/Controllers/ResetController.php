<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset()
    {
        Artisan::call('migrate:fresh --seed');
        session()->forget('orderID');
        foreach (['categories', 'products'] as $folder) {
            //Storage::deleteDirectory('categories');
            Storage::makeDirectory($folder);

            $files = Storage::disk('reset')->files($folder);

            foreach ($files as $file) {
                Storage::put($file, Storage::disk('reset')->get($file));
            }
        }
        session()->flash('success','Проект сброшен в начальное состояние');
        return redirect()->route('index');
    }
}
