@extends('layouts.mainlayout')
@section('content')

<main role="main">
 <div class="album py-5 bg-light">
        <div class="container">
           <div class="row">
           	@if (count($bposts) > 0)
	           	@foreach ($bposts as $bpost)
	           		<div class="col-md-4">
		              <div  class="card mb-4 box-shadow">
		                <img id="{{ $bpost->id }}" class="card-img-top" src="{{ $bpost->img_url }}" alt="Card image cap">
		                <div class="card-body">
		                  <p class="card-text">{{ $bpost->text }}</p>
		                  <div class="d-flex justify-content-between align-items-center">
		                    <div class="btn-group">
		                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="renderItem('{{ $bpost->id }}')">Search</button> 
		                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="updateItem('{{ $bpost->id }}')">Insert</button>
		                      
		                    </div>
		                    <small class="text-muted">9 mins</small>
		                  </div>
		                </div>
		              </div>
		            </div>
	            @endforeach
            @endif
            
          </div>
        </div>
      </div>
      </main>
   <div class="album text-muted">
     <div class="container">
       <div class="row">
         <h1>This is a demo text</h1>
  <p>---</p>
</div>
     </div>
   </div>
@endsection
<b></b>