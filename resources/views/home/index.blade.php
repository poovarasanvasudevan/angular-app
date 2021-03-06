@extends("partial.layout")
@section("contents")
    @include("partial.toolbar")
    <!-- be careful: nothing between md-toolbar and md-content -->
    <md-content flex>
        @include('partial.message')

        <div layout="row">
            <div flex="20">
                {{json_encode($currentUser->id)}}
            </div>
            <div flex="65">
                <md-progress-circular class="md-error" md-diameter="30"></md-progress-circular>
            </div>
            <div flex hide-sm hide-xs
                 style="min-height: 98% !important;background: #fff;overflow: auto;">

            </div>
        </div>
    </md-content>

@endsection
@section('opt')
    <script src="/js/peer.js"></script>
@endsection