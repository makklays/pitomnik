@extends('layouts.layout1')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home" aria-hidden="true"></i> Pitomnik</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">Welcome</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div style="font-size: 21px; padding: 40px 0 40px 0;">
                In this virtual pitomnik you can add animal, see on the list of animals or give animal.
            </div>

            <div class="row" style="font-size: 40px; padding-bottom: 21px;">
                <div class="col-md-4">
                    {{ $cats }} <br/> cats
                </div>
                <div class="col-md-4">
                    {{ $dogs }} <br/> dogs
                </div>
                <div class="col-md-4">
                    {{ $tortoises }} <br/> tortoises
                </div>
            </div>

            <br/><br/>

            <a href="{{ route('add_animal') }}" class="btn btn-success" title="Add animal" >Add animal</a>
            <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}" class="btn btn-success" title="List of animals" >List of animals</a>
            <a href="{{ route('give_animal') }}" class="btn btn-success" title="Give animal" >Give animal</a>
        </div>
    </div>

@endsection
