<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		echo "hello";
        exit;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user_id = Auth::user()->id;
        $post_id = Input::get('post_id');

        $validator = Validator::make(
            Input::all(),
            array(
                'comment' => 'required'
            )
        );

        if($validator->passes()) {
            $comment = new Comment;
            //$file = Input::file('file');

            $comment->user_id = $user_id;
            $comment->post_id = $post_id;
            $comment->comment_body = Input::get('comment');

           /* $filename = $file->getClientOriginalExtension('file');
            $dest = 'assets/img/';
            $file->move($dest,$file->getClientOriginalName());
            dd($filename);*/

            if ($comment->save()) {
                return Redirect::to('postDetail/'.$post_id)
                    ->with(array('success' => 'Your comment has been saved'));
            }
            else {
                return Redirect::to('postDetail/'.$post_id)
                    ->with(array('failure' => 'Sorry, comment could not be saved'));
            }

        }
        else {
            return Redirect::to('postDetail/'.$post_id)
                ->withErrors($validator)
                ->withInput(Input::all());
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}