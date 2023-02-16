<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Auth;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Slides extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $slides;
    public $user_id,$title,$subtitle,$priority,$image,$status,$button_text,$button_link,$creator_device_ip;
    private mixed $PAGINATION_COUNT=5;

    protected $listeners=[
        'createFaq'=>'create',
        'updateFaq'=>'updateFaq',
        'delete'=>'delete'
    ];

    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
        ]);
    }
    public function render()
    {
        $this->slides=HomeSlider::ActiveSlides()->paginate($this->PAGINATION_COUNT);
        return view('livewire.admin.slides',[
            'slides'=>$this->slides
        ]);
    }
    public function create(){

        $slide=new HomeSlider();
        $slide->user_id=Auth::user()->id;
        $slide->title=$this->title;
        $slide->subtitle=$this->subtitle;
        $slide->priority=$this->priority;
        $slide->image=$this->image->store('public/category');
        $slide->status=$this->status;
        $slide->button_text=$this->button_text;
        $slide->button_link=$this->button_link;
        $slide->creator_device_ip=request()->ip();
        $slide->save();
        session()->flash('message','Slide Created Successfully');
        $this->reset();
    }
    public function deleteConfirm($id){
        return $this->dispatchBrowserEvent('swal:deleteConfirm',[
            'type'=>"warning",
            "title"=>"Are you sure?",
            "text"=>"Click cancel if you don't want to delete",
            "id"=>$id
        ]);
    }
    public function delete($id){
        HomeSlider::find($id)->update([
            'status'=>'DELETED'
        ]);
        return $this->dispatchBrowserEvent("swal:delete",[
            'title'=>'Success',
            'text'=>'Question and answer deleted successfully',
            'type'=>'success'
        ]);
    }

}
