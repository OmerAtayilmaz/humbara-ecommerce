<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManagerStatic as ImageConverter;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\CourseCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $parent_id=0;
    public $status;
    public $title_en;
    public $title_tr;
    public $keywords_en;
    public $keywords_tr;
    public $content_en;
    public $content_tr;
    public $description_en;
    public $description_tr;
    public $image;
    public $type="CATEGORY";
    private $categoryList;

    public $edit_id;
    public $search;
    protected $listeners=['create','delete'];

    private mixed $PAGINATION_COUNT = 5;
    public function showPanel(){
        if(session()->get('CREATE_CATEGORY'))
            session()->forget('CREATE_CATEGORY');
        else
            session(['CREATE_CATEGORY'=>true]);
    }

    public function create(){
        $this->validate([
            'image' => 'image|max:250', // 250kb Max
            'title_en' => 'required|min:3|max:100', // 3-255 characters
            'title_tr' => 'required|min:3|max:100', // 3-255 characters
            'keywords_en'=>'required|min:3|max:100',
            'keywords_tr'=>'required|min:3|max:100',
            'content_tr'=>'required|min:3|max:255',
            'content_en'=>'required|min:3|max:255',
            'description_en'=>'required|min:3|max:500',
            'description_tr'=>'required|min:3|max:500',
            'parent_id'=>'required',
        ]);
        $temp=new CourseCategoryORM;
        $temp->creator_id=auth()->user()->id;
        $temp->creator_ip=request()->ip();
        $temp->title_en=$this->title_en;
        $temp->title_tr=$this->title_tr;
        $temp->keywords_en=$this->keywords_en;
        $temp->keywords_tr=$this->keywords_tr;
        $temp->content_en=$this->content_en;
        $temp->content_tr=$this->content_tr;
        $temp->description_en=$this->description_en;
        $temp->description_tr=$this->description_tr;
        $temp->image=$this->image->store('public/category');
        $temp->parent_id=$this->parent_id;
        $temp->slug_en=Str::slug($this->title_en);
        $temp->slug_tr=Str::slug($this->title_tr);
        $temp->status=$this->status;
        $temp->type=$this->type;
        $result=$temp->save();
        if(!$result)
            return session()->flash('error','Category could not be created');

        session()->flash('success','Category created successfully');
        session()->forget('CREATE_CATEGORY');

    }
    public function edit($edit_id){
        $this->toggleForm('edit');
        $selected=CourseCategoryORM::find($edit_id);
        $this->edit_id=$selected->id;
        $this->title_en=$selected->title_en;
        $this->title_tr=$selected->title_tr;
        $this->keywords_en=$selected->keywords_en;
        $this->keywords_tr=$selected->keywords_tr;
        $this->content_en=$selected->content_en;
        $this->content_tr=$selected->content_tr;
        $this->description_en=$selected->description_en;
        $this->description_tr=$selected->description_tr;
        $this->image=$selected->image;
        $this->parent_id=$selected->parent_id;
        $this->status=$selected->status;
    }
    public function update(){
        $this->validate([
            'image' => 'image|max:250', // 250kb Max
            'title_en' => 'required|min:3|max:100', // 3-255 characters
            'title_tr' => 'required|min:3|max:100', // 3-255 characters
            'keywords_en'=>'required|min:3|max:100',
            'keywords_tr'=>'required|min:3|max:100',
            'content_tr'=>'required|min:3|max:255',
            'content_en'=>'required|min:3|max:255',
            'description_en'=>'required|min:3|max:500',
            'description_tr'=>'required|min:3|max:500',
            'parent_id'=>'required',
        ]);
        $validatedData=new CourseCategoryORM();
        $validatedData->title_en=$this->title_en;
        $validatedData->title_tr=$this->title_tr;
        $validatedData->keywords_en=$this->keywords_en;
        $validatedData->keywords_tr=$this->keywords_tr;
        $validatedData->content_en=$this->content_en;
        $validatedData->content_tr=$this->content_tr;
        $validatedData->description_en=$this->description_en;
        $validatedData->description_tr=$this->description_tr;
        $validatedData->parent_id=$this->parent_id;
        $validatedData->status=$this->status;
        $validatedData->slug_en=Str::slug($this->title_en);
        $validatedData->slug_tr=Str::slug($this->title_tr);
        if($this->image){
            $validatedData->image=$this->image->store('public/category');
        }
        $result=CourseCategoryORM::find($this->edit_id)->update($validatedData->toArray());
        if(!$result)
            return session()->flash('error','Category could not be updated');
        return $this->dispatchBrowserEvent("swal:update",[
            'title'=>'Success',
            'text'=>'Question and answer updated successfully',
            'type'=>'success'
        ]);
    }
    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
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
        $data=CourseCategoryORM::find($id);
        $data->status="DELETED";
        $data->save();

        return $this->dispatchBrowserEvent("swal:delete",[
            'title'=>'Success',
            'text'=>'Question and answer deleted successfully',
            'type'=>'success'
        ]);
    }
    public function render()
    {
        $search = $this->search;
        $this->categoryList = CourseCategory::where('status','<>','DELETED')->where(function($query) use ($search){
            return $query->where('title_tr','LIKE',"%".$search."%")
                    ->orWhere('title_en','LIKE','%'.$search.'%')
                    ->orWhere('id','LIKE','%'.$search.'%')
                    ->orWhere('content_en','LIKE','%'.$search.'%')
                    ->orWhere('keywords_en','LIKE','%'.$search.'%')
                    ->orWhere('keywords_en','LIKE','%'.$search.'%')
                    ->orWhere('content_tr','LIKE','%'.$search.'%');
        })->paginate($this->PAGINATION_COUNT);
        return view('livewire.admin.category', [
            'categoryList' => $this->categoryList
        ]);
    }
}
