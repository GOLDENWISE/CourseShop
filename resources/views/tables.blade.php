@include('layouts.header')
<body id="page-top">
    <section id="app">
        <div id="wrapper" style="transition: all 0.3s ease-in-out;">
            @include('layouts.sidebaradmin')
            <div id="content-wrapper" class="d-flex flex-column">
                @include('layouts.navbar')
                <div id="content">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                        
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
                            </div>
                            <div class="card-body">
                                @if(Request::routeIs('course-data'))
                            
                                    <a href="{{ route('course.create') }}" class="btn btn-primary mb-4">Tambah Course</a>
                                
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                @foreach($labels as $label)
                                                    <th>{{ $label }}</th>
                                                @endforeach
                                                @if(Request::routeIs('course-data'))
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach($datas as $data)
                                                <tr>
                                                    @if(count($labels) == 6)
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->student->user->name }}</td>
                                                        <td>{{ $data->student->user->email }}</td>
                                                        <td>{{ $data->course->name }}</td>
                                                        <td>{{ $data->course->price }}</td>
                                                        <td>{{ $data->created_at }}</td>
                                                    @elseif(count($labels) == 4)
                                                        <td>{{ $data->name }}</td>
                                                        <td>
                                                            <ul>
                                                            @foreach($data->material as $material)
                                                                <li>{{ $material->name }}</li>
                                                            @endforeach
                                                            </ul>
                                                        </td>
                                                        <td>{{ $data->mentor->user->name }}</td>
                                                        <td>{{ $data->jurusan->name }}</td>
                                                        <td><a href="{{ route('course.edit', ['course' => $data->id]) }}" class="btn btn-warning">Edit</a></td>
                                                        <td>
                                                            <form action="{{ route('course.destroy', ['course' => $data->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                                            </form>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @include('layouts.footeradmin')