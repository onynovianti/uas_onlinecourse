@extends('partials.main_back') 

@section('konten') 
@include('sweetalert::alert')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Edit Course</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="/admin">Home</a>
						</li>
						<li class="breadcrumb-item">Course</li>
						<li class="breadcrumb-item active">Course</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="curriculum" data-toggle="pill" href="#tab_curriculum" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Curriculum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="basic" data-toggle="pill" href="#tab_basic" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Basic</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="requirements" data-toggle="pill" href="#tab_requirements" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Requirements</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="outcomes" data-toggle="pill" href="#tab_outcomes" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Outcomes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pricing" data-toggle="pill" href="#tab_pricing" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Pricing</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="media" data-toggle="pill" href="#tab_media" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Media</a>
							</li>
						</ul>
						<form role="form" action="/course/{{ $item->id }}" method="POST" enctype="multipart/form-data" id="add_form">@method("put") @csrf </form>
						<div class="tab-content" id="custom-content-below-tabContent">
							<div class="tab-pane fade show active" id="tab_curriculum" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<div class="mt-4 text-center"><b><i class="fas fa-exclamation-triangle"></i> A section will not be saved if there is no content </b></div>
								
								<div class="row justify-content-center">
									<input data-toggle="modal" data-target="#modal-section" type="button" value="+ Add Section" class="mt-4 btn btn-outline-primary mb-4 float-right">
									<input data-toggle='modal' data-target='#modal-lesson' type='button' value='+ Add Lesson' class='ml-2 mt-4 btn btn-outline-primary mb-4 float-right'>
								</div>
								@foreach ($pertemuan as $p)
								{{-- <p>{{ $p->pertemuan }}</p> --}}
								<div class="card card-secondary">
									<div class='card-header'><h3 class='card-title'>{{ $p->pertemuan }}</h3>
									</div>
									<div class='card-body'>
										@foreach ($cur as $c)
										@if($c->pertemuan == $p->pertemuan)
											<li>{{ $c->jenis }}</li>
										@endif
									@endforeach
									</div>
								</div>
								@endforeach
								<span id="sect">
								</span>
								{{-- MODAL  --}}
								<div class="modal fade" id="modal-section">
									{{-- <form action="/addsection/{{ $item->id }}" method="POST"> @csrf --}}
									<div class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 class="modal-title">Tambah Section</h4>
										  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										  </button>
										</div>
										<div class="modal-body">
										  <input type="text" name="section" placeholder="Enter Section" class="form-control">
										</div>
										<div class="modal-footer justify-content-between">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  <button type="button" class="btn btn-primary" onclick="addSection()">Save changes</button>
										</div>
									  </div>
									</div>
									{{-- </form> --}}
								  </div>
								  <div class="modal fade" id="modal-lesson">
									<form action="/addlesson/{{ $item->id }}" method="POST" id="add_lesson" enctype="multipart/form-data"> 
									@csrf
									<div class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 class="modal-title">Tambah Lesson</h4>
										  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										  </button>
										</div>
										<div class="modal-body">
										  <p>Select Lesson Type</p>
										  <div class="form-group">
											<label>Type</label>
											<select onchange="getval(this);" class="form-control select2bs4" style="width: 100%;" name="jenis">
												<option value="Youtube Video">Youtube Video</option>
												<option value="Video File">Video File</option>
												<option value="Document File">Document File</option>
												<option value="Image">Image</option>
											</select>
											@error('jenis') <code>
												{{ $message }}
											</code> @enderror
										</div>
										<div class="form-group">
											<label>Section</label>
											<select class="form-control select2bs4" style="width: 100%;" name="pertemuan" onclick="getOption();" id="select_pertemuan">
											</select>
											@error('jenis') <code>
												{{ $message }}
											</code> @enderror
										</div>
										<span id="tambahan">
											<div id="can-remove">
												<input type="text" name="materi" class="form-control" placeholder="https://www.youtube.com/watch?v=9LWmM-3lb84">
											</div>
										</span>
										</div>
										<div class="modal-footer justify-content-between">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  <button class="btn btn-primary" onclick="document.getElementById('add_lesson').submit();">Submit</button>
										</div>
									  </div>
									</div>
									</form>
								  </div>
								<div class="btn-group float-right">
									<button class="nav-link btn btn-default" onclick="location.href='/course'" type="button">Cancel</button>
									<button class="nav-link float-right btn btn-primary btn_basic" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
								</div>
							</div>
							<div class="tab-pane fade" id="tab_basic" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<div class="form-group mt-4">
									<label>Add New Instructor</label>
									<select class="form-control select2bs4" style="width: 100%;" name="instructor" form="add_form">
										@foreach($instructor as $i) <option value={{ $i->id }}>{{ $i->name }}</option> @endforeach 
									</select>
									@error('instructor') <code>
										{{ $message }}
									</code> @enderror
								</div>	
								<div class="form-group">
										<label for="exampleInputEmail1">Title</label>
										<input type="text" form="add_form" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title" value="{{ $item->title }}"> @error('title') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Short Description</label>
										<input type="text" form="add_form" class="form-control" id="exampleInputEmail1" placeholder="Enter short description" name="short_description" value="{{ $item->short_description }}"> @error('short_description') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label>Category</label>
										<select form="add_form" class="form-control select2bs4" name="category" style="width: 100%;"> 
											@foreach($kategori as $k) 
											<option value={{ $k->id }} {{ ($item->category == $k->id) ? "selected" : "" }}>{{ $k->name }}</option> 
											@endforeach 
										</select>
										@error('category') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label>Description</label>
										<div class="card-body pad">
											<div class="mb-3">
												<textarea form="add_form" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $item->description }}</textarea>
											</div>
										</div>
										@error('description') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<!-- /.card-body -->
									<div class="form-group">
										<label>Level</label>
										<select form="add_form" class="form-control select2bs4" style="width: 100%;" name="level">
											<option value="Beginner" {{ ($item->level == 'Beginner') ? "selected" : "" }}>Beginner</option>
											<option value="Intermediate" {{ ($item->level == 'Intermediate') ? "selected" : "" }}>Intermediate</option>
											<option value="Advanced" {{ ($item->level == 'Advanced') ? "selected" : "" }}>Advanced</option>
										</select>
										@error('level') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-check">
										<input form="add_form" class="form-check-input" type="checkbox" name="is_topcourse" {{ ($item->is_topcourse == 1) ? "checked" : "" }}>
										<label class="form-check-label">Check if this course if top course</label>
									</div>
									<div class="form-check">
										<input form="add_form" class="form-check-input" type="checkbox" name="allow_enroll" {{ ($item->allow_enroll == 1) ? "checked" : "" }}>
										<label class="form-check-label">Allow user to enroll</label>
									</div>
									<div class="btn-group float-right">
										<button class="nav-link btn btn-default btn_curriculum" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
										<button class="nav-link float-right btn btn-primary btn_requirements" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
									</div>
							</div>
							<div class="tab-pane fade" id="tab_requirements" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<input type="button" value="+ Add More Requirement" onClick="editRequirements();" class="mt-4 btn btn-outline-primary mb-4 float-right">
								<span id="req">
									@foreach ($req as $r)
									<div class="input-group mb-3">
										@if ($loop->first)
										<input form="add_form" type="text" class="form-control" name="requirements[]" placeholder="Enter requirements" value="{{ $r->name }}">
										@else
										<input form="add_form" type='text' class='form-control' name='requirements[]' placeholder='Enter requirements' value="{{ $r->name }}"> <input type='button' value='Remove' onClick='removeRequirements(this);' class='btn btn-outline-danger'>
										@endif
									</div>
									@endforeach
								</span>
								@error('requirements') <code>
									{{ $message }}
								</code> @enderror
								<div class="btn-group float-right">
									<button class="nav-link btn btn-default btn_basic" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
									<button class="nav-link float-right btn btn-primary btn_outcomes" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
								</div>
							</div>
							<div class="tab-pane fade" id="tab_outcomes" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<input type="button" value="+ Add More Outcomes" onClick="editOutcomes();" class="mt-4 btn btn-outline-primary mb-4 float-right">
								<span id="out">
									@foreach ($out as $o)
									<div class="input-group mb-3">
										@if ($loop->first)
										<input form="add_form" type="text" class="form-control" name="outcomes[]" placeholder="Enter outcomes" value="{{ $o->name }}">
										@else
										<input form="add_form" type='text' class='form-control' name='outcomes[]' placeholder='Enter outcomes' value="{{ $o->name }}"> <input type='button' value='Remove' onClick='removeOutcomes(this);' class='btn btn-outline-danger'>
										@endif
									</div>
									@endforeach
								</span>
								@error('outcomes[]') <code>
									{{ $message }}
								</code> @enderror
								<div class="btn-group float-right">
									<button class="nav-link btn btn-default btn_requirements" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
									<button class="nav-link float-right btn btn-primary btn_pricing" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
								</div>
							</div>
							<div class="tab-pane fade" id="tab_pricing" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<div class="form-check mt-4">
									<input form="add_form" class="form-check-input" type="checkbox" id="harga" name="is_free" onclick="cekRequreiments()" name="free_course" {{ ($item->price == 0) ? "checked" : "" }}>
									<label class="form-check-label">Check if this course is free course</label>
								</div>
								<div id="price">
									<div class="form-group ml-4 mt-2">
										<label>Course Price (Rp) </label>
										<div class="mb-5">
											<input form="add_form" type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $item->price }}">
										</div>
									</div>
									<div class="form-check">
										<input form="add_form" class="form-check-input" type="checkbox" id="diskon" onclick="cekDiscount()" name="discount">
										<label class="form-check-label">Check if this course has discount</label>
									</div>
									<div class="form-group ml-4 mt-2" id="discount" style="display: none;">
										<label>Discounted Price (Rp) </label>
										<div class="mb-3">
											<input form="add_form" type="text" class="form-control" id="exampleInputEmail" name="discount_price" value="{{ old('short_description') }}">
										</div>
									</div>
								</div>
								<div class="btn-group float-right">
									<button class="nav-link btn btn-default btn_outcomes" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
									<button class="nav-link float-right btn btn-primary btn_media" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
								</div>
							</div>
							<div class="tab-pane fade" id="tab_media" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<div class="input-group mt-4">
									<div class="custom-file">
										<input type="file" form="add_form" class="custom-file-input" id="exampleInputFile" name="gambar" accept="image/*" value="{{ $item->gambar }}">
										<label class="custom-file-label" for="exampleInputFile">{{ $item->gambar }}</label>
									</div>
								</div>
								@error('gambar') <code>
									{{ $message }}
								</code> @enderror
								<div class="btn-group float-right mt-4">
									<button class="nav-link btn btn-default btn_pricing" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
									<input form="add_form" class="float-right btn btn-primary" type="submit" value="Submit">
								</div>
							</div>
						</form>
						</div>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div> 
@endsection