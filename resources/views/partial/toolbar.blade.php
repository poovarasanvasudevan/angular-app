<md-toolbar class="md-whiteframe-3dp">
    <div class="md-toolbar-tools">
        <div class="row col-12">
            <div class="col col-3">

            </div>
            <div class="form-item col-4">
                <div class="controls">
                    <md-autocomplete
                            md-selected-item="ctrl.selectedItem"
                            md-search-text="ctrl.searchText"
                            md-items="item in ctrl.querySearch(ctrl.searchText)"
                            md-item-text="item.display"
                            md-min-length="0"
                            ng-model="in.search"
                            placeholder="What is in your mind..."
                            class="col-12">
                        <md-item-template>

                        </md-item-template>
                        <md-not-found>
                            No Data [[ctrl.searchText == "" ? "" : "like " + ctrl.searchText]] Found
                        </md-not-found>
                    </md-autocomplete>
                </div>
            </div>
            <div class="col col-4">

                <md-button class="md-icon-button" id="notification-btn" aria-label="Settings">
                    <md-icon class="zmdi zmdi-globe icon"></md-icon>
                </md-button>
                <div class="webui-popover-content padding0" style="width: 100% !important;" >
                    <md-list class="md-dense padding0 scroll" layout-fill>
                        <md-list-item class="md-2-line" ng-repeat="phone in [1,2,3,4,5,6]" ng-click="alert();">
                            <img ng-src="{{$currentUser->avatar}}" class="md-avatar"/>
                            <div class="md-list-item-text" ng-class="md-offset">
                                <h3> {{$currentUser->first_name}} {{$currentUser->last_name}} Shared a Photo</h3>
                                <p> type phone</p>
                            </div>

                        </md-list-item>
                    </md-list>
                </div>

                <md-button class="md-icon-button" aria-label="Settings">
                    <md-icon class="zmdi zmdi-apps icon"></md-icon>
                </md-button>

                <md-button class="md-icon-button" aria-label="Settings">
                    <md-icon class="zmdi zmdi-notifications icon"></md-icon>
                </md-button>

                <md-menu md-position-mode="target-right target" md-offset="0 50">
                    <md-button class="md-icon-button" aria-label="Settings" ng-click="$mdOpenMenu($event)">
                        <md-icon class="zmdi zmdi-chevron-down icon"></md-icon>
                    </md-button>

                    <md-menu-content width="3">
                        <md-menu-item ng-repeat="item in [1, 2, 3]">
                            <md-button ng-click="ctrl.announceClick($index)">
                                Option [[item]]
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button href="/logout">
                                Logout
                            </md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
            </div>
        </div>
    </div>
</md-toolbar>
