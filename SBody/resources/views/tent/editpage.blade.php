@extends('layout.Tpage)
@section('content')
 <div id="editEmployeeModal" class="user">
                <div class="modal-dialog">
                <div class="modal-content">
                 <form action="{{ url('/admin/'.$user->id) }}" method="post">
                     {!! csrf_field() !!}
                         @method("PATCH")
                    <div class="modal-header"> 
                 <h4 class="modal-title">Edit User</h4>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                             <div class="modal-body">
                         <div class="form-group" hidden>
                             <label>ID</label>
                 <input id="id" type="text" class="form-control" value="{{$user->id}}" name="id">
                 </div>
                 <div class="form-group">
             <label>Name</label>
                 <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>
                        </div>
                    <div class="form-group">
                         <label>Email</label>
                     <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                        </div>
                        <div class="form-group">
                         <label>Password</label>
                     <input id="password" type="email" class="form-control" name="email" value="{{$user->password}}" required>
                        </div>
                 
                 </div>
             <div class="modal-footer">
             <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                 <input type="submit" class="btn btn-info" value="Save">
                         </div>
             </form>
      </div>
   </div>
 </div>

@endsection
