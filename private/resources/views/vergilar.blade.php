burase vergilar view se

@if(Session::has('is'))
   <h2 style="color: rgb(89, 175, 227)">  {{ Session::get('is') }}</h2>
@endif
<br>
<br>
@foreach ($data as $tak)
    @if($tak->stat2 == 0)
    <span>name : {{ $tak->id }} </span><br>
    <span>name : {{ $tak->name }} </span><br>
    <span>price : {{ $tak->price }} </span><br>
    <span>confirm1 : {{ $tak->confirm1 }} </span><br>
    <span>confirm2 : {{ $tak->confirm2 }} </span><br>
    <span>stat1 : {{ $tak->stat1 }} </span><br>
    <span>stat2 : {{ $tak->stat2 }} </span><br>
    <span>created : {{ $tak->created }}</span><br>

    <div>
    @if ( $tak->stat1 == 1)
        <div><p><kbd>status : onaylanip</kbd></p></div>
        @elseif ($tak->stat1 == 0)
            <a href="
            {{ route('onaylamak', ['key' => $tak->id]) }}
            ">
                <button> onayla </button></a>
            <a href="
            {{ route('sil', ['key' => $tak->id]) }}
            ">
                <button> sil </button></a>
    @endif

    <br><br>
        @endif
@endforeach
<br><br>
