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
<h3 class="tite">Book List</h3>
<div class="card-group">
  <div class="card">
    <img src="https://i.pinimg.com/564x/38/c0/a3/38c0a3e5bd58df3587d27702f5e719d6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/publisher" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/ef/f8/75/eff87521405eeeedca0891eb6838f89c.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/publisher" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/f3/b8/7c/f3b87c5b91392c2fa12d81246df90c79.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/publisher" class="btn btn-primary">Detail</a>
    </div>
  </div>
   
</div>
</div>
@endsection


