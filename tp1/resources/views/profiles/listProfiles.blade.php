@extends('profiles/layout');

@section('title')
    Bonsoir Administrateur - Liste des administrateurs
@endsection

@section('content')
    <nav>
        <ul>
            <li style="text-align: right; list-style-type: none"><a href="{{ route('add') }}"><button type="submit" class="btn btn-success"><i class="fa fa-plus-circle" style="padding-right: 10px"></i>Ajouter administrateur</button></a>
        </ul>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Numéro de téléphone</th>
            <th scope="col">Adresse</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->last_name }}</td>
                <td>{{ $profile->first_name }}</td>
                <td>{{ $profile->age }}</td>
                <td>{{ $profile->phone_number }}</td>
                <td>{{ $profile->address }}</td>
                <td><a href="{{ route('edit', ['id' => $profile->id]) }}"><button type="submit" class="btn btn-primary" style="width: 100px"><i class="fa fa-edit" style="padding-bottom: 5px; padding-top: 5px"></i>Modifier</button></a></td>
                <td><a href="{{ route('delete', ['id' => $profile->id]) }}"><button type="submit" class="btn btn-danger" style="width: 100px><i class="fa fa-trash" style="padding-bottom: 5px; padding-top: 5px"></i>Supprimer</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
