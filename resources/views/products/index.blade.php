@extends('products.layout')

@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2>𝚂𝚒𝚖𝚙𝚕𝚎 𝙲𝚁𝚄𝙳 𝚟𝚒𝚊 𝙻𝚊𝚛𝚊𝚟𝚎𝚕 𝙵𝚛𝚊𝚖𝚎𝚠𝚘𝚛𝚔</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">𝚌𝚛𝚎𝚊𝚝𝚎</a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>𝙽𝚘</th>
            <th>𝙱𝚛𝚊𝚗𝚍 𝙽𝚊𝚖𝚎</th>
            <th>𝙿𝚛𝚘𝚍𝚞𝚌𝚝 𝚃𝚢𝚙𝚎</th>
            <th width="280px">𝙰𝚌𝚝𝚒𝚘𝚗</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">𝚂𝚑𝚘𝚠</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">𝙴𝚍𝚒𝚝</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">𝙳𝚎𝚕𝚎𝚝𝚎</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection