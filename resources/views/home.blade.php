

@extends("layouts.defult")


@section("header")
<h2>this is the header </h2>

@endsection



@section('maincontent')
<h1>Home</h1>

<form action="{{ route('formsubmited') }}" method="post">

  @csrf
  <label for="full_name">Name</label>
  <input type="text" name="full_name" placeholder="Enter full name" required id="full_name">
  <br>
  <br>
  <label for="email">Emial</label>
  <input type="email" name="email" placeholder="Your email please" required id="email">
  <br>
  <br>
  <input type="submit" name="submit" value="send">

</form>
@endsection


@section("footer")
<h2>This is the footer</h2>
@endsection