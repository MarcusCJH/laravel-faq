@extends('frontend.layouts.app')

@section('content')


<?php
$catCount = 0;
$faqCount = 1;
?>

<div class="row">

    @foreach( $category as $categoryValue )
        @if(is_null($categoryValue->deleted_at))
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="{{$catCount}}">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$catCount}}" aria-expanded="false" aria-controls="collapseThree">
                                <h2>{{ $categoryValue->category }} &#x25bc;</h2>
                            </a>
                        </h4>
                    </div>

                                <div id="collapse{{$catCount}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$catCount}}">
                                    @foreach($faqs as $faqValue)
                                        @if(is_null($faqValue->deleted_at) && $faqValue->status == 1)
                                            @if($faqValue->category == $categoryValue->category)
                                    <div class="panel-body">
                                        <h3>{{$faqCount++}}.&nbsp;&nbsp; {{ $faqValue->question }}</h3>
                                        {!!$faqValue->answer!!}


                                    </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>


                    <?php $faqCount = 1?>
                    <?php $catCount++?>
                </div>
            </div>
        @endif
    @endforeach




</div>









@endsection

