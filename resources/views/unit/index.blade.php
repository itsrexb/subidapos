@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Units <a href="/unit/new" class="float-right">ADD NEW UNIT</a></div>

                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:80px"></th>
                                <th>Unit Name</th>
                                <th>Abbr</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                    <td>
                                        <a href="/unit/edit/{{ $unit->id }}"><i class="material-icons">create</i></a>
                                        <a href="/unit/delete/{{ $unit->id }}"  onclick="if(!confirm('Are you sure to delete this record?')){return false;}"><i class="material-icons">remove_circle_outline</i></a>
                                    </td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->short_name}}</td>
                                    <td>{{$unit->description}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
