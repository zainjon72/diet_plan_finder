@extends('layouts.header')
@section('content')

<section style="margin-top: 300px;">
  <div class="rt-container">
    <div class="col-rt-12">
      <div class="Scriptcontent">

        <!-- Student Profile -->
        <div class="student-profile py-5 mt-5">
          <div class="container">
            <div class="pofile_heading text-center mb-5">
              <h3>My Profile</h3>
            </div>
            <div class="row ">
              {{-- <div class="col-lg-4">
                <div class="card shadow-sm">
                  <div class="card-header bg-transparent text-center">
                    <img class="profile_img" src="https://source.unsplash.com/600x300/?man" alt="student dp">
                    <h3>{{ Auth::user()->name }}</h3>
                  </div>
                </div>
              </div> --}}

              <div class="col-lg-12 ">
                <div class="card shadow-sm mb-5">
                  <div class="card-header bg-transparent border-0">
                    <h3 class="mb-0 text-dark"><i class="far fa-clone pr-1 text-dark"></i>General Information</h3>
                  </div>
                  <div class="card-body pt-0">

                    <table class="table table-bordered">
                      <tr>
                        <th width="30%">ID</th>
                        <td width="2%">:</td>
                        <td>{{ Auth::user()->id }}</td>
                      </tr>
                      <tr>
                        <th width="30%">Name</th>
                        <td width="2%">:</td>
                        <td>{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                        <th width="30%">Email</th>
                        <td width="2%">:</td>
                        <td>{{ Auth::user()->email }}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div style="height: 26px"></div>
                {{-- <div class="card shadow-sm">
                  <div class="card-header bg-transparent border-0">
                    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                  </div>  
                  <div class="card-body pt-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- partial -->

      </div>
    </div>
  </div>
</section>
{{-- <div class="form-group add-exp mt-s w-75 mx-auto" style="width: 70%; margin: 0px auto;">
  <h2>Add Experiences</h2>
  <div class="all-exps">
    <div class="new-exp">
      <label>Title:</label>
      <input type="text" name="exp[title][]" class="form-control cv_field" placeholder="Ex: Web Developer" value="Web Designer">
      <label>Company:</label>
      <input type="text" name="exp[company][]" class="form-control cv_field" placeholder="Ex: ProgressSoft" value="ProgressSoft">
      <label>Description (optional):</label>
      <textarea name="exp[description][]" class="form-control cv_field" placeholder="Enter your Description:">Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; user interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization.</textarea>
    </div>
  </div>
  <div class="add-blk btn btn-info" id="add-exp">
    <i class="fa fa-plus"></i>
    <span>Add another experience</span>
  </div>
</div> --}}
@endsection