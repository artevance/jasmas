@extends('web.wrapper')

@section('content')
<guest-navbar-component></guest-navbar-component>
<div class="row px-5 mt-2">
    <div class="col">
        <h3>Jaring Aspirasi Masyarakat (Jasmas)</h3>
        <submission-form-component></submission-form-component>
    </div>
</div>
@endsection