@extends('layout.Tpage')
@section('content')



<div class="container-xl">
     <div class="table-responsive">
         <div class="table-wrapper">
             <div class="table-title">
                    <div class="row">
                         <div class="col-sm-6">
                     <h2>Manage <b>User</b></h2>
                </div>
            <div class="col-sm-6">
     <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>

     </div>
         </div>
 </div>
        <table class="table table-striped table-hover">
    <thead>
            <tr>
            <th>ID</th>
             <th>Name</th>
             <th>Email</th>
            <th>Password</th>
             </tr>
        </thead>
         <tbody>
     @foreach ($user as $list)
         <tr>
         <td>{{ $list->id }}</td>
         <td> {{ $list->name }} </td>
         <td>{{ $list->email }}</td>
         <td>{{ $list->password }}</td>
                 <td>
     <a href="{{ url('/admin/'.$list->id.'/edit')}}" class="edit" title="Edit" ><i class="material-icons" data-toggle="tooltip" >&#xE254;</i></a>
    <form action="{{ url('/admin/'.$list->id) }}" method="post">
     {{ method_field('DELETE') }}
     {{ csrf_field() }}

     <button type="submit"><a href="#deleteEmployeeModal" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></button>
     </form>
         </td>
         </tr>
    @endforeach
 </tbody>
        </table>
        </div>
</div> 
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
     <div class="modal-dialog">
        <div class="modal-content">
         <form action="{{url('/admin')}}" method="post">
                {!! csrf_field() !!}
        <div class="modal-header">
         <h4 class="modal-title">Add User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
             <div class="modal-body"> 
         <div class="form-group">
         <label>Name</label>
        <input id="name" type="text" name="name" class="form-control" required>
         </div>
         <div class="form-group">
             <label>Email</label>
         <input  id="Email" type="email" name="email" class="form-control" required>
         </div>
         <div class="form-group">
                <label>Password</label>
                 <textarea class="form-control" name="password"  id="password" required></textarea>
                     </div>
               
                 </div>
                 <div class="modal-footer">
             <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
    </div>
    </form>
    </div>
    </div>
    </div>
<!-- Edit Modal HTML -->
<!-- Delete Modal HTML -->




@endsection