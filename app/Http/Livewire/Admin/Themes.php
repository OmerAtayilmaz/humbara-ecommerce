<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme;
use Auth;
class Themes extends Component
{
    public $primary_color='#000';
    public $secondary_color='#000';
    public $dark_color='#000';
    public $light_color='#000';
    public $text_color='#000';
    public $title_font='';
    public $text_font='';
    public $status='ACTIVE';


    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
        ]);
    }
    public function update(){
        
        $theme=Theme::first();
        if(empty($theme)){
            $theme=new Theme();
            $theme->updated_by=Auth::user()->id;;
            $theme->primary_color=$this->primary_color;
            $theme->secondary_color=$this->secondary_color;
            $theme->dark_color=$this->dark_color;
            $theme->light_color=$this->light_color;
            $theme->text_color=$this->text_color;
            $theme->title_font=$this->title_font;
            $theme->text_font=$this->text_font;
            $theme->status=$this->status;
            $theme->save();
            return $this->dispatchBrowserEvent("swal:update",[
                'title'=>'Success',
                'text'=>'Theme updated successfully',
                'type'=>'success'
            ]);
        }
        $theme->primary_color=$this->primary_color;
        $theme->secondary_color=$this->secondary_color;
        $theme->dark_color=$this->dark_color;
        $theme->light_color=$this->light_color;
        $theme->text_color=$this->text_color;
        $theme->title_font=$this->title_font;
        $theme->text_font=$this->text_font;
        $theme->status=$this->status;
        $theme->save();
        return $this->dispatchBrowserEvent("swal:update",[
            'title'=>'Success',
            'text'=>'Theme updated successfully',
            'type'=>'success'
        ]);
    }
    public function render()
    {
        $theme=Theme::first();
        if(!empty($theme)){
            $this->primary_color=$theme->primary_color;
            $this->secondary_color=$theme->secondary_color;
            $this->dark_color=$theme->dark_color;
            $this->light_color=$theme->light_color;
            $this->text_color=$theme->text_color;
            $this->title_font=$theme->title_font;
            $this->text_font=$theme->text_font;
            $this->status=$theme->status;
        }
        return view('livewire.admin.themes');
    }
}
