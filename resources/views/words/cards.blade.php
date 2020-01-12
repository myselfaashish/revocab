@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row space-16">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="thumbnail">
                                <div class="caption text-center">
                                    <div class="position-relative">
                                        <img src="https://az818438.vo.msecnd.net/icons/slack.png"
                                            style="width:72px;height:72px;" />
                                    </div>
                                    <br>
                                    <h4 id="thumbnail-label"><b>{{ $random_word->name }}</b></h4>
                                    <div style="padding: 10px;">
                                        <p>
                                            <b><i>{!! $random_word->meaning !!}</i></b>
                                        </p>
                                    </div>
                                    <br><br>
                                    @if($random_word->nepali_meaning)
                                        <div style="padding: 10px;">
                                            <b style="color: red">
                                                {{ $random_word->nepali_meaning }}
                                            </b>
                                        </div>
                                    @endif
                                    <br>
                                    @if($random_word->synonyms)
                                        <p>
                                            <b>Synonyms:</b>  {{ $random_word->synonyms }}
                                        </p>
                                    @endif
                                    @if($random_word->sentences)
                                        <div style="padding: 10px;" class="thumbnail-description smaller">
                                            <b>SENTENCES</b><br>
                                            {!! $random_word->sentences !!}
                                        </div>
                                    @endif
                                    <br>
                                    @if($random_word->extras)
                                        <div style="padding: 10px;" class="thumbnail-description smaller">
                                            <b>EXTRAS (if any)</b><br>
                                            {!! $random_word->extras !!}
                                        </div>
                                    @endif
                                    <br>
                                </div>
                                <div style="padding: 10px;" class="caption card-footer text-center">
                                    <ul class="list-inline">
                                        @if($random_word->mnemonics)<li><i class="people lighter"></i>&nbsp;<b>MNEMONICS:</b> {{ $random_word->mnemonics }}</li>@endif
                                        @if($random_word->root_word)<li><i class="people lighter"></i>&nbsp;<b>ROOT WORD:</b> {{ $random_word->root_word }}</li>@endif

                                        <li></li>
                                        <br>
                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a
                                                href="{{route('words.cards')}}">&nbsp;<button class="btn btn-danger">NEXT</button></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection