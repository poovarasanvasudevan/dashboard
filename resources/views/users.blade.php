@extends('layout.main')
@section('main')

    <md-card ng-controller="usercontroller">
        <div>
            <md-button class="md-raised md-warn pull-right">Export</md-button>
        </div>

        <md-divider></md-divider>
        <md-table-container>
            <table md-table>
                <thead md-head md-order="query.order">
                <tr md-row>
                    <th md-column><span>Id</span></th>
                    <th md-column><span>FirstName</span></th>
                    <th md-column>Last Name</th>
                    <th md-column>Username</th>
                    <th md-column>Email</th>
                    <th md-column>Phone</th>
                    <th md-column>Created At</th>
                    <th md-column>Action</th>
                </tr>
                </thead>
                <tbody md-body>
                <tr md-row ng-repeat="user in users">
                    <td md-cell>[[user.objectId]]</td>
                    <td md-cell>[[user.fname]]</td>
                    <td md-cell>[[user.lname]]</td>
                    <td md-cell>[[user.username]]</td>
                    <td md-cell>[[user.email]]</td>
                    <td md-cell>[[user.phone]]</td>
                    <td md-cell>[[user.createdAt]]</td>
                    <td md-cell>

                        <md-menu  md-position-mode="target-right target">
                            <md-button aria-label="Open demo menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                                <md-icon class="zmdi zmdi-more"></md-icon>
                            </md-button>
                            <md-menu-content width="2">
                                <md-menu-item ng-repeat="item in ['View User', 'Send Notification', 'Block User']">
                                    <md-button> [[item]] </md-button>
                                </md-menu-item>
                            </md-menu-content>
                        </md-menu>
                    </td>
                </tr>
                </tbody>
            </table>
        </md-table-container>

    </md-card>
@endsection