@extends('layouts.main') 
@section('title', 'Grading Status')
@section('content')
    <section id="page-content" class="container-fluid">
        <div class="row">
    <div class="body-content animated fadeIn col-md-12">
       <div style="text-align:center">
<h4>Granding Status</h4>
<iframe src="{{url('pdf/Grading/grad.pdf')}}" frameborder="0" height="500px" width="100%"></iframe>
  </div>
    </div>
</div>
</section>

 
@endsection
