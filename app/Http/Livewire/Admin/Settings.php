<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting as SettingModel;
class Settings extends Component
{
    public function render()
    {
        $settings=SettingModel::first();
        return view('livewire.admin.settings',[
            'settings'=>$settings
        ]);
    }
}
