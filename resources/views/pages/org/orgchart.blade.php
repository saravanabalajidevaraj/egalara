@extends('layouts.main') 
@section('title', 'overview')
@section('content')
       <section id="page-content" class="container-fluid">
  <div class="body-content animated fadeIn">
    <div class="row">
     
      <div class="col-md-12">
        <div class="panel rounded shadow no-overflow">
          <span><img src="{{url('img/organizationChart.jpg')}}"></span>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>

    @push('script')
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('js/chart-flot.js')}}"></script>
    @endpush
@endsection
