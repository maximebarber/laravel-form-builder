<!doctype html>
 
<html>
 
<head>
 
    @include('includes.head')
 
</head>
 
<body>
 
@include('includes.navbar')

<div class="container">
 
   <div id="main">
 
           @yield('content')
 
   </div>
 
   <footer class="row">
 
       {{-- @include('includes.footer') --}}
 
   </footer>
 
</div>

@include('includes.scripts')
 
</body>
 
</html>