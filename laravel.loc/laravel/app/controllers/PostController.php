<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends BaseController {

    public function newPostAction() {

        if(Input::server('REQUEST_METHOD') == 'POST') {
           $validator = Validator::make(Input::all(), array(
               'title' => 'required'
           ));

            if($validator->passes()) {
                $post = new Post;
                $user = Auth::user();

                $post->user_id = $user->id;
                $post->title = Input::get('title');
                $post->message = Input::get('message');

                if($post->save()) {
                    return Redirect::route('post/new')
                        ->with(array(
                            'success' => 'Your post has been saved.'
                        ));
                }
                else {
                    return Redirect::route('post/new')
                        ->with(array(
                            'error' => 'Sorry, your post could not be saved'
                        ));
                }

            }
            else {
                return Redirect::route('post/new')
                    ->withErrors($validator)
                    ->withInput(Input::all());
            }

        }
        else {
            return View::make('posts.newPost');
        }

    }

    public function showUserPostAction() {
        $user = Auth::user();
        $posts = DB::table('posts')
            ->where('user_id','=',$user->id)
            ->get();

        return View::make('posts.userPosts', array(
            'posts' => $posts
        ));
    }

    public function editPostAction($id) {

        if(Input::server('REQUEST_METHOD') == 'POST') {
            $validator = Validator::make(Input::all(),array(
                'title' => 'required'
            ));

            if($validator -> passes()) {
                $post = Post::findOrFail($id);

                App::error(function(ModelNotFoundException $e){
                    return Response::make('Not Found', 404);
                });

                $post->title = Input::get('title');
                $post->message = Input::get('message');

                if($post->save()) {
                    return Redirect::to('editPost/'.$id)
                        ->with(array(
                            'success' => 'Your post has been saves successfully'
                        ));
                }
                else {
                    return Redirect::route('post/user')
                        ->with(array(
                            'error' => 'Sorry, your post could not be saved'
                        ));
                }

            }
            else {
                return Redirect::to('editPost/'.$id)
                    ->withErrors($validator);
            }
        }



        $user = Auth::user();
        /*$post = Post::find($id);
        var_dump($post);

        echo "<br>";*/

        $post = DB::table('posts')
            ->where('user_id','=',$user->id)
            ->where('id', '=', $id)
            ->get();
        //var_dump($post2);
        //exit;

        if($post) {
            return View::make('posts.editPost', array(
                'post' => $post[0],
                'id' => $id
            ));
        }
        else {
            return View::make('posts.editPost', array(
                'notFound' => 'You are not permitted to edit this post'
            ));
        }
    }

    public function getPostDetail($id){

    }
}