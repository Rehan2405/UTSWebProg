@extends ('template')


@section('content','home')

@section('body')
<style>
  .book{
    margin-left: 380px;
    margin-right:340px;
  }
  h3.tite{
    background-color: grey;
    color: white;
  }
  .row{
    align-items: center;

  }
</style>
<br>
<div class="book">
<h3 class="tite"> &nbsp;Book List</h3>
<div class="card-group">
<div class="card">
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRfbDkgpmZTBVY-BTgjlNDbTQ4hvdpE3s8Dxoe9L7xuLceHxEH1" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">The Coven</h5>
      <p class="card-text">By <br> Lizzie Fry</p>
      <a href="/home" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/48/f3/4e/48f34e168b1003964bb753520dbd4458.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">The Raven Prince</h5>
      <p class="card-text">By <br> Noir</p>
      <a href="/home" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/88/02/c1/8802c1136de95d161676502a1bd40ede.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Black Hearts</h5>
      <p class="card-text">By <br> Jenna Wood</p>
      <a href="/home" class="btn btn-primary">Detail</a>
    </div>
  </div>
</div>
</div>
@endsection


