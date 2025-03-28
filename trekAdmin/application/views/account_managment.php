<?php include 'header.php';?>
<div class="layout layout-header-fixed accountPage">
	<?php include 'navbar.php';?>
	<div class="layout-main">
		<?php include 'sidebar.php';?>
		<div class="layout-content">
            <!-- For success popup -->
            <!-- <div id="successPopup" tabindex="-1" role="dialog" class="modal in">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceIn">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true" class="closeBtn">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <p>{{blockUnblockText}}</p>
                                <div class="m-t-lg">
                                    <button class="btn btn-success" data-dismiss="modal" type="button">Ok</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>

            <div id="markedStoreModal" tabindex="-1" role="dialog" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">List of marked stores</h4>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="media-list">
                                        <li class="media" ng-repeat="(key,list) in courierPlaceList">
                                            <div class="media-middle media-left">
                                                <a href="javascript:void(0)">
                                                    <img class="img-circle" width="48" height="48" ng-src="{{list.icon}}" alt="Maliha Elephant T-shirt">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h5 class="media-heading">
                                                    <a class="link-muted" href="javascript:void(0)"><b>{{list.name}}</b> - {{list.formatted_address}}</a>
                                                </h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="">
                <div class="layout-content-body">
                    <div class="title-bar">
                        <h1 class="title-bar-title">
                            <span class="d-ib">User list</span>
                        </h1>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" data-toggle="match-height">
                                    <div class="table-responsive">
                                        <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable no-footer" role="grid">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-left">User Details</th>
                                                    <th class="text-center">Profile pic</th>
                                                   <th class="text-center">Total order/offer created</th>
                                                    <th class="text-center">Total paid</th>
                                                    <th class="text-center">Average Rating</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-left">
                                                        <b>Name</b> - Mohd Amir <br>
                                                        <b>Email</b> - md.amir14@gmail.com<br>
                                                        <b>Contact</b> - +918948354056
                                                    </td>
                                                    <td class="text-center">
                                                        <img ng-src="{{list.profile_url}}" width="40px" height="40px">
                                                    </td>
                                                    <td class="text-center">
                                                        <b>Order</b> - 12<br>
                                                        <b>Offer</b> - 10
                                                    </td>
                                                    <td class="text-center">2000</td>
                                                    <td class="text-center">4.5</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm" type="button">
                                                            Block
                                                        </button>
                                                        <button class="btn btn-success btn-sm" type="button">
                                                            Unblock
                                                        </button>
                                                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#markedStoreModal" type="button">
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-left">
                                                        <b>Name</b> - Mohd Amir <br>
                                                        <b>Email</b> - md.amir14@gmail.com<br>
                                                        <b>Contact</b> - +918948354056
                                                    </td>
                                                    <td class="text-center">
                                                        <img ng-src="{{list.profile_url}}" width="40px" height="40px">
                                                    </td>
                                                    <td class="text-center">
                                                        <b>Order</b> - 12<br>
                                                        <b>Offer</b> - 10
                                                    </td>
                                                    <td class="text-center">2000</td>
                                                    <td class="text-center">4.5</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm" type="button">
                                                            Block
                                                        </button>
                                                        <button class="btn btn-success btn-sm" type="button">
                                                            Unblock
                                                        </button>
                                                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#markedStoreModal" type="button">
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-left">
                                                        <b>Name</b> - Mohd Amir <br>
                                                        <b>Email</b> - md.amir14@gmail.com<br>
                                                        <b>Contact</b> - +918948354056
                                                    </td>
                                                    <td class="text-center">
                                                        <img ng-src="{{list.profile_url}}" width="40px" height="40px">
                                                    </td>
                                                    <td class="text-center">
                                                        <b>Order</b> - 12<br>
                                                        <b>Offer</b> - 10
                                                    </td>
                                                    <td class="text-center">2000</td>
                                                    <td class="text-center">4.5</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm" type="button">
                                                            Block
                                                        </button>
                                                        <button class="btn btn-success btn-sm" type="button">
                                                            Unblock
                                                        </button>
                                                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#markedStoreModal" type="button">
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php include 'footer.php';?>