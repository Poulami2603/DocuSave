@extends('layout.masterlayout')

@section('content')
<div class="col-md-10">
<div class="card">
  <div class="card-body">
  <h1 class="justify-content-center mt-2">Upload Your Document</h1>
    <div class="col-md-6 mx-auto mt-3">
    <form class="contact-form" action="store_data" method="post" enctype="multipart/form-data">
      @csrf
       <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <lable>Document Title</lable>
             <input type="text" class="form-control" name='title' placeholder="Title"/>
           </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
            <lable>Document Type</lable>
               <select class="form-control" name='type' placeholder='type'>
                 <option class='text-dark'>Select Document Type</option>
                 <option class='text-dark' name='type' value="aadhar">Aadhar Card</option>
                 <option class='text-dark' name='type' value="pan">PAN Card</option>
                 <option class='text-dark' name='type' value="voter">Voter Card</option>
                 <option class='text-dark' name='type' value="marksheet">Marksheet</option>
                 <option class='text-dark' name='type' value="others">Others</option>
               </select>
            </div>
          </div>
         <div class="col-md-12">
        <div class="form-group">
         <lable>ID Number</lable>
          <input type="text" class="form-control" name='docid' placeholder='ID Number'>
       </div>
       </div>
      <div class="col-md-12">
        <div class="form-group">
         <lable>Upload Document</lable>
          <input type="file" class='form-control' id='img' name='image' />
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <input type="submit" name="upload" placeholder="Upload">
      </div>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection

@section('title')
  Upload Document
@endsection