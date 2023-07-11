@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Massage</li>
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
                    <th>Name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($message_submit_view as $rowamessage_submit_view)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowamessage_submit_view->name}}</td>
                    <td>{{$rowamessage_submit_view->phone}}</td>
                    <td>{{$rowamessage_submit_view->email}}</td>
                    <td>{{$rowamessage_submit_view->subject}}</td>
                    <td>{{$rowamessage_submit_view->message}}</td>
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