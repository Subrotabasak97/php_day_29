@extends('master')

@section('title')
    Manage Student
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Manage  Students
                        </div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                           <div class="table-responsive">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                   <tr>
                                       <td>Sl no</td>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Mobile</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($students as $student)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td>{{$student->name}}</td>
                                       <td>{{$student->email}}</td>
                                       <td>{{$student->mobile}}</td>
                                       <td>
                                           <a href="{{route('edit-student',$student->id)}}" class="btn btn-sm btn-success"  > <i class="fa fa-edit"></i> </a>
                                       <a href="" class="btn btn-sm btn-danger"  onclick="deleteStudent({{$student->id}})"> <i class="fa fa-trash"></i> </a>
                                           <form action="{{route('delete-student',$student->id)}}" id="deleteStudentForm{{$student->id}}" method="post">
                                               @csrf
                                           </form>
                                       </td>
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
    </section>

    <script>
        function deleteStudent(id) {
            event.preventDefault();
           var check = confirm('ok');
           if(check)
           {
               document.getElementById('deleteStudentForm'+id).submit();
           }
        }
    </script>
@endsection
