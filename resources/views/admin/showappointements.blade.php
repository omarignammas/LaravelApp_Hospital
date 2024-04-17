
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->  
    @include('admin.sidebar')
    
    <!-- partial -->
    @include('admin.navbar')

    <!-- partial -->
     <div class="container-fluid page-body-wrapper">
       
       
     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
