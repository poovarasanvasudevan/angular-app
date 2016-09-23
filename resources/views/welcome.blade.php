@extends("partial.layout")
@section("contents")
    <md-toolbar class="md-whiteframe-3dp">
        <div class="md-toolbar-tools">
        </div>
    </md-toolbar>
    <!-- be careful: nothing between md-toolbar and md-content -->
    <md-content flex>
        <div layout="row" layout-align="center center">
            <div class="col col-4">
                <md-card style="margin-top: 28% !important;">
                    <md-card-content>
                        @include('partial.message')
                        <form method="post" action="/login">
                            <div style="padding: 20px !important;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <md-input-container md-no-float class="md-block">
                                    <md-icon class="zmdi zmdi-account icon"></md-icon>
                                    <input ng-model="user.phone" name="username" type="text" placeholder="Phone Number">
                                </md-input-container>

                                <md-input-container md-no-float class="md-block">
                                    <md-icon class="zmdi zmdi-eye icon"></md-icon>
                                    <input ng-model="user.password" name="password" type="password" placeholder="Password">
                                </md-input-container>

                                <div class="row right">
                                    <md-button type="submit" class="md-raised md-primary pull-right">Login</md-button>
                                </div>
                            </div>
                        </form>
                    </md-card-content>
                </md-card>
            </div>
        </div>
    </md-content>
@endsection