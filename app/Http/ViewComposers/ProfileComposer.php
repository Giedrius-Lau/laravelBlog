<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class profileComposer{
  public function create(View $view){
    $view->with('married', random_int(0, 1));
    $view->with('sauktukas', 'Kiek vaiku turi?');
  }
}
?>
