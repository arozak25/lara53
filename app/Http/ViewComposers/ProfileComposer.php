<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ProfileComposer 
{

    // The code below is a function to create a variable that shared with view creator, so the function name is crate
    public function create(View $view)
    {
        $view->with('married', random_int(0, 1));
        $view->with('test', 'say test');
    }
    /* The code below is a function to create a variable that shared with view composer, so the function name is compose
    public function compose(View $view)
    {
        $view->with('married', random_int(0, 1));
        $view->with('test', 'say test');
    }
    */

}

?>