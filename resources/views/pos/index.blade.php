@extends('layouts.pos')

@section('content')

<script type="x-template" id="routing">
    <nav class="navbar navbar-toggleable-md navbar-light bg-success navbar-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Vue (ab)use router</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" v-for="route in routes">
                    <router-link :to="route" class="nav-link" active-class="active">
                        {{ route.title }}
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
</script>

@endsection