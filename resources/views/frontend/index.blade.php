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
                    <div class="panel-heading"><h2>{{ $categoryValue->category }}</h2>  </div>
                    @foreach($faqs as $faqValue)
                        @if(is_null($faqValue->deleted_at) && $faqValue->status == 1)
                            @if($faqValue->category == $categoryValue->category)
                                <div class="panel-body">
                                    <h3>{{$faqCount++}}.&nbsp; {{ $faqValue->question }}</h3>
                                    {!!$faqValue->answer!!}
                                </div>
                            @endif
                        @endif
                    @endforeach
                    <?php $faqCount = 1?>
                </div><!-- panel -->
            </div><!-- col-md-10 -->
            @endif
        @endforeach

    </div>








        
@endsection

