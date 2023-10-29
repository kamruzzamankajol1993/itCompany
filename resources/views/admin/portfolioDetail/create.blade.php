@extends('admin.master.master')

@section('title')
Add Portfolio Detail
@endsection

@section('body')

<div class="pagetitle">
    <h1>Portfolio Detail</h1>
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

                <h5 class="card-title">Add Data</h5>


                <form class="row g-3" method="post" action="{{ route('portfolioDetail.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="col-12">
                      <label for="inputNanme4" class="form-label">Portfolio Category</label>
                      <select name="portfolioId" class="form-control" id="inputNanme4">

                        <option value="">-- Please Select --</option>
                        @foreach($allSystemInfoOne as $allSystemInfoOnes)
<option value="{{ $allSystemInfoOnes->id }}">{{ $allSystemInfoOnes->title }}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Date</label>
                        <input type="date"  class="form-control"  name="date" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">clientName</label>
                        <input type="text"  class="form-control"  name="clientName" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">webLink</label>
                        <input type="text"  class="form-control"  name="webLink" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">location</label>
                        <input type="text"  class="form-control"  name="location" id="inputAddress2">

                      </div>

                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">Image</label>
                        <input type="file" class="form-control"  name="serviceImage" id="inputAddress2">
                        <small class="text-danger">Size : 1894*870</small>
                      </div>

                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Detail</label>
                          <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor" name="descriptionOne">

                </textarea><!-- End TinyMCE Editor -->
                      </div>




                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>

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
