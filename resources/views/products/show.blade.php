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
                <h2> 𝙰𝚅𝙰𝙸𝙻𝙰𝙱𝙻𝙴 𝙿𝚁𝙾𝙳𝚄𝙲𝚃𝚂</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}">𝚋𝚊𝚌𝚔</a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>𝙱𝚛𝚊𝚗𝚍 𝙽𝚊𝚖𝚎:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>𝙿𝚛𝚘𝚍𝚞𝚌𝚝 𝚃𝚢𝚙𝚎:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>
    
    @endsection
    </body>
    </html>