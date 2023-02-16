<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseContent;
use App\Models\CoursePrice;
use App\Models\CourseReview;
use App\Models\CourseImageGallery;
use App\Models\CourseQA as CourseQuestions;
use App\Models\OnlineCourseCatalog;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Illuminate\View\View;

class CourseController extends Controller
{

    protected CourseService $courseService;
    private int $PAGINATE_COUNT = 5;

    function __construct(CourseService $courseService){
        $this->courseService=$courseService;
    }
    public function course_content_page($courseid){
        return view('backoffice.courses.content',[
            'courseid'=>$courseid
        ]);
    }
    public function coursedetail($courseid){
        $course=Course::find($courseid);
        return view('backoffice.courses.detail',[
            'course'=>$course
        ]);
    }
    public function store(Request $request){
        try{
        $course=new Course();
        $course->title=$request->title;
        $course->keywords=$request->keywords;
        $course->description=$request->description;
        $course->video_url=$request->video_url;
        $course->content=$request->content;
        $course->card_image=$request->file('card_image')->store('coursecard','public');
        $course->slug=Str::slug($request->title);
        $course->course_owner=Auth::user()->id;
        $course->category_id=$request->category_id;
        $course->status=$request->status;
        $course->lang=$request->lang;
        $course->save();

    }catch(\Exception $e){
        return $e->getMessage();
    }
        return redirect()->route('admin.courses');
    }
    public function editcourse($courseid){
        $course=Course::find($courseid);
        return view('backoffice.courses.edit',[
            'course'=>$course
        ]);
    }
    public function updatecourse(Request $req,$courseid){
        $course=Course::find($courseid);
        $course->title=$req->title;
        $course->keywords=$req->keywords;
        $course->description=$req->description;
        $course->video_url=$req->video_url;
        $course->content=$req->content;
        $course->slug=Str::slug($req->title);
        $course->category_id=$req->category_id;
        $course->status=$req->status;
        $course->lang=$req->lang;
        $course->save();
        return redirect()->route('admin.courses')->with('success','Course Updated Successfully');
    }
    public function deletecourse($courseid){
        $course=Course::find($courseid);
        $course->status='DELETED';
        $course->save();
        return redirect()->route('admin.courses')->with('success','Course Deleted Successfully');
    }
    public function deletePermentantly($courseid){
        //kalıcı olarak silindiğinde cascade çalışıyor

        $course=Course::find($courseid);
        $course->delete();
        return redirect()->route('admin.courses')->with('success','Course Deleted Permentantly');
    }
    public function course_questions_page($courseid){
        $questionList=CourseQuestions::where('course_id',$courseid)
        ->where('status', '<>','DELETED')
        ->get();
        return view('backoffice.courses.questions',[
            'questionList'=>$questionList,
            'courseid'=>$courseid
        ]);
    }
    public function course_questions_detail($courseid,$questionid){
        $question=CourseQuestions::find($questionid);
        return view('backoffice.courses.questiondetail',[
            'question'=>$question,
            'courseid'=>$courseid
        ]);
    }
    public function delete_course_qa(){
        $question=CourseQuestions::find(request('questionid'));
        $question->status='DELETED';
        $question->save();
        return redirect()->back()->with('success','Question Deleted Successfully');
    }
    public function course_price_list(){
        $price=CoursePrice::
        where('course_id',request('courseid'))
        ->first();
        if(empty($price)){
            $price=new CoursePrice();
            $price->course_id=request('courseid');
            $price->cheap_pr_title='Cheap Price Title';
            $price->cheap_price=0;
            $price->expensive_pr_title='Expensive Price Title';
            $price->expensive_price=0;
            $price->campains='Campain Name';
            $price->campains_price=0;
            $price->type='CAMPAINS'; //,['CAMPAINS','NORMAL','OFF']
            $price->status='INACTIVE';
            $price->save();
        }
        return view('backoffice.courses.pricelist',[
            'price'=>$price
        ]);
    }
    public function course_price_update($priceid){
        $price=CoursePrice::find($priceid);
        $price->cheap_pr_title=request('cheap_pr_title');
        $price->cheap_price=request('cheap_price');
        $price->expensive_pr_title=request('expensive_pr_title');
        $price->expensive_price=request('expensive_price');
        $price->campains=request('campains');
        $price->campains_price=request('campains_price');
        $price->type=request('type');
        $price->status=request('status');
        $price->save();
        return redirect()->back()->with('success','Price Updated Successfully');
    }
    public function course_reviews_list(){
        $courseReviewsList=CourseReview::where('course_id',request('courseid'))
        ->where('status','<>','DELETED')
        ->get();
        return view('backoffice.review.index',[
            'reviewList'=>$courseReviewsList
        ]);
    }
    public function course_reviews_delete(){
        $review=CourseReview::find(request('reviewid'));
        $review->status='DELETED';
        $review->save();
        return redirect()->back()->with('success','Review Deleted Successfully');
    }
    public function course_images_list(){
        $courseImagesList=CourseImageGallery::where('course_id',request('courseid'))
        ->where('status','<>','DELETED')
        ->get();
        return view('backoffice.courses.images',[
            'imageList'=>$courseImagesList,
            'courseid'=>request('courseid')
        ]);
    }
    public function course_images_store(Request $request){
        $courseList=CourseImageGallery::count();
        if($courseList>=4){
            return redirect()->back()->with('error','You can not add more than 4 images');
        }
        $image=new CourseImageGallery();
        $image->course_id=request('courseid');
        $image->image=$request->file('image')->store('courseimages','public');
        $image->description=$request->description;
        $image->status='ACTIVE';
        $image->order=$request->order;
        $image->save();
        return redirect()->back()->with('success','Image Uploaded Successfully');
    }
    public function course_images_delete($imageid){
        $image=CourseImageGallery::find($imageid);
        $image->status='DELETED';
        $image->save();
        return redirect()->back()->with('success','Image Deleted Successfully');
    }
    public function online_courses_list() : View{
        $courseList = OnlineCourseCatalog::with(["course","course.user"])->ActiveCourses()->paginate($this->PAGINATE_COUNT);
        return view("backoffice.courses.online",compact("courseList"));
    }
    public function course_publish(Request $req,$courseid){
       $this->courseService->PublishCourse($courseid);
       return redirect()->back()->with("Başarıyla Publish Edildi, Online Courses kısmında inceleyebilirsiniz");
    }
    public function course_unpublish(Request $req,$courseid){
        $this->courseService->UnpublishCourse($courseid);
        return redirect()->back()->with("Başarıyla Unpublish Edildi, Online Courses kataloglarından kaldırıldı");
    }
}
