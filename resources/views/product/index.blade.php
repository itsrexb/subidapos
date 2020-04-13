@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products <a href="/product/new" class="float-right">Add New Product</a></div>

                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:80px"></th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a href="/product/edit/{{ $product->id }}"><i class="material-icons">create</i></a>
                                    <a href="/product/delete/{{ $product->id }}" onclick="if(!confirm('Are you sure to delete this record?')){return false;}"><i class="material-icons">remove_circle_outline</i></a>
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
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
