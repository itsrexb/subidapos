@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Suppliers <a href="/supplier/new" class="float-right">Add New Supplier</a></div>

                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:80px"></th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($suppliers as $supplier)
                            <tr>
                                <td>
                                    <a href="/supplier/edit/{{ $supplier->id }}"><i class="material-icons">create</i></a>
                                    <a href="/supplier/delete/{{ $supplier->id }}" onclick="if(!confirm('Are you sure to delete this record?')){return false;}"><i class="material-icons">remove_circle_outline</i></a>
                                </td>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->phone}}</td>
                                <td>{{$supplier->email ?? ''}}</td>
                                <td>{{$supplier->address ?? ''}}</td>
                                <td>{{$supplier->notes ?? ''}}</td>
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
