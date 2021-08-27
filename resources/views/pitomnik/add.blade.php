@extends('layouts.layout1')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Pitomnik</a></li>
            <li class="breadcrumb-item">Add animal</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 text-right" style="padding-bottom: 25px;">
            <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}" class="btn btn-success">List of animals</a>
            <a href="{{ route('give_animal') }}" class="btn btn-success">Give animal</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">Add animal</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('add_animal_post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="idTitle">Nik</label>
                    <input type="text" name="nik" value="{{ old('nik') }}" class="form-control" id="idNik" />

                    <?php if ($errors->has('nik')): ?>
                        <div class="invalid-title" role="alert" style="font-size:12px; color:#d64028;"><?=$errors->first('nik')?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="idType">Type</label>
                    <select name="type" class="form-control" id="idType" >
                        <option value="">-- Select type of animal --</option>
                        <option value="dog" {{ 'dog' == old('type') ? 'selected="selected"' : '' }} >dog</option>
                        <option value="cat" {{ 'cat' == old('type') ? 'selected="selected"' : '' }} >cat</option>
                        <option value="tortoise" {{ 'tortoise' == old('type') ? 'selected="selected"' : '' }} >tortoise</option>
                    </select>

                    <?php if ($errors->has('type')): ?>
                        <div class="invalid-type" role="alert" style="font-size:12px; color:#d64028;"><?=$errors->first('type')?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="idYears">Years</label>
                    <input type="text" name="years" value="{{ old('years') }}" class="form-control" id="idYears" />

                    <?php if ($errors->has('years')): ?>
                        <div class="invalid-description" role="alert" style="font-size:12px; color:#d64028;"><?=$errors->first('years')?></div>
                    <?php endif; ?>
                </div>

                <a href="{{ route('/') }}" class="btn btn-success" style="margin-right: 20px;" >Cancel</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add animal</button>
            </form>
        </div>
    </div>

@endsection
