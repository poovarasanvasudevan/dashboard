@extends('layout.layout')
@section('content')
    <div layout="column">
        <md-toolbar class="md-whiteframe-3dp">
            <div class="md-toolbar-tools">
                <h2>
                    <span>SHPT Mobile Dashboard</span>
                </h2>
            </div>
        </md-toolbar>

        <md-content flex>
            <div class="col-md-4 col-md-offset-4" style="margin-top: 10% !important;">
                <md-card class="" style="padding: 25px !important;">
                    <form method="post" action="/login">
                        <md-input-container md-no-float class="md-block md-margin">
                            <md-icon class="zmdi zmdi-account" style="font-size: 21px !important;"></md-icon>
                            <input ng-model="username" name="username" type="text" placeholder="Username" required>
                        </md-input-container>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <md-input-container md-no-float class="md-block md-margin">
                            <md-icon class="zmdi zmdi-eye" style="font-size: 21px !important;"></md-icon>
                            <input ng-model="password" name="password" type="password" placeholder="Password" required>
                        </md-input-container>


                        <div>
                            <md-button type="submit" class="md-raised md-primary pull-right">Login</md-button>
                        </div>
                    </form>
                </md-card>
            </div>
        </md-content>
    </div>
@endsection