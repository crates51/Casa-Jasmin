<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


@extends('layouts.app')

@section('content_outOfContainer_1')
        @include('inc.carousel')
        {{-- @include('inc.rooms_animatedDesc') --}}
        <div id="app">
		  <div class="row col-condensed">
		        <Thumbnail title="CamerĂ Standard" 
		                   description="Oferind vedere atât la plajă, cât și la tabără, Camera Standard este perfectă pentru o vacanță la mare, atât cu familia cât și cu prietenii.Datorită deschiderii la tabără, atmosfera liniștită și aerul de mare vă vor crea o ambianţă de vacanță de neuitat.Aceasta vine, standard, inclusă cu 1 pat dublu mare sau 2 de o persoană, urmând, la nevoie, să fie adăugate paturi suplimentare."
		                   v-bind:price="200"
		                   v-bind:show-terrace="false"
		                   v-bind:id="1">

		        </Thumbnail>
		        <Thumbnail title="Camera Jasmin" 
		                   description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure consequuntur quae incidunt facere recusandae. Commodi laborum, voluptas minus eveniet. Illum delectus necessitatibus eum aliquid, error sit quae harum explicabo.Error, omnis, sequi. Itaque sit et eaque iure saepe modi eos iusto possimus culpa quaerat."
		                   v-bind:price="400"
		                   v-bind:show-terrace="true"
		                   v-bind:id="2">               
		        </Thumbnail>
		  </div>
		</div>
@endsection

@section('content')
<div class="row">

	<div class="col-md-6">
		<div class="icon-box">
			<i class="fa fa-bell-o"></i>
			<div class="text">
				<h3>Room Services</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore saepe magni deserunt, laudantium tempore quam nesciunt, distinctio aperiam praesentium error consequatur, et mollitia quia, labore facere voluptates eos a assumenda.
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="icon-box">
			<i class="fa fa-coffee"></i>
			<div class="text">
				<h3>Cafea Gratuită</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione vel deleniti commodi ipsum nobis sed ipsa, molestiae consequatur perferendis dignissimos consequuntur pariatur, officia delectus cupiditate ex aliquid, possimus vero! Dicta.
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="icon-box">
			<i class="fa fa-car"></i>
			<div class="text">
				<h3>Parcare Gratuită</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi pariatur ab saepe maxime dolore ipsam quis, fuga tenetur beatae quas nemo illum deleniti culpa voluptas molestiae cum placeat doloribus ullam!
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="icon-box">
			<i class="fa fa-dropbox"></i>
			<div class="text">
				<h3>Cutie de depozitare</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fugiat voluptas, porro nostrum, recusandae quod, necessitatibus officia explicabo nisi ab ratione quisquam odio omnis tenetur amet! Sit ipsam vel id.
			</div>
		</div>
	</div>


</div>
		{{-- <div class="jumbotron text-center">
	        	<h1>{{$title}}</h1>
	        	<p>Aceasta este pagina principala</p>
	        	@guest
		        	<p>
		        	   <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
		        	   <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
		        	</p>
	        	@endguest
      </div> --}}
@endsection


@section('content_outOfContainer_2')

{{-- <section class="dark side-bg">
	<div class="col-md-6 col-md-offset-6 pull-right image-container">
		<div class="background-image"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="inner-padding"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section> --}}


{{-- <section class="call-to-action text-center">
	<a href="#" class="btn-big-border">Faceți rezervare</a>
</section> --}}

@endsection

