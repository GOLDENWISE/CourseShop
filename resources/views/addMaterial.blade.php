@include('layouts.header')
<body id="page-top">
    <div id="app">
        <div id="wrapper" style="transition: all 0.3s ease-in-out;">
            @include('layouts.sidebaradmin')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Begin Page Content -->
                    @include('layouts.navbar')
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Add {{ $Title }}</h1>
                        
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
                            </div>
                            <div class="card-body">
                               <form action="{{ route('course.store') }}" method="post">
                                  @csrf
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nama Materi</span>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama course" aria-label="course-name" aria-describedby="basic-addon1">
                                  </div>                                
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Description</span>
                                    <input type="text" name="description" class="form-control" placeholder="Masukkan deskripsi course" aria-label="course-description" aria-describedby="basic-addon1">
                                  </div>                                
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Requirement</span>
                                    <input type="text" name="requirement" class="form-control" placeholder="Masukkan requirement course" aria-label="course-requirement" aria-describedby="basic-addon1">
                                  </div>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Price</span>
                                    <input type="number" name="price" class="form-control" placeholder="Masukkan biaya course" aria-label="course-price" aria-describedby="basic-addon1">
                                  </div>
                                  <div class="input-group">
                                    <span class="input-group-text">Facility</span>
                                    <textarea class="form-control" name="facility" aria-label="facility"></textarea>
                                  </div>
                                  <select class="form-select mt-3" name="jurusan" aria-label="Default select example">
                                    <option selected>Jurusan</option>
                                    @foreach($jurusans as $jurusan)
                                    
                                      <option value="{{ $jurusan->id }}">{{ $jurusan->name }}</option>
                                      
                                    @endforeach
                                  </select>
                                  <br>
                                  <select class="form-select mt-3" name="mentor" aria-label="Default select example">
                                    <option selected>Mentor</option>
                                    @foreach($users as $user)

                                      @if($user->mentor->status)

                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                      
                                      @endif
                                      
                                    @endforeach
                                  </select>
                                  <br>
                                  <button type="submit" class="btn btn-primary mt-3">Submit</button>                                
                               </form>
                            </div>
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Course<sup>shop</sup> 2024</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    </div>
    @include('layouts.footeradmin')