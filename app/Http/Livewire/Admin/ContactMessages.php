<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ContactMessage;
use Livewire\WithPagination;

class ContactMessages extends Component
{
    use WithPagination;
    public $listeners=['delete'=>'delete'];
    public $search='';
    private int $PAGINATION_COUNT = 10;

    public function render()
    {
        $search=$this->search;
        $contactMessagesList=ContactMessage::where('status','<>','DELETED')
        ->where(function($query) use ($search){
            return $query->where('name','LIKE',"%".$search."%")
            ->orWhere('email','LIKE','%'.$search.'%')
            ->orWhere('message','LIKE','%'.$search.'%')
            ->orWhere('status','LIKE','%'.$search.'%')
            ->orWhere('id','LIKE','%'.$search.'%');
        })->orderBy('status','ASC')->paginate($this->PAGINATION_COUNT);
        return view('livewire.admin.contact-messages',[
        'contactMessagesList'=>$contactMessagesList
    ]);
    }

    public function deleteConfirm($id){
        return $this->dispatchBrowserEvent('swal:deleteConfirm',[
            'type'=>"warning",
            "title"=>"Are you sure?",
            "text"=>"Click cancel if you don'T want to delete",
            "id"=>$id
        ]);
    }
    public function delete($id){
        ContactMessage::find($id)->update([
            'status'=>'DELETED'
        ]);
        return $this->dispatchBrowserEvent("swal:delete",[
            'title'=>'Success',
            'text'=>'Question and answer deleted successfully',
            'type'=>'success'
        ]);
    }
}
