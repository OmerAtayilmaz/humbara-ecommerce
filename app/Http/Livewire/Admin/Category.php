<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
//image
use Livewire\WithFileUploads;
use Intervention\Image\ImageManagerStatic as ImageConverter;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\CourseCategory as CourseCategoryORM;
//slug
use Illuminate\Support\Str;
use App\Http\Requests\Request;

class Category extends Component
{
    //for image
    use WithFileUploads;

    public $categoryList=[];
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
        $temp->creator_ip=Request::getClientIp();
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
        $result=$temp->save();
        if(!$result)
            return session()->flash('error','Category could not be created');

        session()->flash('success','Category created successfully');
        session()->forget('CREATE_CATEGORY');
    
    }

    
    public function render()
    {
        $this->categoryList=CourseCategoryORM::all();
        return view('livewire.admin.category',[ 
          'categoryList'=>$this->categoryList
        ]);
    }
}
