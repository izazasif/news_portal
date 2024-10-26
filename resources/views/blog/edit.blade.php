@extends('auth.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    @foreach ($errors->all() as $error)
                        <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> &nbsp;{{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12 col-lg-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Blog Info Edit </h3>
                        </div>
                        <form role="form" method="post" action="{{ route('blog.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Titile</label>
                                    <input type="text" name="title" value="{{ $data->title }}" class="form-control"
                                        id="exampleInputEmail1" placeholder="Account Name" required>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1" class="required">Mete Title</label>
                                        <input type="text" name="meta_title" value="{{ $data->meta_title }}" class="form-control" id="exampleInputEmail1"
                                             required>
                                        @if ($errors->has('meta_title'))
                                            <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                        @endif
                                </div>
                                <div class="form-group">
                                            <label for="keyword-input">Enter Meta Keywords (comma separated)</label>
                                            <input type="text" id="keyword-input" name="meta_keywords" value="{{ $data->meta_keywords }}"  class="form-control">
                                        @if ($errors->has('meta_keywords'))
                                            <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                                        @endif
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1"> Meta Description </label>
                                        <textarea class="form-control" rows="3"  name="meta_description">{{ $data->meta_description }}</textarea>
                                </div>  
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Blog Description </label>
                                    <textarea id="example"  rows="10" name="content" cols="80">{{$data->content}}
                                    </textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                         <label for="exampleInputEmail1">BLog Image</label>
                                         <img id="blah" src="{{ asset('website/' . $data->main_image) }}" alt="element 05" style="height:100px;width:100px">
                                         <br>
                                         <br>
                                         <span><input accept="image/*" name="image" type='file' id="imgInp" /></span>
                                    @if ($errors->has('main_image'))
                                        <span class="text-danger">{{ $errors->first('main_image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" onclick="submitForm(this);"><i
                                        class="fa fa-save"></i> Update </button>
                            </div>
                            {{ method_field('PATCH') }}
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
     

            imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
            }



        function submitForm(btn) {
            // disable the button
            btn.disabled = true;
            // submit the form    
            btn.form.submit();
        }
        var editor = new FroalaEditor('#example', {
                useClasses: false,
                imageUploadURL: '{{ route('froala.upload2') }}',
            imageUploadParams: {
                // You can pass additional parameters here if needed
                _token: '{{ csrf_token() }}'
            }
    });
    </script>
@endsection
