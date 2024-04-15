<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->  
    @include('admin.sidebar')
    
    <!-- partial -->
    @include('admin.navbar')

    <!-- partial -->
    @include('admin.body') 
    <!-- container-scroller -->
    @include('admin.script')
    </div>
  </body>
</html>
