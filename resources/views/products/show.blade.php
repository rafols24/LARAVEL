@extends('products.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>crud_laravel</title>
    </head>
    <body>
    <br><br>
        <div class="row">
            <div class="col-lg-10 margin-tb">
                <div class="pull-center">
                <h2> π°ππ°πΈπ»π°π±π»π΄ πΏππΎπ³ππ²ππ</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}">ππππ</a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>π±ππππ π½πππ:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>πΏππππππ ππ’ππ:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>
    
    @endsection
    </body>
    </html>