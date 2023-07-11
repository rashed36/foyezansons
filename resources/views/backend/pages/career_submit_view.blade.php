@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Career</li>
        </ol>
         <div>
         </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Dob</th>
                    <th>Natinality</th>
                    <th>Education</th>
                    <th>Ins</th>
                    <th>CV</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Dob</th>
                    <th>Natinality</th>
                    <th>Education</th>
                    <th>Ins</th>
                    <th>CV</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($career_submit_view as $rowacareer_submit_view)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowacareer_submit_view->title}}</td>
                    <td>{{$rowacareer_submit_view->name}}</td>
                    <td>{{$rowacareer_submit_view->phone}}</td>
                    <td>{{$rowacareer_submit_view->email}}</td>
                    <td>{{$rowacareer_submit_view->dob}}</td>
                    <td>{{$rowacareer_submit_view->natinality}}</td>
                    <td>{{$rowacareer_submit_view->education}}</td>
                    <td>{{$rowacareer_submit_view->ins}}</td>
                    <td><a href="public/{{$rowacareer_submit_view->file}}">Download</a></td>
                  </tr>

@endforeach









                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection