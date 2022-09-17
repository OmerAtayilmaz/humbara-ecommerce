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

    protected $listeners=[
        'createFaq'=>'create',
        'updateFaq'=>'updateFaq',
        'deleteFaq'=>'deleteFaq'
    ];
    
    public function render()
    {
        $data=FaqModel::where('status','<>','DELETED')
        ->orderBy('priority','DESC')->paginate(10);
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
        $this->question='';
        $this->answer='';
        $this->priority='';

        return $this->dispatchBrowserEvent("swal:create",[
            'title'=>'Success',
            'text'=>'Question and answer created successfully',
            'type'=>'success'
        ]);
    }

    public function toggleForm(){
        session([
            'form'=>!session('form')
        ]);
    }

    public function edit($edit_id){
        $selected=FaqModel::find($edit_id);
        $this->question=$selected->question;
        $this->answer=$selected->answer;
        $this->status=$selected->status;
        $this->priority=$selected->priority;

        session([
            'status'=>'edit',
        ]);

    }
}
