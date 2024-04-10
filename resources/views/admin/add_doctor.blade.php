
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
       

        <div class="container" style="padding-top:50px;padding-left:250px;">

            @if (session()->has('message'))
            <div class="alert alert-success" style="width:520px;">
            <button type="button"  class="close" data-dismiss="alert">x</button>
 
            {{session()->get('message')}}
         
            </div> 
         
             
            @endif

       <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name" style="margin-top: 15px;">Doctor Name</label><br>
        <input type="text" name="name" style="color: black;width:520px;" required placeholder="Enter name doctor"><br>

        <label for="phone" style="margin-top: 15px;">Phone number</label><br>
        <input type="number" name="phone" style="color: black;width:520px;" required placeholder="Enter phone"><br>

        <label for="speciality" style="margin-top: 15px;">Speciality</label><br>
        <select name="speciality" style="color: black;width:520px;">
            <option>--Select--</option>
            <option value="skin">skin</option>
            <option value="heart">heart</option>
            <option value="eye">eye</option>
            <option value="nose">nose</option>
        </select><br>

        <label for="room" style="margin-top: 15px;">Room Number</label><br>
        <input type="number" name="room" style="color: black;width:520px;" required placeholder="Enter room number"><br>

        <label for="image" style="margin-top: 15px;width:520px;">Doctor Image</label><br>
        <input type="file" name="file"><br>

        <input type="submit" class="btn btn-primary mt-3 col-md-8" value="ajouter">

       </form>

        </div>
        
     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
