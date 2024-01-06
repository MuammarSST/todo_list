@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('create') }}" class="btn btn-primary">Tambah Catatan</a>
        <br>
        <br>
            <div class="panel panel-default">
           
                <div class="panel-heading">Catatan Belum Selesai</div>
                <div class="panel-body">


                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama Catatan</th>
                                <th>Progres</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos_0))
                                <tr>
                                    <td colspan="3">Tidak ada catatan</td>
                                </tr>
                            @endif
                            @foreach($todos_0 as $todo)
                                <tr>
                                    <td>{{ $todo->name }}</td>
                                    <td>{{ $todo->is_done ? 'Selesai' : 'Belum Selesai' }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('/'.$todo->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('/'.$todo->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
           
                <div class="panel-heading">Catatan Telah Selesai</div>
                <div class="panel-body">


                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama Catatan</th>
                                <th>Progres</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos_1))
                                <tr>
                                    <td colspan="3">Tidak Ada Catatan</td>
                                </tr>
                            @endif
                            @foreach($todos_1 as $todo)
                                <tr>
                                    <td><s>{{ $todo->name }}</s></td>
                                    <td>{{ $todo->is_done ? 'Selesai' : 'Belum Selesai' }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('/'.$todo->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('/'.$todo->id.'/delete') }}">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection