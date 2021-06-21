@extends('layouts.main') 
@section('title', 'ClientAppreciationLetters')
@section('content')
    <section id="page-content" class="container-fluid">
    <div class="body-content animated fadeIn">
       <div style="text-align:center">
<h4>Client Appreciation Letters</h4>
<iframe src="{{url('pdf/ClientAppreciationLetters/cliappletter.pdf')}}" frameborder="0" height="500px" width="100%"></iframe>
  </div>
    </div>
</section>


@endsection
