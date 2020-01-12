@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to REVOCAB</div>
                <div class="card-body">
                    <h2>What would you like to do ?</h2>
                    <br>
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="{{route('word.index')}}">
                                <div class="card">
                                    <div class="card-header text-center">ADD WORD TO YOUR LIST</div>
                                </div>
                            </a>
                        </div>
                        <div class="spacer col-sm-2"></div>
                        <div class="col-sm-5">
                            <a href="#">
                                <div class="card">
                                    <div class="card-header text-center">EDIT WORDS</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="{{route('words.cards')}}">
                                <div class="card">
                                    <div class="card-header text-center">WORD CARDS</div>
                                </div>
                            </a>
                        </div>
                        <div class="spacer col-sm-2"></div>
                        <div class="col-sm-5">
                            <a href="#">
                                <div class="card">
                                    <div class="card-header text-center">LOREM IPSUM</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
