<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id())
        {
            $post = Post::Where('post_status', 'active')->get();

            $usertype = Auth()->user()->usertype;


            if($usertype == 'user')
            {
                // return view("dashboard");
                return view("home.homepage", compact('post'));
            }
            else if($usertype == 'admin')
            {
                $posts = Post::all();
                return view("admin.show_post",compact('posts'));
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $post = Post::where('post_status', 'active')->get();
        return view('home.homepage', compact("post"));
    }

    // public function post_details($id)
    // {
    //     $post = Post::find($id);
    //     return view('home.post_details', compact('post'));
    // }


    public function create_post()
    {
        return view('home.create_post');
    }

    // public function user_post(Request $request){

    //     $user = Auth()->User();

    //     $userid = $user->id;
    //     $username = $user->name;
    //     $usertype = $user->usertype;

    //     $post = new Post();
    //     $post->title = $request->title;
    //     $post->description = $request->description;

    //     $post->user_id = $userid;
    //     $post->name = $username;
    //     $post->usertype = $usertype;

    //     $post->post_status = 'pending';

    //     $image = $request->image;
    //     if($image){
    //         $imagename = time(). '.' . $image->extension();
    //         $request->image->move('postimage', $imagename);
    //         $post->image = $imagename;
    //     }
    //     $post->save();
    //     return redirect()->back();
    // }


    public function user_post(Request $request){
        if (auth()->check()) { // Check if a user is logged in
            $user = auth()->user();


            $userid = $user->id;
            $username = $user->name;
            $usertype = $user->usertype;

            $post = new Post();
            $post->title = $request->title;
            $post->description = $request->description;

            $post->user_id = $userid;
            $post->name = $username;
            $post->usertype = $usertype;

            $post->post_status = 'pending';


            $image = $request->image;
            if ($image) {
                $imagename = time() . '.' . $image->extension();
                $image->move('postimage', $imagename);
                $post->image = $imagename;
            }

            $post->save();
            return redirect()->back();
        } else {

            return redirect()->route('login');
        }
    }

    public function my_post(){
        $user = Auth::user();
        $userid = $user->id;
        //check if userid in table post = id in table user
        $data = Post::where('user_id', $userid)->get();
        return view('home.my_post', compact('data'));
    }

    public function my_post_delete($id){

        $data = Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function post_page($id)
    {
        $data = Post::find($id);

        return view('home.post_page', compact('data'));
    }

    public function update_post_data(Request $request, $id){
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description =$request->description;
        $image = $request->image;
        if($image){
            $imagename = time(). '.' . $image->extension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }


}
