
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
       
        <div class="container" >

            @if (session()->has('message'))
            <div class="alert alert-success">
            <button type="button"  class="close" data-dismiss="alert"> x </button>
 
            {{session()->get('message')}}
         
            </div> 
         
             
            @endif



            <form class="forms-sample" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Doctor Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Doctor Name">
              </div>
              <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone number">
              </div>
              
              <div class="form-group">
                <label for="Speciality">Speciality</label>
                <select class="form-control" id="Speciality"name="speciality" > 
                  <option>--Select--</option>
                  <option value="skin">skin</option>
                  <option value="heart">heart</option>
                  <option value="eye">eye</option>
                  <option value="nose">nose</option>
                </select><br>
              <div class="form-group">
                <div class="form-group">
                  <label>Doctor Image</label>
                  <input type="file" name="file" class="file-upload-default" onchange="updateFileName(this)">
                  <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                          <button class="file-upload-browse btn" style="background-color: rgb(124, 228, 124);color:azure" type="button" onclick="document.querySelector('input[name=file]').click()">Upload</button>
                      </span>
                  </div>
              </div>
              
              <script>
                  function updateFileName(input) {
                      var fileName = input.files[0].name;
                      var fileInfoInput = input.parentElement.querySelector('.file-upload-info');
                      fileInfoInput.value = fileName;
                  }
              </script>
              
                 
              <div class="form-group">
                <label for="room">Room Number</label>
                <input type="text" class="form-control" id="room" name="room" placeholder="Room number">
              </div>
              <button class="btn btn-gradient-success me-2">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </form>

        </div>
        
     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
