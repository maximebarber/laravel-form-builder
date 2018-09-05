<!doctype html>
 
<html>
 
<head>
 
    @include('includes.head')
 
</head>
 
<body>
 
<div class="container">
 
   <header class="row">
 
       {{-- @include('includes.header') --}}
 
   </header>
 
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