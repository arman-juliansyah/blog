<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;

class IndexController extends Controller
{
    // penerapan flash message
    public function welcome()
    {
        return redirect('/post')->with(['success' => 'Selamat Data Di Menu Post']);
    }

	// Content Post dengan email, name penulisnya
	// melihat post beserta user nya
	// sudah di relasikan di modelnya
    public function index()
    {
    	$posts = Post::paginate(12);
    	return view('welcome', compact('posts'));
    }

    // Comment Guest yang usernya tidak terdaftar disistem
    // melihat detail post dengan comment guest
    // user yg tidak ada didalam sistem
    public function showSinglePost($slug)
    {
    	$post  = Post::where('slug',$slug)->first();
    	if($post == null)
    	{
    		abort(404);
    	}
    	else
    	{
    		$users    = User::pluck('email');
    		$comments = Comment::where('post_id', $post->id)->whereNotIn('email',$users)->get();
    		return view('single-post',compact('post','comments'));
    	}
    }

    // melihat data user list
    public function userList()
    {
    	$users = User::paginate(12);
    	return view('user',compact('users'));
    }

    // User List dengan comment dari usernya
    // melihat data user dengan data komentar nya
    public function userComments($id)
    {
    	$user = User::findOrFail($id);
    	$comments = Comment::where('email', $user->email)->get();
    	return view('user-comments',compact('comments', 'user'));
    }
}
