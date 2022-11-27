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
  .booklist{
            background-color: grey;
        }

        .book1{
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 20px;
        }
        .book1 img{
            height: 430px;
        }
</style>
<br>
<body>
    <div class="book">
        <h3 class="tite"> &nbsp;Book List</h3>
    </div>

    <div class="book">
        <div class="card-group">
            @foreach ($Book as $Books)
            <div class="card">
              <img src={{$Books->image_books}} class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text1">{{$Books->title}}</p>
                  <p class="card-text2">By</p>
                  <p class="card-text3">{{$Books->author}}</p>
                  <a class="btn btn-primary" href="/detail/{{$Books->id}}" role="button">Detail</a>
                  {{-- <a href="/detail/{{$Books->id}}">Detail</a> --}}

              </div>
            </div>

            @endforeach
        </div>
    </div>
</body>
@endsection


