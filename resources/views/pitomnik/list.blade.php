@extends('layouts.layout1')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Pitomnik</a></li>
            <li class="breadcrumb-item">List of animals</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 text-right" style="padding-bottom: 25px;">
            <a href="{{ route('add_animal') }}" class="btn btn-success">Add animal</a>
            <a href="{{ route('give_animal') }}" class="btn btn-success">Give animal</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">List of animals</h1>
        </div>
    </div>

    <?php if (!empty($animals)): ?>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:70px;">ID
                                <?php if (in_array($sort, ['id_asc'])): ?>
                                    <a href="{{ route('list_animals', ['sort' => 'id_desc']) }}"><i class="fa fa-sort-numeric-down"></i></a>
                                <?php elseif (in_array($sort, ['id_desc'])): ?>
                                    <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}"><i class="fa fa-sort-numeric-up"></i></a>
                                <?php else: ?>
                                    <a href="{{ route('list_animals', ['sort' => 'id_asc']) }}"><i class="fa fa-sort"></i></a>
                                <?php endif; ?>
                            </th>
                            <th class="text-center">Nik
                                <?php if (in_array($sort, ['nik_asc'])): ?>
                                    <a href="{{ route('list_animals', ['sort' => 'nik_desc']) }}"><i class="fa fa-sort-alpha-down"></i></a>
                                <?php elseif (in_array($sort, ['nik_desc'])): ?>
                                    <a href="{{ route('list_animals', ['sort' => 'nik_asc']) }}"><i class="fa fa-sort-alpha-up"></i></a>
                                <?php else: ?>
                                    <a href="{{ route('list_animals', ['sort' => 'nik_asc']) }}"><i class="fa fa-sort"></i></a>
                                <?php endif; ?>
                            </th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Years</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <?php foreach($animals as $item): ?>
                    <tr>
                        <td class="text-center">{{ $item->id }}</td>
                        <td class="text-center">{{ $item->nik }}</td>
                        <td class="text-center" style="width:120px;">{{ $item->type }}</td>
                        <td class="text-center" style="width:100px;">{{ $item->years }}</td>
                        <td class="text-center"><?= $item->is_give == '0' ? '<div style="color:darkred;">pitomnik</div>' : '<div style="color:green;">gave</div>' ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>

                <br/>

                {{ $animals->links('pagination::bootstrap-4') }}

            </div>
        </div>
    <?php else: ?>
        <div class="col-md-12">
            <i>Hasn't animals</i>
        </div>
    <?php endif; ?>

    <div style="margin-bottom: 100px;"></div>

@endsection
