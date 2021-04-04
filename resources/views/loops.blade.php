<h1>loops</h1>

{{10*10}}
<br>
{{10/10}}

<br>

@if($names=="prabat")
<h2> hii, {{$names}} </h2>
@elseif($names=="prabhat")
<h2>hii , {{$names}} </h2>
@else()
<h2>nooooooooooo</h2>
@endif


<br>


@for($i=1; $i<=10; $i++)
{{$i}}
@endfor

<br>


@foreach($names as $prabhat)
<h4>{{$prabhat}}</h4>
@endforeach

<br>

<h1>hii</h1>
@include('prabhat')


<h1>prabhat learning git</h1>

<h1>prabhat learning git</h1>
<h1>prabhat learning git</h1>