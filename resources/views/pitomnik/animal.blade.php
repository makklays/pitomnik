@extends('layouts.layout1')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Pitomnik</a></li>
            <li class="breadcrumb-item"><a href="{{ route('give_animal') }}">Gave animal</a></li>
            <li class="breadcrumb-item" aria-current="page">Gave animal</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 text-right" style="padding-bottom: 25px;">
            <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}" class="btn btn-success">List of animals</a>
            <a href="{{ route('add_animal') }}" class="btn btn-success">Add animal</a>
            <a href="{{ route('give_animal') }}" class="btn btn-success">Give animal</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">Gave animal</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">

        </div>
    </div>

    <?php if (!empty($animal)): ?>
    <div class="row">
        <div class="col-md-12">

            <?php if (!empty($type)): ?>
                <div>
                    We gave the animal of type {{ $type }}.
                </div>
            <?php else: ?>
                <div>
                    We gave the animal.
                </div>
            <?php endif; ?>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center" style="width:70px;">ID</th>
                    <th class="text-center">Nik</th>
                    <th class="text-center" style="width:120px;">Type</th>
                    <th class="text-center" style="width:100px;">Years</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tr>
                    <td class="text-center">{{ $animal->id }}</td>
                    <td class="text-center">{{ $animal->nik }}</td>
                    <td class="text-center">{{ $animal->type }}</td>
                    <td class="text-center">{{ $animal->years }}</td>
                    <td class="text-center"><?= $animal->is_give == '0' ? '<div style="color:darkred;">pitomnik</div>' : '<div style="color:green;">gave</div>' ?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-md-12" style="padding-top: 25px;">
            Hasn't any animal
        </div>
    </div>
    <?php endif; ?>

@endsection
