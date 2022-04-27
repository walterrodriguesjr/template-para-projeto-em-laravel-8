@extends('layouts.template.template')

@section('content')
    
<h1 id="cor">teste template</h1>
<button class="btn btn-primary">Bootstrap OK</button>

@endsection

@section('scripts')
    
<script>
    $(document).ready(function () {
        alert("Jquery OK");
    });
</script>

@endsection
