@extends('admin.master.master')

@section('title')
Update About us
@endsection

@section('body')

<div class="pagetitle">
    <h1>About us</h1>
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


                <form class="row g-3" method="post" action="{{ route('aboutus.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">totalExperience</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->totalExperience }}"   name="totalExperience" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">mainTitle</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->mainTitle }}"   name="mainTitle" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">shortDescription</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->shortDescription }}"   name="shortDescription" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconOne</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->iconOne }}"   name="iconOne" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">titleOne</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->titleOne }}"   name="titleOne" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">descriptionOne</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->descriptionOne }}"   name="descriptionOne" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">iconTwo</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->iconTwo }}"   name="iconTwo" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">titleTwo</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->titleTwo }}"   name="titleTwo" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">descriptionTwo</label>
                        <input type="text"  class="form-control"  value="{{ $allSystemInfo->descriptionTwo }}"   name="descriptionTwo" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">ceoName</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->ceoName }}"   name="ceoName" id="inputAddress2">

                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">ceoDesignation</label>
                        <input type="text"  class="form-control" value="{{ $allSystemInfo->ceoDesignation }}"  name="ceoDesignation" id="inputAddress2">

                      </div>






                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image One</label>
                        <input type="file" class="form-control"  name="imageOne" id="inputAddress2">
                        <small class="text-danger">Size : 470*526</small>

                        <img src="{{ asset('/') }}{{ $allSystemInfo->imageOne }}" width="80px" alt="">
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image Two</label>
                        <input type="file" class="form-control"  name="imageTwo" id="inputAddress2">
                        <small class="text-danger">Size : 377*233</small>

                        <img src="{{ asset('/') }}{{ $allSystemInfo->imageTwo }}" width="80px" alt="">
                      </div>


                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">CEO Image</label>
                        <input type="file" class="form-control"  name="ceoImage" id="inputAddress2">
                        <small class="text-danger">Size : 67*67</small>

                        <img src="{{ asset('/') }}{{ $allSystemInfo->ceoImage }}" width="80px" alt="">
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
