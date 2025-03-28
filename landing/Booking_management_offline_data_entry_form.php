<div class='top_heading_bar'>
    <center>
        <h5>Offline Data Entry Form</h5>
    </center>
</div>
<form class="col-md-12 row" name="ofline -form" method="post" id="offline_data_form" style="padding:0px;">
    <div class="form-group  col-md-4">
        <label> Name: </label><br>
        <input type="text" id="name" name="name" required class="form-control" />
    </div>
    <div  class="form-group  col-md-4">
        <label>E-mail:</label> <br>
        <input type="email" id="mail" name="email" required class="form-control" />
    </div>
    <div class="form-group  col-md-4">
        <label>Trek:</label> <br>
        <select name="Trek-Selected" id="offline-trekselected" type="text" required class="form-control">
            <option selected disabled>Select Trek</option>
            <?php include 'All_trek_list.php'; ?>
        </select>
    </div>

    <div  class="form-group  col-md-2">
        <label>Mobile No:</label> <br>
        <input type="tel" id="phone" name="phone" required class="form-control">
    </div>
    <div  class="form-group  col-md-2">
        <label>Age:</label> <br>
        <input type="number" id="Age" name="Age" required class="form-control">
    </div>
    <div class="form-group  col-md-2">
        <label>Height:</label> <br>
        <input type="number" id="height" name="Height" required class="form-control">
    </div>
    <div  class="form-group  col-md-2">
        <label>Weight:</label> <br>
        <input type="number" id="weight" name="weight" required class="form-control">
    </div>



    <div  class="form-group  col-md-2">
        <label>Trek Days:</label> <br>
        <input type="number" id="weight" name="Trek-Days" min="1" required class="form-control">
    </div>

    <div  class="form-group  col-md-2">
        <label> Trek Date:</label> <br>
        <input name="Treking-Date" id="treking_date" type="date" placeholder="Trek Date" min="0" required class="form-control">
    </div>



    <div class="form-group  col-md-6">
        <label>Address:</label> <br>
        <input id="address" type='text' name="Address" required class="form-control" />
    </div>

    <div  class="form-group  col-md-2">
        <label> Transportation:</label> <br>
        <select id="transportation" name="Transportation" class="form-control">
            <option disabled selected></option>
            <option>No</option>
            <option>yes</option>
        </select>
    </div>

    <div  class="form-group  col-md-2">
        <label> Off Loading:</label> <br>
        <select id=" Off_Loading" name="Off-Loading" class="form-control">
            <option disabled selected></option>
            <option>No</option>
            <option>yes</option>
        </select>
    </div>

    <div class="form-group  col-md-2">
        <label> No of person:</label> <br>
        <input name="No-of-person" id="no_of_person" type="Number" placeholder="no of person" min="0" class="form-control">
    </div>


    <div  class="form-group  col-md-3">
        <label> Trek cost:</label> <br>
        <input name="Trek-cost" id="trek_cost" type="text" placeholder="Trek cost" required class="form-control">
    </div>
    <div class="form-group  col-md-3">
        <label> Total Amount:</label> <br>
        <input name="Total-Amount" id="total_amount" type="text" placeholder=" Total Amount" required class="form-control">
    </div>
    <div  class="form-group  col-md-3">
        <label> Due Amount:</label> <br>
        <input name="Due-Amount" id="due_amount" type="text" placeholder="Due Amount" required class="form-control">
    </div>
    <div  class="form-group  col-md-3">
        <label> Paid Amount:</label> <br>
        <input name="Paid-Amount" id="paid_amount" type="text" placeholder="Paid Amount" required class="form-control">
    </div>

    <div  class="form-group  col-md-3">
        <label>Transition Id:</label> <br>
        <input name="Transition-Id" id="transition_Id" type="text" placeholder="Transition Id" required class="form-control">
    </div>

    <div  class="form-group  col-md-3">
        <label>Invoice No:</label> <br>
        <input name="Invoice-No" id="invoice_no" type="text" placeholder="Invoice No" required class="form-control">
    </div>

    <div  class="form-group  col-md-3">
        <label>Sales Executive name(Fronter):</label> <br>
        <select name="Sale_Executive_Name_Frontier" id="sale_executive_name" class="form-control" required>
            <option selected disabled>Select</option>
            <option>Atul Kukreti</option>
            <option>Adhish Bhandari</option>
            <option>Abhishek gairola</option>
            <option>Aman pandey</option>
            <option>Rohit Kumar</option>
            <option>Gaurav Negi</option>
        </select>
    </div>

    <div  class="form-group  col-md-3">
        <label>Invoice Link:</label> <br>
        <input name="Invoice_Link" id="Invoice_link" type="url" placeholder="Invoice link" required class="form-control">
    </div>

    <div  class="form-group  col-md-3">
        <label>Transaction Mode:</label> <br>
        <select name="Transaction_mode" type="text" placeholder="Transaction Mode" required class="form-control">
            <option selected Disabled>Select Transaction Mode</Option>
            <Option>Online Transfer</Option>
            <Option>Google pay</Option>
            <Option>Phone Pe</Option>
            <Option>PayTm</Option>
            <Option>Bank Transfer</Option>
            <Option>Cash</Option>
            <Option>UPI</Option>
            <Option>IMPS</Option>
            <Option>PayU</Option>
            <Option>RTGS</Option>
            <Option>NEFT</Option>
            <Option>Card</Option>
            <Option>Bhim</Option>
            <Option>Other</Option>  
        </select>
    </div>

    <div  class="form-group col-md-3">
        <label> Screenshot : </label>
        <input type="file" name="Reciept" value="" placeholder="Reciept" id="Reciept_for_due" required class="form-control" />
    </div>

    <div  class="form-group col-md-3">
        <label> DOB : </label>
        <input type="date" name="DOB" value="" placeholder="Date of birth"  class="form-control" />
    </div>

    <div class="form-group col-md-12">
        <label> Comment : </label>
        <textarea name="Comment" row="5" col="10" class="form-control"></textarea>
    </div>

    <div class="form-group  col-md-12">
        <button class="btn btn-warning" type="reset" style="height: auto;width:max-content;">Clear</button>
        <button class="btn btn-success" type="submit" style="height: auto;width:max-content;">upload</button>
    </div>
    <div class="form-group  col-md-12">
        <h4 id="offlineSuccessresult"></h4>
        <span id="OfflineDataUploadFormPleaseWaitMsg" style="display: none;">Uploading.... <IMG SRC="loadinggif.gif" style="height:30px;width:auto"></span>
    </div>
</form>

<!-- offline data upload start-->
<script>
    $(document).ready(function() {
        $('#offline_data_form').on('submit', function(event) {
            event.preventDefault();
            $('#OfflineDataUploadFormPleaseWaitMsg').show();
            $.ajax({
                url: "Booking_management_offline_data_upload.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#offlineSuccessresult').html(data);
                    $('#OfflineDataUploadFormPleaseWaitMsg').hide();
                }
            });
        });
    });
</script>
<!-- offline data end-->