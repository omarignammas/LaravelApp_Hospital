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
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Doctor Name</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Cancel</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->doctor}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->message}}</td>
                                        <td class="badge {{$item->status === 'In Progress' ? 'badge-gradient-warning' : ($item->status === 'Approved' ? 'badge-gradient-success' : 'badge-gradient-danger')}} mt-4 p-2">{{$item->status}}</td>
                                        <td><a href="{{url('approved',$item->id)}}" class="btn btn-success">Approve</a></td>
                                        <td><a href="{{url('canceled',$item->id)}}" class="btn btn-danger">Cancel</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
