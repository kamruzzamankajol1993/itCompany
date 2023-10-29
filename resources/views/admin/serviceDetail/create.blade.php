@extends('admin.master.master')

@section('title')
Add Service Detail
@endsection

@section('body')

<div class="pagetitle">
    <h1>Service Detail</h1>
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


                <form class="row g-3" method="post" action="{{ route('serviceDetail.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="col-12">
                      <label for="inputNanme4" class="form-label">service Category</label>
                      <select name="serviceId" class="form-control" id="inputNanme4">

                        <option value="">-- Please Select --</option>
                        @foreach($allSystemInfoOne as $allSystemInfoOnes)
<option value="{{ $allSystemInfoOnes->id }}">{{ $allSystemInfoOnes->serviceTitle }}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">servicePdf</label>
                        <input type="file" accept=".pdf" class="form-control"  name="servicePdfFile" id="inputAddress2">

                      </div>



                      <div class="col-12">
                        <label for="inputAddress2" class="form-label">serviceImage</label>
                        <input type="file" class="form-control"  name="serviceImage" id="inputAddress2">
                        <small class="text-danger">Size : 1300*650</small>
                      </div>

                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Detail</label>
                          <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor" name="serviceDescription">

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
