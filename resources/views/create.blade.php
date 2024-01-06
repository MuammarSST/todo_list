@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Catatan</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Nama Catatan</label>
                                <textarea type="text" name="name" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
								<a href="{{ url('/') }}" class="btn btn-danger">Batalkan</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection