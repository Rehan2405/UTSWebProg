@extends ('template')

@section('content', 'about')

@section ('body')
<style>
    .contain{
        background-color: gray;
        color: white;
    }
    .Pub{
        margin-left: 420px;
        margin-right:430px;
    }

</style> 


<div class="Pub">
    <div class="contain">
        <br>
        <h3> &nbsp;Noir Books</h3>
    <h5> &nbsp; &nbsp;Address - Palmerah, Jakarta - Indonesia</h5>
    <h5> &nbsp; &nbsp;Phone - 08281939283</h5>
    <h5> &nbsp; &nbsp;Email - Noir.books@publish.com</h5>
    <br>
    </div>
    <div class="card-group">
  <div class="card">
    <img src="https://i.pinimg.com/564x/38/c0/a3/38c0a3e5bd58df3587d27702f5e719d6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/detail1" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/ef/f8/75/eff87521405eeeedca0891eb6838f89c.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/detail2" class="btn btn-primary">Detail</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/564x/f3/b8/7c/f3b87c5b91392c2fa12d81246df90c79.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Game of Thrones</h5>
      <p class="card-text">By <br> George R. R. Martin</p>
      <a href="/detail3" class="btn btn-primary">Detail</a>
    </div>
  </div>
   <div class="card">
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRfbDkgpmZTBVY-BTgjlNDbTQ4hvdpE3s8Dxoe9L7xuLceHxEH1" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">The Coven</h5>
      <p class="card-text"><br>By <br> Lizzie Fry</p>
      <br>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>


@endsection