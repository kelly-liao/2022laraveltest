<!DOCTYPE html>
<html lang='ch'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        @if(Session::has('message'))
            <p>{{Session::get('message')}} </p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <form action="{{route('test.store')}}" method="POST">@csrf
            <input type = "text" name="title" placeholder="enter the title of your product"
            value={{old('title')}} >
            @error('title')
                <p>{{$message}} </p>
            @enderror

            <textarea type = "textarea" name="discripiton" placeholder="enter the discripiton of your product"
            value={{old('discripiton')}} ></textarea>
            @error('discripiton')
                <p>{{$message}} </p>
            @enderror

            <button type="submit">SAVE</button>
        </form>
    </body>
</html>