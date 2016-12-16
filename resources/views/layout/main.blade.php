@extends('layout.layout')
@section('content')

    <div layout='column' layout-fill>
        <md-toolbar class="md-whiteframe-3dp">
            <div class="md-toolbar-tools">
                <md-button class="md-icon-button" aria-label="Settings">
                    <md-icon class="zmdi zmdi-menu" style="font-size: 22px !important;"></md-icon>
                </md-button>
                <h2>
                    <span>SHPT Mobile Dashboard</span>
                </h2>

                <span flex></span>
                <md-button class="md-icon-button" aria-label="More">
                    <md-icon class="zmdi zmdi-notifications" style="font-size: 22px !important;"></md-icon>
                </md-button>

                <md-menu md-position-mode="target-right target">
                    <md-button aria-label="Open demo menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                        <md-icon class="zmdi zmdi-more" style="font-size: 22px !important;"></md-icon>
                    </md-button>
                    <md-menu-content width="3">
                        <md-menu-item>
                            <md-button>
                                <div layout="row" flex><p flex>Notification</p></div>
                            </md-button>

                        </md-menu-item>

                        <md-menu-item>
                            <md-button>
                                <div layout="row" flex><p flex>Settings</p></div>
                            </md-button>

                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-href="/logout">
                                <div layout="row" flex><p flex>Logout</p></div>
                            </md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
            </div>
        </md-toolbar>
        <!-- be careful: nothing between md-toolbar and md-content -->
        <md-content flex>

            <div class="col-md-2">
                <md-card md-padding>
                    <md-list>
                        @foreach($menus as $menu)
                            <md-list-item ng-href="{{$menu['href']}}">
                                <md-icon class="{{$menu['icon']}}" style="font-size: 22px !important;"></md-icon>
                                <p> {{$menu['title']}} </p></md-list-item>
                        @endforeach
                    </md-list>
                </md-card>
            </div>
            <div class="col-md-9">
                @yield('main')
            </div>
        </md-content>
    </div>
@endsection

