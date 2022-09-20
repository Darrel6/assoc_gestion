@extends('partials.template')

@section('content')
@section('page')
    fedSAEI - Activité
@endsection
@section('title')
Les visuels de l'évenement
@endsection

<div id="gallery-lightbox" class="row" >
    <div class="col p-0  imag">
        @foreach ($activity_info as $activite)
        @foreach ($activite['visuel'] as $visuel)
            @if (pathinfo($visuel, PATHINFO_EXTENSION) == 'png' || pathinfo($visuel, PATHINFO_EXTENSION) == 'jpg' || pathinfo($visuel, PATHINFO_EXTENSION) == 'jpeg')
                 <img src="{{ $visuel }}" alt="..." class="thumbnail"> 

            @endif
            @if (pathinfo($visuel, PATHINFO_EXTENSION) == 'mp4')

                        <video controls class="modal-content thumbnail">
                            <source src="{{ $visuel }}"
                            type="video/mp4">
                            <source src="{{ $visuel }}"
                            type="video/mp4">
                        </video>
                </div>
            @endif
        @endforeach     
        @endforeach    
     </div>
    
  </div>
  
  
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close m-0 p-3 text-white position-absolute right-0" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    <div class="modal-dialog " role="document">
      <div class="modal-content bg-transparent">
        <div class="modal-body p-0">
          <div>
            
            @foreach ($activity_info as $activite)
                @foreach ($activite['visuel'] as $visuel)
                <div class="">
                    @if (pathinfo($visuel, PATHINFO_EXTENSION) == 'png' || pathinfo($visuel, PATHINFO_EXTENSION) == 'jpg' || pathinfo($visuel, PATHINFO_EXTENSION) == 'jpeg' )
                        <div class="col">
                            <a href="#" class="thumbnail">
                                <img src="{{ $visuel }}" alt="...">
                            </a>
                        </div>
                    @endif
                </div>
                @endforeach     
                @endforeach  
              
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
@endsection
<style>
.modal button.close {
  right: 0;
  outline: 0;
}
  
#gallery-lightbox img {
    width: 500px;
  height: 350px;
  object-fit: fill;
  cursor: pointer;
}
#gallery-lightbox video {
   width: 500px;
  height: 350px;
  object-fit: fill;
  cursor: pointer;
}

#gallery-lightbox img:hover {
  opacity: 0.9;
  transition: 0.5s ease-out;
}
#gallery-lightbox video:hover {
  opacity: 0.9;
  transition: 0.5s ease-out;
}
.imag{
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10px
}
.thumbnail {
  background-color: #f9bc0760;
  border-radius:10px;
  padding: 10px;
}
video.thumbnail {
  background-color: #f9bc0760;
  border-radius:10px;
  padding: 10px;
}
</style>
