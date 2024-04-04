
@extends('layouts.app')

@section('title', 'Modifica Project')

@section('content')
<section>
    
    <div class="container my-4">

        <a href="{{ route('admin.projects.index') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-table me-1">
            </i> Torna alla Lista
        </a>


        <h1>Modifica Project</h1>

        <form action="{{ route('admin.projects.update', $project) }}" class="row g-3" method="POST">
            @method('PATCH')
            @csrf

            <div class="col-12">
                <label for="title" class="form-label">TITOLO</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project['title'] }}">
            </div>

            <div class="col-12">
                <label for="content" class="form-label">CONTENUTO</label>
                <textarea type="text" name="content" id="content" class="form-control" rows="5">{{ $project['content'] }}</textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-success">
                    <i class="fa-solid fa-floppy-disk me-1">
                        Modifica                
                </button>
            </div>

        </form>
    </div>

</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection