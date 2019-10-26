@extends('templates.templateMain')

@section('content')
<section id="wrap">
	<section id="content">
		<section class="text-content">
			<form method="POST" action="{{ route('quest.store') }}" name="quest">
				{{ csrf_field() }}
				<input type="hidden" name="opt" value="yes">
				<label class="field a-field a-field_a1">
					<input class="field__input a-field__input" id="name" name="name" placeholder="Você era Srta (o) o que?" required maxlength="100">
					<span class="a-field__label-wrap">
						<span class="a-field__label">Seu Nome</span>
					</span>
				</label>

				<h1 class="home">Responda as perguntas</h1>
				<br>

				<label>
					<strong><span class="highlight">1.</span> Qual música do álbum Three Cheers for Sweet Revenge foi responsável pelo sucesso mundial da banda My Chemical Romance em 2005?</strong>
				</label>

				<div class="vote">
					<label class="container">I'm Not Okay
						<input type="radio" name="q1" value="Okay" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">Helena
						<input type="radio" name="q1" value="Helena" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">The Ghost Of You
						<input type="radio" name="q1" value="Ghost" required>
						<span class="checkmark"></span>
					</label>
				</div>
				
				<hr>

				<label>
					<strong><span class="highlight">2.</span> Que cantora POP dividiu os vocais com Gerard Way na faixa Mama do álbum The Black Parade?</strong>
				</label>

				<div class="vote">
					<label class="container">Cyndi Lauper
						<input type="radio" name="q2" value="Cyndi" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">Tina Turner
						<input type="radio" name="q2" value="Tina" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">Liza Minelli
						<input type="radio" name="q2" value="Liza" required>
						<span class="checkmark"></span>
					</label>
				</div>

				<hr>

				<label>
					<strong><span class="highlight">3.</span> Qual série da Netflix foi roterizada a partir de um quadrinho escrito por Gerard Way, vocalista do My Chemical Romance??</strong>
				</label>

				<div class="vote">
					<label class="container">Umbrella Academy
						<input type="radio" name="q3" value="Umbrella" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">Deadly Class
						<input type="radio" name="q3" value="Deadly" required>
						<span class="checkmark"></span>
					</label>
					<label class="container">Boys
						<input type="radio" name="q3" value="Boys" required>
						<span class="checkmark"></span>
					</label>
				</div>
		
				<button class="btn bred" type="submit">Enviar e confirmar</button>
			</form>
			<center>
				<button onclick='return validateForm()' class="emo-jump">Não sou emo, mas quero ir</button>
			</center>
		</section>	
	</section>	
</section>
@endsection

@push('scripts')
<script>
function validateForm() {
  var x = document.forms["quest"]["name"].validity.valueMissing;
  if (x) {
    alert("Preencha seu nome");
    return false;
  }
  document.forms["quest"]["opt"].value = 'NO';
  document.forms["quest"].submit()
}
</script>
@endpush