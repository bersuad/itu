<div class="content-page"><!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-0">Wallet History</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Wallet all history</h4>
                            <table class="table table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Account Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Balance</th>
                                    <th>Gender</th>                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($account as $key => $list): ?>
                                <tr>
                                    <td><?php echo $key +1; ?></td>
                                    <td><?php echo $list['account_first_name'] ?> <?php echo $list['account_last_name'] ?></td>
                                    <td><?php echo $list['account_email'] ?></td>
                                    <td><?php echo $list['account_phone'] ?></td>
                                    <td><?php echo $list['account_address'] ?></td>
                                    <td><?php
                                            if( $list['account_status'] == 1 ){?>
                                                Active
                                        <?php }else{ ?>
                                            Suspended
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $list['account_balance'] ?></td>
                                    <td><?php echo $list['account_gender'] ?></td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
