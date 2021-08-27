@extends('layouts.layout1')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Pitomnik</a></li>
            <li class="breadcrumb-item">Give animal</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 text-right" style="padding-bottom: 25px;">
            <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}" class="btn btn-success">List of animals</a>
            <a href="{{ route('add_animal') }}" class="btn btn-success">Add animal</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">Give animal</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('give_animal_post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="idType">Type</label>
                    <select name="type" class="form-control" id="idType" >
                        <option value="">-- Select type of animal --</option>
                        <option value="dog" {{ 'dog' == old('type') ? 'selected="selected"' : '' }} >dog</option>
                        <option value="cat" {{ 'cat' == old('type') ? 'selected="selected"' : '' }} >cat</option>
                        <option value="tortoise" {{ 'tortoise' == old('type') ? 'selected="selected"' : '' }} >tortoise</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-success" value="Give" />
            </form>
        </div>
    </div>

@endsection
