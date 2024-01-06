@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Catatan</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/' . $todo->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Nama Catatan</label>
                                <textarea type="text" name="name" class="form-control">{{ $todo->name }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Progres</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name="is_done"> Selesai
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="is_done"> Belum Selesai
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Perbaharui</button>
                                <a href="{{ url('/') }}" class="btn btn-danger">Batalkan</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection