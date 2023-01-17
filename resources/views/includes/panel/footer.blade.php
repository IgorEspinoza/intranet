@extends('layouts.panel')

@section('content1')

<footer class="footer">
    <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{config'app.name'}}</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="#" target="_blank"></a>¿ayuda?</span>
        </div>
    </div>
</footer>

@endsection