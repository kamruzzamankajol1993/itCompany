@extends('admin.master.master')

@section('title')
Update Cantact Page Content
@endsection

@section('body')

<div class="pagetitle">
    <h1>Cantact Page Content</h1>
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


                <form class="row g-3" method="post" action="{{ route('messagePartOne.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title One</label>
                        <input type="text" name="title" value="{{ $allSystemInfo->title }}" class="form-control" id="inputNanme4">
                      </div>
                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Title Two</label></label>
                        <input type="text" class="form-control" name="titleTwo" value="{{ $allSystemInfo->titleTwo }}" id="inputEmail4">
                      </div>
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $allSystemInfo->description }}" id="inputPassword4">
                      </div>






                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Back Ground Image</label>
                          <input type="file" class="form-control"  name="image" id="inputAddress2">
                          <small class="text-danger">Size : 1890*540</small>

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
