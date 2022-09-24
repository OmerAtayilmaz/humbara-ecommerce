<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq as FaqModel;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;
use Auth;
class Faq extends Component
{

    
    use WithPagination;

    public $question;
    public $answer;
    public $status;
    public $priority;

    public $edit_id=null;

    public $search='';
    protected $listeners=[
        'createFaq'=>'create',
        'updateFaq'=>'updateFaq',
        'delete'=>'delete'
    ];
    
    public function render()
    {
        $search=$this->search;
        $data=FaqModel::where('status','<>','DELETED')
        ->where(function($query) use ($search){
            return $query->where('question','LIKE',"%".$search."%")
                    ->orWhere('status','LIKE','%'.$search.'%')
                    ->orWhere('answer','LIKE','%'.$search.'%')
                    ->orWhere('id','LIKE','%'.$search.'%');
        })->orderBy('priority','DESC')->paginate(10);
        return view('livewire.admin.faq',[
            'data'=>$data
        ]);
    }

    public function create(){
        $this->validate([
            'question' => 'required | string | max:255',
            'answer' => 'required | string |max:255',
            'status' => 'required',
            'priority' => 'required | integer '
        ]);
        $validatedData=new FaqModel();

        $validatedData->question=$this->question;
        $validatedData->answer=$this->answer;
        $validatedData->status=$this->status;
        $validatedData->priority=$this->priority;
        $validatedData->created_by=Auth::user()->id;

        FaqModel::create($validatedData->toArray());
        $this->question=$this->answer=$this->priority='';
        return $this->dispatchBrowserEvent("swal:create",[
            'title'=>'Success',
            'text'=>'Question and answer created successfully',
            'type'=>'success'
        ]);
    }

    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
        ]);
    }

    public function edit($edit_id){
        $this->toggleForm('edit');
        $selected=FaqModel::find($edit_id);
        $this->question=$selected->question;
        $this->answer=$selected->answer;
        $this->status=$selected->status;
        $this->priority=$selected->priority;
        $this->edit_id=$edit_id;
    }
    public function update(){
        $this->validate([
            'question' => 'required | string | max:255',
            'answer' => 'required | string |max:255',
            'status' => 'required',
            'priority' => 'required | integer '
        ]);
        $validatedData=new FaqModel();

        $validatedData->question=$this->question;
        $validatedData->answer=$this->answer;
        $validatedData->status=$this->status;
        $validatedData->priority=$this->priority;
        $validatedData->created_by=Auth::user()->id;

        FaqModel::find($this->edit_id)->update($validatedData->toArray());
        return $this->dispatchBrowserEvent("swal:update",[
            'title'=>'Success',
            'text'=>'Question and answer updated successfully',
            'type'=>'success'
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
        FaqModel::find($id)->update([
            'status'=>'DELETED'
        ]);
        return $this->dispatchBrowserEvent("swal:delete",[
            'title'=>'Success',
            'text'=>'Question and answer deleted successfully',
            'type'=>'success'
        ]);
    }
}
