<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CourseContent as CourseContentModel;
use Illuminate\Support\Str;
use Livewire\WithPagination;
class CourseContent extends Component
{

    use WithPagination;
    public $courseid;


    //attributes
    public $title;
    public $video_url;
    public $video_subtitle;
    public $priority;
    public $status;

    public $edit_id;
    public $search;
    protected $listeners=['create','delete'];
    public function mount($courseid){
        $this->courseid=$courseid;
    }
    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
        ]);
    }
    public function create(){
        $this->validate([
            'title' => 'required | string | max:255 ',
            'video_url' => 'required | string ',
            'video_subtitle' => 'required | string ',
            'priority' => 'required | integer ',
            'status' => 'required'
        ]);
        $validatedData=new CourseContentModel();
        $validatedData->title=$this->title;
        $validatedData->video_url=$this->video_url;
        $validatedData->video_subtitle=$this->video_subtitle;
        $validatedData->priority=$this->priority;
        $validatedData->slug=Str::slug($this->title);
        $validatedData->status=$this->status;
        $validatedData->course_id=$this->courseid;
       
        CourseContentModel::create($validatedData->toArray());
        $this->title=$this->video_url=$this->video_subtitle=$this->priority=$this->status='';

        return $this->dispatchBrowserEvent("swal:create",[
            'title'=>'Success',
            'text'=>'Lesson created successfully',
            'type'=>'success'
        ]);
    }

    public function edit($edit_id){
        $this->toggleForm('edit');
        $selected=CourseContentModel::find($edit_id);
        $this->title=$selected->title;
        $this->video_url=$selected->video_url;
        $this->video_subtitle=$selected->video_subtitle;
        $this->priority=$selected->priority;
        $this->status=$selected->status;
        $this->edit_id=$edit_id;
    }
    public function update(){
        $this->validate([
            'title' => 'required | string | max:255 ',
            'video_url' => 'required | string ',
            'video_subtitle' => 'required | string ',
            'priority' => 'required | integer ',
            'status' => 'required'
        ]);
        $validatedData=new CourseContentModel();
        $validatedData->title=$this->title;
        $validatedData->video_url=$this->video_url;
        $validatedData->video_subtitle=$this->video_subtitle;
        $validatedData->priority=$this->priority;
        $validatedData->slug=Str::slug($this->title);
        $validatedData->status=$this->status;

        CourseContentModel::find($this->edit_id)->update($validatedData->toArray());
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
        $data=CourseContentModel::find($id);
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
        $search=$this->search;
        
        $courseContent=CourseContentModel::where('course_id',$this->courseid)
        ->where('status','<>','DELETED')
        ->where(function($query) use ($search){
            return $query->where('title','LIKE',"%".$search."%")
                    ->orWhere('video_url','LIKE','%'.$search.'%')
                    ->orWhere('video_subtitle','LIKE','%'.$search.'%')
                    ->orWhere('status','LIKE','%'.$search.'%')
                    ->orWhere('priority','LIKE','%'.$search.'%')
                    ->orWhere('slug','LIKE','%'.$search.'%');
        })->orderBy('priority')->paginate(10);
        return view('livewire.admin.course-content',[
            'courseContent'=>$courseContent
        ]);
    }
}
