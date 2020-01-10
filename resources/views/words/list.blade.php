@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row space-16">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="thumbnail">
                                <div class="caption text-center"
                                    onclick="#">
                                    <div class="position-relative">
                                        <img src="https://az818438.vo.msecnd.net/icons/slack.png"
                                            style="width:72px;height:72px;" />
                                    </div>
                                    <br>
                                    <h4 id="thumbnail-label"><b>NAME HERE</b></h4>
                                    <p>
                                            <b><i>MEANING (if any)</i></b>
                                    </p>
                                    <b>
                                            NEPALI MEANING (if any)
                                    </b>
                                    <p>
                                            Synonyms (if any)
                                    </p>
                                    <div class="thumbnail-description smaller">
                                        <b>SENTENCES</b>
                                        <ul>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </ul>
                                    </div>

                                    <div class="thumbnail-description smaller">
                                        <b>EXTRAS (if any)</b>
                                        <ul>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p>Lorem Ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="caption card-footer text-center">
                                    <ul class="list-inline">
                                        <li><i class="people lighter"></i>&nbsp;MNEMONICS</li>
                                        <li><i class="people lighter"></i>&nbsp;ROOT WORD</li>

                                        <li></li>
                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a
                                                href="#">&nbsp;Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection