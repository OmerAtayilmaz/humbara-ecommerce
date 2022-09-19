<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting as SettingModel;
use Livewire\WithFileUploads;
use Auth;
class Settings extends Component
{


    use WithFileUploads;

    public $c_name;
    public $c_keywords;
    public $c_description;
    public $c_logo;
    public $c_favicon;

    public $c_email;
    public $c_phone;
    public $c_address;
    
    public $c_facebook;
    public $c_twitter;
    public $c_instagram;
    public $c_youtube;
    public $c_linkedin;

    public $contact;
    public $references;
    public $about_us;
    public $status;

    public $data_status=false;
    public function getData(){
        $settings=SettingModel::first();
        $this->c_name=$settings->c_name;
        $this->c_keywords=$settings->c_keywords;
        $this->c_description=$settings->c_description;
        $this->c_logo=$settings->c_logo;
        $this->c_favicon=$settings->c_favicon;
        $this->c_email=$settings->c_email;
        $this->c_phone=$settings->c_phone;
        $this->c_address=$settings->c_address;
        $this->data_status=true;
    }
    public function render()
    {
        $settings=SettingModel::first();
        if(empty($settings)){
            $settings=new SettingModel();
            $settings->c_name='';
            $settings->c_keywords='';
            $settings->c_description='';
            $settings->c_logo='';
            $settings->c_favicon='';
            $settings->c_email='';
            $settings->c_phone='';
            $settings->c_address='';
            $settings->c_facebook='';
            $settings->c_twitter='';
            $settings->c_instagram='';
            $settings->c_youtube='';
            $settings->c_linkedin='';
            $settings->contact='';
            $settings->references='';
            $settings->about_us='';
            $settings->status='NEW';
            $settings->updated_by=Auth::user()->id;
            $settings->save();
        }
        //eger verı bı kere getırıldıyse tekrar yazdırma - bug fix -
        if(!$this->data_status)$this->getData();

        return view('livewire.admin.settings');
    }

    public function updated($property){
        $this->validateOnly($property,[
            'file'=>['required','image']
        ]);
    }
    public function company(){
       
        $this->validate([
            'c_name'=>'required',
            'c_keywords'=>'required',
            'c_description'=>'required',
    
            'c_address'=>'required',
            'c_email'=>'required | email | max:255',
            'c_phone'=>'required | max:255',
        ]);
        $data=SettingModel::first();
        $data->c_name=$this->c_name;
        $data->c_keywords=$this->c_keywords;
        $data->c_description=$this->c_description;
        $data->c_logo=$this->c_logo->store('settings');
        $data->c_favicon=$this->c_favicon->store('settings');
        $data->c_address=$this->c_address;
        $data->c_email=$this->c_email;
        $data->c_phone=$this->c_phone;
        $data->save();
        $this->dispatchBrowserEvent('swal:update',[
            'title'=>'Başarılı',
            'text'=>'Ayarlar Güncellendi',
            'icon'=>'success',
            'timer'=>3000
        ]);
    }
    
}
