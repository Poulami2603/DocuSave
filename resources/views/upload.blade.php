@extends('layout.masterlayout')

@section('content')
<div class="col-md-10">
<div class="card">
  <div class="card-body">
  <h1 className="fw-bold text-white mt-5 text-center">Upload Your Document</h1>
    <div class="col-md-6 mx-auto mt-5">
    <form className="contact-form">
       <div className="row">
          <div className="col-md-12">
            <div className="form-group">
             <input type="text" className="form-control" name='title' value="Title">
           </div>
          </div>
          <div className="col-md-12">
            <div className="form-group">
               <select class="form-control" name='category' value='category'>
                 <option className='text-dark'>Select Document Type</option>
                 <option className='text-dark' name='category' value="aadhar">Aadhar Card</option>
                 <option className='text-dark' name='category' value="pan">PAN Card</option>
                 <option className='text-dark' name='category' value="voter">Voter Card</option>
                 <option className='text-dark' name='category' value="marksheet">Marksheet</option>
                 <option className='text-dark' name='category' value="others">Others</option>
               </select>
            </div>
          </div>
         <div className="col-md-6">
        <div className="form-group">
          <input type="text" className="form-control" name='id' value='ID Number'>
       </div>
       </div>
      <div className="col-md-12">
        <div className="form-group">
          <input type="file" className='form-control' id='img' name='img' >
        </div>
      </div>
      <div className="col-md-12">
        <div className="form-group">
        <a href="/edit" class="btn btn-primary">Upload</a>
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