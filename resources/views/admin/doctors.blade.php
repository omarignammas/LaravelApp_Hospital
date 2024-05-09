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
    <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Recent Tickets</h4>
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th> Doctor </th>
                      <th> Name </th>
                      <th> Speciality </th>
                      <th> Phone </th>
                      <th> Room </th>
                      <th> Statut </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $doctor)
                    <tr >
                      <td>
                        <img src="doctorimage/{{$doctor->image}}" class="me-2" alt="doctorimage">
                      </td>
                      <td class="text-success font-weight-bold">{{$doctor->name}}</td>
                      <td>{{$doctor->speciality}}</td>
                      <td>{{$doctor->phone}}</td>
                      <td>{{$doctor->room}}</td>
                      <td class="badge badge-gradient-success p-1 mt-4 text-white">Verified</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>
</html>








