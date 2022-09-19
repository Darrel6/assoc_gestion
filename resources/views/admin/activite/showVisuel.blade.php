<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
                                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($activite['visuel'] as $visuel)
                                            <div class="carousel-item active">
                                                @if (pathinfo($visuel, PATHINFO_EXTENSION) == 'jpg'  )
                                                     <img class="d-block w-100" src="{{ $visuel }}"> 
                                                @endif
                                                @if (pathinfo($visuel, PATHINFO_EXTENSION) == 'mp4'  )
                                                     <video src="{{ $visuel }}"></video>
                                                @endif
                                                
                                                @endforeach
                                            </div>
                                            
                                        </div>
                                        <h1></h1>
                                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
