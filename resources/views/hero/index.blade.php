@extends('layouts/app')

@section('content')

<h1>The hero roster</h1>

<?=foreach ($heros as $hero) {
  echo $hero->name;
?>

@endsection