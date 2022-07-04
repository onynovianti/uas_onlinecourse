@extends('partials.main_back') 

@section('konten') 
@include('sweetalert::alert')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Tambah Course</h1>
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
								<a class="nav-link active" id="basic" data-toggle="pill" href="#tab_basic" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Basic</a>
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
						<form role="form" action="/course" method="POST" enctype="multipart/form-data">@csrf 
						<div class="tab-content" id="custom-content-below-tabContent">
							<div class="tab-pane fade show active" id="tab_basic" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
									<div class="form-group">
										<label for="exampleInputEmail1">Title</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title" value="{{ old('title') }}"> @error('title') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Short Description</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter short description" name="short_description" value="{{ old('short_description') }}"> @error('short_description') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label>Category</label>
										<select class="form-control select2bs4" name="category" style="width: 100%;"> @foreach($kategori as $k) <option value={{ $k->id }}>{{ $k->name }}</option> @endforeach </select>
										@error('category') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-group">
										<label>Description</label>
										<div class="card-body pad">
											<div class="mb-3">
												<textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
											</div>
										</div>
										@error('description') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<!-- /.card-body -->
									<div class="form-group">
										<label>Level</label>
										<select class="form-control select2bs4" style="width: 100%;" name="level">
											<option value="Beginner">Beginner</option>
											<option value="Intermediate">Intermediate</option>
											<option value="Advanced">Advanced</option>
										</select>
										@error('level') <code>
											{{ $message }}
										</code> @enderror
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="is_topcourse">
										<label class="form-check-label">Check if this course if top course</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="allow_enroll">
										<label class="form-check-label">Allow user to enroll</label>
									</div>
									<div class="btn-group float-right">
										<button class="nav-link btn btn-default" onclick="location.href='/course'" type="button">Cancel</button>
										<button class="nav-link float-right btn btn-primary btn_requirements" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Next</button>
									</div>
							</div>
							<div class="tab-pane fade" id="tab_requirements" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
								<input type="button" value="+ Add More Requirement" onClick="addRequirements();" class="mt-4 btn btn-outline-primary mb-4 float-right">
								<span id="req">
									<div class="input-group mb-3">
										<input type="text" class="form-control" name="requirements[]" placeholder="Enter requirements">
									</div>
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
								<input type="button" value="+ Add More Outcomes" onClick="addOutcomes();" class="mt-4 btn btn-outline-primary mb-4 float-right">
								<span method="POST" id="out">
									<div class="input-group mb-3">
										<input type="text" class="form-control" name="outcomes[]" placeholder="Enter outcomes">
									</div>
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
									<input class="form-check-input" type="checkbox" id="harga" name="is_free" onclick="cekRequreiments()" name="free_course">
									<label class="form-check-label">Check if this course is free course</label>
								</div>
								<div id="price">
									<div class="form-group ml-4 mt-2">
										<label>Course Price (Rp) </label>
										<div class="mb-5">
											<input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ old('price') }}">
										</div>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="diskon" onclick="cekDiscount()" name="discount">
										<label class="form-check-label">Check if this course has discount</label>
									</div>
									<div class="form-group ml-4 mt-2" id="discount" style="display: none;">
										<label>Discounted Price (Rp) </label>
										<div class="mb-3">
											<input type="text" class="form-control" id="exampleInputEmail" name="discount_price" value="{{ old('short_description') }}">
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
										<input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" accept="image/*">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										
									</div>
								</div>
								@error('gambar') <code>
									{{ $message }}
								</code> @enderror
								<div class="btn-group float-right mt-4">
									<button class="nav-link btn btn-default btn_pricing" data-toggle="pill" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Prev</button>
									<input class="float-right btn btn-primary" type="submit" value="Submit">
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