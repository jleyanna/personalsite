<?php

class BlogController extends BaseController
{

    public function showBlog()
    {
        return View::make('blog');
    }
}
