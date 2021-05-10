@extends('products.layout')

@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>𝙿𝚛𝚘𝚍𝚞𝚌𝚝 𝙲𝚑𝚊𝚗𝚐𝚎𝚜</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">𝙱𝚊𝚌𝚔</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>𝚆𝚑𝚘𝚘𝚙𝚜!</strong> 𝚃𝚑𝚎𝚛𝚎 𝚠𝚎𝚛𝚎 𝚜𝚘𝚖𝚎 𝚙𝚛𝚘𝚋𝚕𝚎𝚖𝚜 𝚠𝚒𝚝𝚑 𝚢𝚘𝚞𝚛 𝚒𝚗𝚙𝚞𝚝.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>𝙱𝚛𝚊𝚗𝚍 𝙽𝚊𝚖𝚎</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>𝙿𝚛𝚘𝚍𝚞𝚌𝚝 𝚃𝚢𝚙𝚎</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">𝙲𝚑𝚊𝚗𝚐𝚎</button>
            </div>
        </div>

    </form>
@endsection