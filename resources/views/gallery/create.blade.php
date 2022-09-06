@extends('layout.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content pt-5">
            <div class="container">
                <div class="card mt-3">
                    <div class="card-header">
                        <h2><strong>Add Gallery Image</strong></h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('galleries.store') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <div class="col"><label for="">Image</label></div>
                                        <div class="row" id="coba">
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="text-danger error validation-error d-block mb-2 invalid-feedback"
                                            role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success mt-3" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/picker.js') }}"></script>
    <script>
        $(document).ready(function() {

            $("#coba").spartanMultiImagePicker({
                fieldName: 'image',
                rowHeight: '150px',
                groupClassName: 'col',
                maxCount: '1',
            });


        });
    </script>
@endsection
