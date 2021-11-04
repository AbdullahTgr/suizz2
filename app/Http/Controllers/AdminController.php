<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;
use App\Models\User;
use App\Models\ServicePost;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Support\Facades\Hash;

 
class AdminController extends Controller
{
    //

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.index');
    }

    
    
    public function services()
    {
        $services = Service::get();

        return view('dashboard.services.index',compact('services'));
    }

    public function payments()
    {
        $payments = Payment::get();

        return view('dashboard.payments.index',compact('payments'));
    }


    public function save_service(Request $request)
    {
          $service = new Service();

         $service->name = $request->name;
         $service->description = $request->description;
         $service->icon = $request->icon ? $request->icon->store('public/icons') : null;
         $service->url = str_replace(' ', '-' ,$request->name);

       $service->save();

       if ($service)
       {
           return redirect()->back();
       }
    }


    public function update_service(Request $request)
    {
       $service =  Service::findOrFail($request->service_id);

   
       $service->name = $request->name;
       $service->description = $request->description;
       $service->icon = $request->icon ? $request->icon->store('public/icons') : $service->icon;
       $service->url = str_replace(' ', '-' ,$request->name);

        $service->save();

        if ($service)
        {
            return redirect()->back();
        }
    }


    
    public function delete_service(Request $request)
    {

        $service = Service::where('id',$request->service_id)->delete();
       
           return redirect()->back();
     }

         
    public function approve_payment(Request $request)
    {

        $payment = Payment::findOrFail($request->payment_id);
        $payment->status = 'Approved';
        $payment->save();

           return redirect()->back();
     }


         
    public function service_post($id)
    {
        $service_post = ServicePost::where('service_id',$id)->get();

        return view('dashboard.services.posts.posts',compact('service_post','id'));
    }



    public function save_service_post(Request $request)
    {
       $service = new ServicePost();

       $service->name = $request->name;
       $service->description = $request->description;
       $service->service_id = $request->service_id;
       $service->price = $request->price;
       $service->icon = $request->icon ? $request->icon->store('public/icons') : null;
 
       $service->save();

     
       if ($service)
       {
           return redirect()->back();
       }
    }


        
    public function delete_service_post(Request $request)
    {

        $service = ServicePost::where('id',$request->service_id)->delete();
       
           return redirect()->back();
     }

     public function update_service_post(Request $request)
     {
        $service =  ServicePost::findOrFail($request->service_id);
 
    
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->icon = $request->icon ? $request->icon->store('public/icons') : $service->icon;

         $service->save();
 
         if ($service)
         {
             return redirect()->back();
         }
     }
 
         
     
     public function about()
     {
         $about = About::where('id',1)->first();
          return view('dashboard.about.index',compact('about'));
     }

     public function update_about(Request $request)
     {
        $about =  About::findOrFail(1);
 
    
        $about->title = $request->title;
        $about->caption = $request->caption;
        $about->text = $request->text;
        $about->image = $request->image ? $request->image->store('public/images') : $about->image;
 

         $about->save();
 
         if ($about)
         {
             return redirect()->back();
         }
     }
 


     public function blog()
     {
          $blogs = Blog::get();
          return view('dashboard.blog.index',compact('blogs'));
     }




     public function save_blog(Request $request)
     {
        $blog = new blog();
 
         $blog->name = $request->name;
         $blog->description = $request->description;
         $blog->image = $request->image ? $request->image->store('public/images') : null;
  
         $blog->save();
 
      
        if ($blog)
        {
            return redirect()->back();
        }
     }
 
 
         
     public function delete_blog(Request $request)
     {
 
         $blog = Blog::where('id',$request->blog_id)->delete();
        
            return redirect()->back();
      }
 


      public function update_blog(Request $request)
      {
         $blog =  Blog::findOrFail($request->blog_id);
  
     
         $blog->name = $request->name;
         $blog->description = $request->description;
         $blog->image = $request->image ? $request->image->store('public/images') : $blog->image;
  
  
         $blog->save();

         if ($blog)
         {
             return redirect()->back();
         }
      }


      public function work()
      {
           $works = Work::get();
           return view('dashboard.work.index',compact('works'));
      }
 

      
     public function save_work(Request $request)
     {
        $work = new Work();
 
         $work->name = $request->name;
         $work->description = $request->description;
         $work->type = $request->type;
         $work->link = $request->link;
         $work->image = $request->image ? $request->image->store('public/images') : null;
  
         $work->save();
 
      
        if ($work)
        {
            return redirect()->back();
        }
     }
  

     public function update_work(Request $request)
     {

        $work =  Work::findOrFail($request->work_id);
 
    
       
        $work->name = $request->name;
        $work->description = $request->description;
        $work->type = $request->type;
        $work->link = $request->link;
        $work->image = $request->image ? $request->image->store('public/images') :  $work->image;
 
        $work->save();
 
     
       if ($work)
       {
           return redirect()->back();
       }
     }


      
         
     public function delete_work(Request $request)
     {
 
 
         $work = Work::where('id',$request->work_id)->delete();
        
            return redirect()->back();
      }





      public function states()
      {
        $states = State::get();
        $countries = Country::get();
        $services = Service::get();
        return view('dashboard.state.index',compact('states','countries','services'));
      }
 

      
     public function save_state(Request $request)
     {
         $state = new State();
         $state->country_id = $request->country_id;
         $state->service_id = $request->service_id;
         $state->traffic = $request->traffic;
         $state->save();
 
        if ($state)
        {
            return redirect()->back();
        }
     }


     public function delete_state(Request $request)
     {
         $state = State::where('id',$request->state_id)->delete();
         return redirect()->back();
      }



      public function save_country(Request $request)
      {
          $country = new Country();
          $country->name = $request->name;
          $country->save();
       
         if ($country)
         {
             return redirect()->back();
         }
      }
 
 
      public function delete_country(Request $request)
      {
          $country = Country::where('id',$request->country_id)->delete();
             return redirect()->back();
       }
 



   public function save_user(Request $request)
   { 
        $check = User::where('email',$request->email)->count();
        if ($check > 0)
        {
            return "This Email Is Taken";
        }else 
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back();
        }
      
   }







   public function delete_user(Request $request)
   {


          $user = User::where('id',$request->user_id)->delete();
      
          return redirect()->back();
    }


      public function profile()
      {
        $user = Auth::user();
        $users = User::where('id','<>',Auth::user()->id)->get();
 
          return view('dashboard.profile',compact('user','users'));
      }
 



      public function update_profile(Request $request)
      {
         $user =  User::findOrFail(Auth::user()->id);
  
         $user->name = $request->name;
         $user->email = $request->email;
 
         if ($request->newPassword !=null)
         {
             $user->password =  Hash::make($request->newPassword);
         }
   
         $user->save();
  
         if ($user)
         {
             return redirect()->back();
         }
      }
 




}
