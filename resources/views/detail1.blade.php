@extends ('template')


@section('content','detail1')

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
<h3 class="tite">Giant Book</h3>

</div>
<div class="book">
            <div class="book1">
                @foreach ($BookDetail as $Books)
                <img src={{$Books->image_books}} class="card-img-top" alt="...">
                <div class="bookinfo">
                    <p>Title : {{$Books->title}}</p>
                    <p>Author : {{$Books->author}}</p>
                    <p>Year : {{$Books->year}}</p>
                    <p>Sypnosis :</p>
                    <p>{{$Books->synopsis}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="/home" class="btn btn-primary">Buy Now</a>
                </div>
                @endforeach
            </div>
        </div>
@endsection