@if(!empty($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
            <p>smth</p>
        </div>
    @endforeach
@endif


@if(session('success')) {{--writing to session variable success--}}
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
        {{dump(session('error'))}}
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif