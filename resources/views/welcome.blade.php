@extends('templates.templateMain')

@section('content')
<section id="wrap">
	<section id="content">
		<section class="text-content">
			<h1 class="home">The 28<sup>th</sup> <br>Black Parade is Dead</h1>
			
			<p>Chegou a data mais importante do ano, aquela que fica entre o halloween e o dia dos mortos, mas conhecido como: <strong class="highlight">meu aniversário.</strong> </p>

			<p>Para esse ano decidi embarcar na nostalgia e trazer o melhor do universo emo (a.k.a My Chemical Romance) para uma noite regada a pimenta e tequila. </p>

			<p>A festa vai rolar no dia <strong class="highlight">02/11/2019 às 18h</strong> e você é meu convidado. Clique abaixo na sua opção e siga as instruções.</p>

			<p>Well, are you ready, Ray? </p>
		
			<button class="bred" onclick="location.href='{{ url('/quest') }}'">Confirmar Presença</button>
			<button class="bgray" onclick="location.href='{{ route('out') }}'">Não Posso Comparecer</button>	
		</section>	
	</section>	
</section>
@endsection