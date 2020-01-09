@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('word.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="wordname" class="col-sm-2 col-form-label">Word Name</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="" placeholder="Word Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="check" class="col-sm-2 col-form-label">Meaning</label>
                            <div class="col-sm-10">
                                <textarea name="meaning" class="tinymce"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="synonyms" class="col-sm-2 col-form-label">Synonyms</label>
                            <div class="col-sm-10">
                                <input name="synonyms" class="form-control" id="" placeholder="Synonyms (if any)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mnemonics" class="col-sm-2 col-form-label">Mnemonics</label>
                            <div class="col-sm-10">
                                <input name="mnemonics" class="form-control" id="" placeholder="Mnemonics (if any)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mnemonics" class="col-sm-2 col-form-label">Nepali Meaning</label>
                            <div class="col-sm-10">
                                <a rel="" href="http://naya.com.np" title="" id="trig" class="naya_convert"></a>
                                <textarea type="text" class="form-control" rows="10" cols="20" name="nepali_meaning"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sentences" class="col-sm-2 col-form-label">Meaning</label>
                            <div class="col-sm-10">
                                <textarea name="sentences" class="tinymce"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rootword" class="col-sm-2 col-form-label">Mnemonics</label>
                            <div class="col-sm-10">
                                <input name="root_word" class="form-control" id="" placeholder="Root Word (if any)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="extras" class="col-sm-2 col-form-label">Extras (if any)</label>
                            <div class="col-sm-10">
                                <textarea name="extras" class="tinymce"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
