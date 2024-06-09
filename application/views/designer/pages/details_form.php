                 <form action="" method="post">
                        <span class="navigate">Designer Info <i class="fas fa-chevron-right"></i></span>
                        <div class="row mt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Name</label>
                                    <input type="text" class="form-control" value="<?=$designer->user_fullname;?>"  name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Mobile</label>
                                    <input type="number" class="form-control" value="<?=$designer->user_phone;?>"   name="mob_no" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Email</label>
                                    <input type="email" class="form-control" value="<?=$designer->user_email;?>"  name="email" required>
                                </div>
                            </div>
                            
                        </div>
                        <hr/>
                        <span class="navigate">Payment Details <i class="fas fa-chevron-right"></i></span>
                        <div class="row mt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Bank Name</label>
                                    <input type="text" class="form-control" value="<?=$payment->bank_name;?>"   name="bank_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Account No</label>
                                    <input type="number" class="form-control" value="<?=$payment->account_no;?>"   name="account_no">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">IFSC Code</label>
                                    <input type="text" class="form-control"  value="<?=$payment->ifsc_code;?>"  name="ifsc_code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Bank On Name</label>
                                    <input type="text" class="form-control"  value="<?=$payment->name_on_bank;?>"  name="name_on_bank">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Branch Address</label>
                                    <input type="text" class="form-control" value="<?=$payment->branch_address;?>"   name="branch_address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">UPI ID</label>
                                    <input type="text" class="form-control" value="<?=$payment->upi_id;?>"  name="upi_id">
                                </div>
                            </div>
                             
                            <div class="col-md-6">
                                <button type="submit" name="update" value="<?=$d_id?>" class="btn btn-primary">Update</button>
                            </div>
                            
                        </div>
                    </form>