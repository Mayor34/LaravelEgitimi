<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
    @php
    $yas=17;
    @endphp
        Merhaba {{$isim." ".$soyisim." ".$yas}} yaşındasın.
    <hr>
    @for($i=0; $i<10; $i++)
        Döngü değeri: {{$i}} <br>
    @endfor
    <hr>
    @php
        $i=0;
    @endphp
    @while($i<10)
        Döngü değeri: {{$i}} <br>
        @php
        $i++
        @endphp
    @endwhile
    <hr>
    @foreach($isimler as $isim)
        {{ $isim . ($isim !== end($isimler) ? "," : "")}}
    @endforeach
    <hr>
    @php
        $html="<b>Örnek</b>";
    @endphp

    {{$html}}

    </body>
</html>
