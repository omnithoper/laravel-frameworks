<?php $controller = Route::currentRouteAction(); ?>  

<nav class="navbar navbar-inverse ">
<div class="container-fluid">
<ul class="nav navbar-nav "  id ="adminNav">
  <li <?php if($controller == 'App\Http\Controllers\IndexController@index'): ?> class="active"<?php endif; ?> ><a href="/index/">Home</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@students'): ?> class="active"<?php endif; ?> ><a href="/students/" >Students</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@subjects'): ?> class="active"<?php endif; ?> ><a href="/subjects/" >Subjects</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@bsection'): ?> class="active"<?php endif; ?> ><a href="/bsection/" >Block Section</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@enrollment'): ?> class="active"<?php endif; ?> ><a href="/enrollment/" >Enroll</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@studentgrade'): ?> class="active"<?php endif; ?> ><a href="/studentgrade/" >Student Grade</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@settings'): ?> class="active"<?php endif; ?> ><a href="/settings/" >Setting</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@admin'): ?> class="active"<?php endif; ?> ><a href="/admin/" >Admin</a></li>
  <li <?php if($controller == 'App\Http\Controllers\IndexController@income'): ?> class="active"<?php endif; ?> ><a href="/income/" >Income</a></li>
  <li><a href="/login/logout">Log Out</a></li>
</ul>
</div>
</nav>
