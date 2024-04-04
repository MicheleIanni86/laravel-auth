@extends('layouts.app')

@section('title', 'Lista Projects')

@section('content')
<section>
    <div class="container my-4">
        <h1>Lista Projects</h1>

        <table class="table">
            <thead>
                <th>TITOLO</th>
                <th>SLUG</th>
                <th>ESTRATTO</th>
                <th></th>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>{{ $project['title'] }}</td>
                    <td>{{ $project['slug'] }}</td>
                    <td>{{ $project['content'] }}</td>
                    <td></td>
                </tr>
                    
                @empty
                    <tr>
                        <td colspan="100%">
                            <i>Nessun risultato trovato</i>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</section>
@endsection