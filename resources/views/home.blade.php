@extends('layout.main')
@section('main')

    <div class="col-md-3">
        <md-card>
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline">Total Users</span>
                    <span class="md-subhead"><b>({{count($users->results)}}) Total Users</b></span>
                </md-card-title-text>
                <md-card-title-media>
                    <div class="md-media-sm card-media center-block">
                        <i class="zmdi zmdi-account zmdi-hc-5x" style="color: #1b6d85"></i>
                    </div>
                </md-card-title-media>
            </md-card-title>
            <md-divider></md-divider>
            <md-card-actions layout="row" layout-align="end center">
                <md-button ng-href="/users" class="md-primary md-raised">View</md-button>
            </md-card-actions>
        </md-card>
    </div>

@endsection