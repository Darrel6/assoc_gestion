@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Details
@endsection
@section('title')
  Details sur la Structures
@endsection
<style>
  
  body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 0 0 50px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

</style>
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-10 p-0 m-0">
                <div class="about-text go-to">
                  @foreach ($structure_membres as $structure)
                    
                 
                    <h3 class="dark-color">{{ $structure->structure->nom }}</h3>
                    <h6 class="theme-color lead">
                       <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Dirigeant</label>
                                <p></p>
                            </div>
                            <div class="media">
                                <label>Representant</label>
                                <p></p>
                            </div>
                            <div class="media">
                                <label>Email</label>
                                <p></p>
                            </div>
                            <div class="media">
                                <label>Téléphone</label>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>info@domain.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>820-885-3321</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">{{ $structure_membres->count() }}</h6>
                        <p class="m-0px font-w-600">Membres</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Activités Conjointes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="card mb-5" style="border-radius: 10px">
  <div class="card-body" >
      <table class="table table-striped text-center" >
          <thead >
              <tr>
                  <th>#</th>
                  <th>Nom et Prenom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Fonction</th>
                  <th>Actions</th>
                  
              </tr>
          </thead>
          <tbody>
              <tr>
                  @foreach ($structure_membres as $structure)
                  <td>{{ ++$i }}</td>
                  <td> {{ $structure->nom }} </td>
                  <td>{{ $structure->email}}</td>
                  <td>{{ $structure->telephone }}</td>
                  <td>{{ $structure->fonction }}</td>
                  <td class="d-flex justify-content-around">
                      <a href="" class="btn btn-sm btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $structure->id }}" ><i class="icon-pencil menu-icon"></i></a>
                      <a  href="" class="btn btn-sm btn-danger "  data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{ $structure->id }}" ><i class="icon-trash menu-icon"></i></a>
                  </td>
              </tr>
              
             @endforeach
                  

          </tbody>
      </table>
      
      <div class=" d-flex justify-content-end pt-4">
          <h5>{{ $structure_membres-> links() }}</h5>
      </div>
  </div>
</div>
@endsection
