@extends('admin.master.master')

@section('title')
Update Team
@endsection

@section('body')

<div class="pagetitle">
    <h1>Team</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Form</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Update Data</h5>


                <form class="row g-3" method="post" action="{{ route('serviceDetail.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Name</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->name }}" name="name" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Designation</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->designation }}"  name="designation" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Email</label>
                        <input type="email"  class="form-control" value="{{ $allSystemInfo->email }}" name="email" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Phone</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->phone }}" name="phone" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Personal Line</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->personalLine }}"  name="personalLine" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Portfolio Link</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->webLink }}"  name="webLink" id="inputAddress2">

                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image</label>
                        <input type="file" class="form-control"  name="image" id="inputAddress2">
                        <small class="text-danger">Size : 330*425</small>
                        <img src="{{ asset('/') }}{{ $allSystemInfo->image }}" width="80px" alt="">
                      </div>




                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Update Data</button>

                    </div>
                  </form>




            {{-- <!-- TinyMCE Editor -->
            <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor --> --}}


            </div>

        </div>

      </div>

    </div>
  </section>

@endsection
