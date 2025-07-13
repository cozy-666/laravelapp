<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // You can pass any data you want to the view
        $view->with('view_message', 'This view is "'. $view->getName() . '" !!');
    }
}
