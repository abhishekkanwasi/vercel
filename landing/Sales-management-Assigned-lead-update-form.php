<?php
include 'connection.php';
if (isset($_POST['Lead_id_detail'])) {

    $Lead_id_detail = $_POST['Lead_id_detail'];
    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    } else {
        $sql = "Select * from online_Leads where lead_id = '$Lead_id_detail';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($result) {
?>
            <div class='col-md-12'>
                <button id="Assigned_lead_update_form_container_Cancel_button" style="float: right;color: white;background-color: red;border: none">&#129136; Back</button>
            </div>

            <!--This part is for leads..-->
            <div class="Assign-leads-container-left">
                <div class="Assign-leads-container-first" id="For_leads">

                    <center class="div-container-heading">
                        <h4>Lead detail</h4>
                    </center>
                    <hr>
                    <form id="leads_detail_form">
                        <div style="display: none" class="form-group">
                            <label for="Lead_id">Lead id :</label> <br>
                            <input type="number" id="Lead_id" name="Lead-id" value="<?php echo $row["lead_id"] ?>" required class="form-control" readonly>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="name_main">Name :</label>
                            <input type="text" class="form-control" id="name_main" name="name" value="<?php echo $row["Name"] ?>" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="mail_main">E-mail :</label> <br>
                            <input type="email" class="form-control" id="mail_main" name="email" value="<?php echo $row["Email"] ?>" required />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="phone_main">Mobile No :</label> <br>
                            <input type="tel" id="phone_main" name="phone" value="<?php echo $row["Phone"] ?>" required class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="offline_trek_selected">Trek :</label> <br>
                            <select name="Trek-Selected" id="offline_trek_selected" type="text" required class="form-control">
                                <option selected><?php echo $row["Trek"] ?></option>
                                <option>Test </option>
                                <option>Annapurna Base Camp Trek</option>
                                <option>Bagini Glacier And Changabang Base Camp Trek</option>
                                <option>Bali Pass Trek</option>
                                <option>Beas Kund Trek</option>
                                <option>Bhrigu Lake Trek</option>
                                <option>Binsar Trek</option>
                                <option>Borasu Pass Trek</option>
                                <option>Brahmatal Trek</option>
                                <option>Buran Ghati Trek</option>
                                <option>Chaainsheel Bugyal Trek</option>
                                <option>Chadar Trek</option>
                                <option>Chandrakhani Pass Trek</option>
                                <option>Chopta Chandrashila Deoria Tal Trek</option>
                                <option>Dayara Bugyal Trek</option>
                                <option>Dhumdhar Pass Trek</option>
                                <option>Dodital Darwa pass trek</option>
                                <option>Everest Base Camp Trek</option>
                                <option>Gaumukh Tapovan Trek</option>
                                <option>Goechala Trek</option>
                                <option>Hampta Circle Trek</option>
                                <option>Hampta Pass Trek</option>
                                <option>Har Ki Dun Trek</option>
                                <option>Har Ki Dun with Ruinsara Tal Trek</option>
                                <option>Kalindikhal Pass Trek</option>
                                <option>Kareri Lake Trek</option>
                                <option>Kanamo Peak Trek</option>
                                <option>Kashmir Great Lakes Trek</option>
                                <option>Kasol Kheerganga trek</option>
                                <option>Kedarkantha Trek</option>
                                <option>Keerganga Trek</option>
                                <option>Kedartal Trek</option>
                                <option>Kuari Pass Trek</option>
                                <option>Minkiani Pass Trek</option>
                                <option>Lamkhaga Pass Trek</option>
                                <option>Nag Tibba Trek </option>
                                <option>Nanda Devi Base Camp Trek</option>
                                <option>Nandi Kund Ghiya Vinayak Pass Trek</option>
                                <option>Panchachuli Base Camp Trek</option>
                                <option>Pangarchula Trek</option>
                                <option>Pangarchula With Kuari Pass Trek</option>
                                <option>Panpatia Col Trek</option>
                                <option>Phulara Ridge Trek</option>
                                <option>Pin Bhaba Pass Trek</option>
                                <option>Pin Parvati Pass Trek</option>
                                <option>Pindari And Kafni Glacier Trek</option>
                                <option>Roopkund Trek</option>
                                <option>Rupin Pass Trek</option>
                                <option>Sandakphu Phalut Trek</option>
                                <option>Sar pass trek</option>
                                <option>Satopanth Lake Trek</option>
                                <option>Stok Kangari Trek</option>
                                <option>Sundardunga Glacier Trek</option>
                                <option>Tarsar Marsar Trek</option>
                                <option>Valley Of Flowers Trek</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="lead_status"> lead Status:</label> <br>
                            <select id="lead_status" name="lead-status" class="form-control">
                                <option selected><?php echo $row["Lead_status"] ?></option>
                                <option>Ongoing</option>
                                <option>Successful</option>
                                <option>Hold</option>
                                <option>Decline</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="Pre-Receipt_link">Pre-Receipt Link :</label>
                            <input type="url" class="form-control" id="Pre-Receipt_link" name="Pre-Receipt" value="<?php echo $row["Pre_Receipt_link"] ?>">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="name_main">Invoice Link :</label>
                            <input type="url" class="form-control" id="name_main" name="Invoice-Link" value="<?php echo $row["Invoic_link"] ?>">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="Reminder_date">Set Reminder date:</label> <br>
                            <input type="date" id="Reminder_date" name="reminder-date" value="<?php echo $row["Lead_reminder_date"] ?>" class="form-control">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="Message_from_customer">Message from customer :</label> <br>
                            <textarea id="Message_from_customer" name="Message_from_customer" class="form-control"><?php echo $row["Comments"] ?></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="Reason_main">Unsuccessful/delayed Reason :</label> <br>
                            <textarea id="Reason_main" name="Reason" class="form-control"><?php echo $row["Lead_unsuccessful_reason"] ?></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="Note_main">Note :</label><br>
                            <textarea id="Note_main" name="Note" class="form-control"><?php echo $row["Note"] ?></textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" class="btn_sale_data" id="Lead_detail_save">Save detail</button>
                            <span id="leads_detail_form_rersult"></span>
                        </div>

                    </form>
                    <script>
                        $(document).ready(function() {
                            $('#leads_detail_form').on('submit', function(event) {
                                event.preventDefault();
                                $('#leads_detail_form_rersult').html('wait...');
                                $.ajax({
                                    url: "Sales-management-Assigned-lead-update-form-save-lead.php",
                                    method: "POST",
                                    data: new FormData(this),
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                        $('#leads_detail_form_rersult').html(data);

                                    }
                                });
                            });
                        });
                    </script>

                </div>

                <!--This is for booking-->
                <div class="Assign-leads-container-second" id="For_booking">
                    <center class="div-container-heading">
                        <h4>Booking detail</h4>
                    </center>
                    <hr>
                    <form class="form-group" name="ofline-form" method="post" id="offline_data_form_leads">

                        <div class="col-md-6 form-group" style="display: none">
                            <label for="name_leads">Name :</label>
                            <input type="text" class="form-control" id="name_leads" name="name" value="<?php echo $row["Name"] ?>" required>
                        </div>

                        <div class="col-md-6 form-group" style="display: none">
                            <label for="mail_leads">E-mail :</label> <br>
                            <input type="email" class="form-control" id="mail_leads" name="email" value="<?php echo $row["Email"] ?>" required />
                        </div>

                        <div class="col-md-6 form-group" style="display: none">
                            <label for="phone_leads">Mobile No :</label> <br>
                            <input type="tel" id="phone_leads" name="phone" value="<?php echo $row["Phone"] ?>" required class="form-control">
                        </div>

                        <div class="col-md-6 form-group" style="display: none">
                            <label for="offline_trekselected_leads">Trek :</label> <br>
                            <input name="Trek-Selected" id="offline_trekselected_leads" type="text" value="<?php echo $row["Trek"] ?>" required class="form-control">
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="Age_leads">Age:</label> <br>
                            <input type="number" id="Age_leads" name="Age" min="5" required class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="Height_leads">Height(cm):</label> <br>
                            <input type="number" id="Height_leads" name="Height" min="50" required class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="weight_leads">Weight:</label> <br>
                            <input type="number" id="weight_leads" name="weight" min="15" required class="form-control">
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="Off_Loading_leads">Off Loading:</label> <br>
                            <select id="Off_Loading_leads" name="Off-Loading" required class="form-control">
                                <option disabled selected>Select</option>
                                <option>No</option>
                                <option>yes</option>
                            </select>
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="transportation_leads"> Transportation:</label> <br>
                            <select id="transportation_leads" name="Transportation" required class="form-control">
                                <option disabled selected>Select </option>
                                <option>No</option>
                                <option>yes</option>
                            </select>
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="No_of_person_leads"> Person Count :</label> <br>
                            <input type="number" id="No_of_person_leads" name="No-of-person" min="1" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="trek_date_leads">Trek date:</label> <br>
                            <input type="date" id="trek_date_leads" name="Treking-Date" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="trek_cost_leads"> Trek cost:</label> <br>
                            <input name="Trek-cost" id="trek_cost_leads" type="text" placeholder="Trek cost" required class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total_amount_leads"> Total Amount:</label> <br>
                            <input name="Total-Amount" id="total_amount_leads" type="text" placeholder="Total Amount" required class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="due_amount_leads"> Due Amount:</label> <br>
                            <input name="Due-Amount" id="due_amount_leads" type="text" placeholder="Due Amount" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="paid_amount_leads"> Paid Amount:</label> <br>
                            <input name="Paid-Amount" id="paid_amount_leads" type="text" placeholder="Paid Amount" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="transition_Id_leads"> Transition Id:</label> <br>
                            <input name="Transition-Id" id="transition_Id_leads" type="text" placeholder="Transition Id" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="invoice_no_leads">Invoice No:</label> <br>
                            <input name="Invoice-No" id="invoice_no_leads" type="text" placeholder="Invoice No" required class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="sale_executive_name_leads">Sales Executive name:</label> <br>
                            <select name="Sale_Executive_Name_Frontier" id="sale_executive_name_leads" class="form-control" required>
                                <option selected disabled>Select</option>
                                <option>Atul Kukreti</option>
                                <option>Adhish Bhandari</option>
                                <option>Abhishek gairola</option>
                                <option>Aman pandey</option>
                                <option>Rohit Kumar</option>
                                <option>Gaurav Negi</option>
                            </select>
                        </div>

                        <div style="float: left" class="col-md-6 form-group">
                            <label for="address_leads">Address:</label> <br>
                            <input id="address_leads" type='text' name="Address" required class="form-control" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="Invoice_link_leads">Invoice Link:</label> <br>
                            <input name="Invoice_Link" id="Invoice_link_leads" type="url" placeholder="Invoice link" required class="form-control">
                        </div>

                        <div Style="float: left" class="form-group  col-md-3">
                            <label>Trek Days:</label> <br>
                            <input type="number" id="weight" name="Trek-Days" min="1" required class="form-control">
                        </div>

                        <div Style="float: left" class="form-group  col-md-3">
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

                        <div style="float: left" class="form-group col-md-3">
                            <label> Screenshot : </label>
                            <input type="file" name="Reciept" value="" placeholder="Reciept" id="Reciept_for_due" required class="form-control" />
                        </div>

                        <div style="float: left" class="form-group col-md-3">
                            <label> DOB : </label>
                            <input type="date" name="DOB" value="" placeholder="Date of birth" class="form-control" />
                        </div>
                        <div class="form-group col-md-12">
                            <label> Comment : </label>
                            <textarea name="Comment" row="5" col="10" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                            <button class="btn_sale_data" type="submit" id="offline_data_form_leads_submit_button" onclick="">Book Now</button>
                        </div>
                        <div style="float: left" class="col-md-12 form-group">
                            <label></label>
                            <h4 id="offlineSuccessresultlead"></h4>
                            <span id="OfflineDataUploadFormPleaseWaitMsglead" style="display: none;">Uploading.... <IMG SRC="loadinggif.gif" style="height:30px;width:auto"></span>
                        </div>

                    </form>

                    <!-- offline data upload start-->
                    <script>
                        $(document).ready(function() {
                            $('#offline_data_form_leads').on('submit', function(event) {
                                event.preventDefault();
                                $('#OfflineDataUploadFormPleaseWaitMsglead').show();
                                $.ajax({
                                    url: "Booking_management_offline_data_upload.php",
                                    method: "POST",
                                    data: new FormData(this),
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                        $('#offlineSuccessresultlead').html(data);
                                        $('#OfflineDataUploadFormPleaseWaitMsglead').hide();
                                    }
                                });
                            });
                        });
                    </script>
                    <!-- offline data end-->

                </div>
            </div>

            <div style="width: 28%;float: right;margin-top: 10px;">
                <div class="col-xs-6">
                    <a href="https://c37.qbo.intuit.com/qbo37/login?webredir" target="_blank"><button class="btn btn-success">QuickBook</button><a>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-success" onclick="openNav()">Send Mail</button>
                </div>
            </div>

            <!--This div is for sending Itinerary through mail-->
            <div class="Assign-leads-container-right">
                <center class="div-container-heading">
                    <h4>Send Itinerary</h4>
                </center>
                <hr>
                <form id="Send_Itinerary_form">
                    <div style="display: none" class="form-group">
                        <label for="Lead_id_Itinerary">Lead id :</label> <br>
                        <input type="number" id="Lead_id_Itinerary" name="Lead-id-Itinerary" value="<?php echo $row["lead_id"] ?>" required class="form-control" readonly>
                    </div>
                    <div style="display: none" class="col-md-6 form-group">
                        <label for="name_Itinerary">Name :</label>
                        <input type="text" class="form-control" id="name_Itinerary" name="name" value="<?php echo $row["Name"] ?>" required>
                    </div>

                    <div class="col-md-12 form-group" style="display: none">
                        <label for="email_Send_Itinerary">E-mail :</label> <br>
                        <input type="email" class="form-control" id="email_Send_Itinerary" name="email" value="<?php echo $row["Email"] ?>" required readonly />
                    </div>
                    <div class="col-md-12 form-group" style="display: none">
                        <label for="Trek_send_Itinerary">Trek :</label> <br>
                        <input type="text" class="form-control" id="Trek_send_Itinerary" name="trek" value="<?php echo $row["Trek"] ?>" required readonly />
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="Itinerary_pdf">Select Itinerary:</label> <br>
                        <input type="file" class="form-control" id="Itinerary_pdf" name="attachment" value="" required />
                    </div>

                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-primary" id="Send_Itinerary_button">Send Itinerary</button><span id="Send_Itinerary_form_result"></span>
                    </div>

                </form>
                <script>
                    $(document).ready(function() {
                        $('#Send_Itinerary_form').on('submit', function(event) {
                            event.preventDefault();
                            $('#Send_Itinerary_form_result').html('wait...');
                            $.ajax({
                                url: "Sales-management-Assigned-lead-update-form-send-itinerary-mail.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $('#Send_Itinerary_form_result').html(data);
                                }
                            });
                        });
                    });
                </script>
            </div>

            <!-- This div is for Pre-Receipt through mail-->
            <!-- <div class="Assign-leads-container-right" >
                <center class="div-container-heading"><h4>Send Pre-Receipt</h4></center>
                <hr>
                <form id="Send_Pre_Receipt_form">
                    <div style="display: none" class="form-group">
                        <label for="Lead_id_Pre_Receipt">Lead id :</label> <br>
                        <input type="number" id="Lead_id_Pre_Receipt" name="Lead-id-Pre-Receipt"  value="<?php echo $row["lead_id"] ?>" required class="form-control" readonly>
                    </div>

                    <div  style="display: none" class="col-md-6 form-group">
                        <label for="name_Pre_Receipt">Name :</label>
                        <input type="text" class="form-control" id="name_Pre_Receipt" name="name" value="<?php echo $row["Name"] ?>" required >
                    </div>

                    <div  class="col-md-12 form-group" style="display: none">
                        <label for="email_Pre_Receipt">E-mail:</label> <br>
                        <input type="email" class="form-control" id="email_Pre_Receipt" name="email" value="<?php echo $row["Email"] ?>" required  readonly/>
                    </div>

                    <div  class="col-md-12 form-group" style="display: none">
                        <label for="Trek_send_Pre_Receipt">Trek :</label> <br>
                        <input type="text" class="form-control" id="Trek_send_Pre_Receipt" name="trek" value="<?php echo $row["Trek"] ?>" required readonly />
                    </div>

                    <div  class="col-md-12 form-group">
                        <label for="Pre_Receipt_pdf">Select Pre-Receipt:</label> <br>
                        <input type="file" class="form-control" id="Pre_Receipt_pdf" name="attachment" value="" required />
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning" id="Send_Pre-Receipt_button"> Send Pre-Receipt </button>
                    </div>

                </form>
                <div class="col-md-12">
                    <p id="Send_Pre_Receipt_form_result"></p>
                </div>

                <script>
                    $(document).ready(function () {
                        $('#Send_Pre_Receipt_form').on('submit', function (event) {
                            event.preventDefault();
                            $('#Send_Pre_Receipt_form_result').html('wait...');
                            $.ajax({
                                url: "Sales-management-Assigned-lead-update-form-send-Pre-Receipt-mail.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function (data) {
                                    $('#Send_Pre_Receipt_form_result').html(data);
                                }
                            });
                        });
                    });
                </script> 
            </div> -->

            <!--   This div is for Invoice through mail-->
            <!-- <div class="Assign-leads-container-right" >
                <center class="div-container-heading"><h4>Send Invoice</h4></center>
                <hr>
                <form id="Send_Invoice_form">

                    <div style="display: none" class="form-group">
                        <label for="Lead_id_Invoice">Lead id :</label> <br>
                        <input type="number" id="Lead_id_Invoice" name="Lead-id-Invoice"  value="<?php echo $row["lead_id"] ?>" required class="form-control" readonly>
                    </div>

                    <div  style="display: none" class="col-md-6 form-group">
                        <label for="name_Invoice">Name :</label>
                        <input type="text" class="form-control" id="name_Invoice" name="name" value="<?php echo $row["Name"] ?>" required >
                    </div>

                    <div  class="col-md-12 form-group" style="display: none">
                        <label for="email_Invoice">E-mail:</label> <br>
                        <input type="email" class="form-control" id="email_Invoice" name="email" value="<?php echo $row["Email"] ?>" required  readonly/>
                    </div>

                    <div  class="col-md-12 form-group" style="display: none">
                        <label for="Trek_send_Invoice">Trek :</label> <br>
                        <input type="text" class="form-control" id="Trek_send_Invoice" name="trek" value="<?php echo $row["Trek"] ?>" required readonly />
                    </div>

                    <div  class="col-md-12 form-group">
                        <label for="Invoice_pdf">Select Invoice:</label> <br>
                        <input type="file" class="form-control" id="Invoice_pdf" name="attachment" value="" required />
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success"" id="Send_Invoice_button"> Send Invoice </button>
                    </div>

                </form>
                <div class="col-md-12">
                    <p id="Send_Invoice_form_result"></p>
                </div>

                <script>
                    $(document).ready(function () {
                        $('#Send_Invoice_form').on('submit', function (event) {
                            event.preventDefault();
                            $('#Send_Invoice_form_result').html('wait...');
                            $.ajax({
                                url: "Sales-management-Assigned-lead-update-form-send-invoice-mail.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function (data) {
                                    $('#Send_Invoice_form_result').html(data);
                                }
                            });
                        });
                    });
                </script> 
            </div> -->

            <!--This div for side logs -->
            <div class="Assign-leads-container-right">
                <center class="div-container-heading">
                    <h4>Daily logs</h4>
                </center>
                <hr>
                <form id="daily_logs_form">
                    <div style="display: none" class="form-group">
                        <label for="Lead_id_daily_logs">Lead id :</label> <br>
                        <input type="number" id="Lead_id_daily_logs" name="Lead-id-daily-logs" value="<?php echo $row["lead_id"] ?>" required class="form-control" readonly>
                    </div>

                    <textarea name="Daily-logs"><?php echo $row["daily_logs"] ?></textarea>
                    <script>
                        CKEDITOR.replace('Daily-logs');
                    </script>

                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn_sale_data" id="daily_log_save">Save logs</button>
                        <span id="daily_logs_form_result"></span>
                    </div>

                </form>


                <script>
                    $(document).ready(function() {
                        $('#daily_logs_form').on('submit', function(event) {
                            event.preventDefault();
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[instance].updateElement();
                            }
                            $('#daily_logs_form_result').html('Saving...');
                            $.ajax({
                                url: "Sales-management-Assigned-lead-update-form-save-daily-logs.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $('#daily_logs_form_result').html(data);
                                }
                            });
                        });
                    });
                </script>
            </div>
<?php
        } else {
            echo 'error';
        }
    }
} else {
    echo 'value missing';
}
?>

<script>
    $(document).ready(function() {
        $('#Assigned_lead_update_form_container_Cancel_button').on('click', function(event) {
            event.preventDefault();
            $('#Assigned_lead_update_form_container').hide();
            $('#Assigend_lead_Main_table_with_update').show();

        });

        $("#name_main,#mail_main,#phone_main,#offline_trek_selected").on('change', function() {

            $('#email_Send_Itinerary,#Lead_id_Pre_Receipt,#email_Invoice,#mail_leads').val($('#mail_main').val());
            $('#name_Itinerary,#name_Pre_Receipt,#name_Invoice,#name_leads').val($('#name_main').val());
            $('#phone_leads').val($('#phone_main').val());
            $('#offline_trekselected_leads,#Trek_send_Itinerary,#Trek_send_Pre_Receipt,#Trek_send_Invoice').val($('#offline_trek_selected option:selected').text());

        });
        $("#name_main,#mail_main,#phone_main,#offline_trek_selected").on('keypress', function() {

            $('#email_Send_Itinerary,#Lead_id_Pre_Receipt,#email_Invoice,#mail_leads').val($('#mail_main').val());
            $('#name_Itinerary,#name_Pre_Receipt,#name_Invoice,#name_leads').val($('#name_main').val());
            $('#phone_leads').val($('#phone_main').val());
            $('#offline_trekselected_leads,#Trek_send_Itinerary,#Trek_send_Pre_Receipt,#Trek_send_Invoice').val($('#offline_trek_selected option:selected').text());

        });
    });
</script>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <div class="container">
            <form id="sale_management_send_mail_form" class="col-md-8" style="margin-left: 15%;">

                <div class="col-md-6 form-group">
                    <label for="leads_update_email_attechment" style="color:lightblue">Name :</label>
                    <input type="text" class="form-control" id="leads_update_email_attechment" name="name" value="<?php echo $row["Name"] ?>" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="leads_update_email_attechment" style="color:lightblue">Attechment :</label>
                    <input type="file" class="form-control" id="leads_update_email_attechment" name="Email-Attechment">
                </div>

                <div class="col-md-12 form-group">
                    <label for="leads_update_email_name" style="color:lightblue">Email :</label>
                    <input type="email" class="form-control" id="leads_update_email_name" name="Email" value="<?php echo $row["Email"] ?>" required>
                </div>

                <div class="col-md-12 form-group">
                    <label for="leads_update_email_subject" style="color:lightblue">Subject :</label>
                    <input type="text" class="form-control" id="leads_update_email_subject" name="Subject" value="" required>
                </div>

                <div class="col-md-12 form-group">
                    <label for="leads_update_email_message" style="color:lightblue">Messgae :</label><br>
                    <textarea id="leads_update_email_message" name="mail_content" class="form-control" rows="8"></textarea>
                    <script>
                        CKEDITOR.replace('leads_update_email_message');
                    </script>
                </div>

                <div class="col-md-12 form-group">

                    <button type="submit" class="btn_sale_data">Send</button>

                </div>

                <div class="col-md-12" id="lead_update_send_email_result_message" style="padding: 10px;color:white;">
                </div>
                <script>
                    $(document).ready(function() {
                        $('#sale_management_send_mail_form').on('submit', function(event) {
                            event.preventDefault();
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[instance].updateElement();
                            }
                            $('#lead_update_send_email_result_message').html('Sending...');
                            $.ajax({
                                url: "Sales-management-Assigned-lead-update-form-send-custome-mail.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $('#lead_update_send_email_result_message').html(data);
                                }
                            });
                        });
                    });
                </script>


            </form>

        </div>

    </div>
</div>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>

<!-- email pop up style -->
<style>
    .closebtn {
        z-index: 2;
    }

    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
    }

    .overlay-content {
        position: relative;

        width: 100%;
        text-align: center;
        margin-top: 30px;
    }

    .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .overlay a:hover,
    .overlay a:focus {
        color: #f1f1f1;
    }

    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
    }

    @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px
        }

        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
    }
</style>

<style>
    .Assign-leads-container-left {
        width: 70%;
        float: left;
    }

    .Assign-leads-container-right {
        width: 28%;
        float: right;
        background-color: white;
        box-shadow: 1px 2px 5px black;
        border-radius: 3px;
        margin-top: 10px;
        padding-bottom: 10px;
        padding-bottom: 5px;
    }

    .Assign-leads-container-first,
    .Assign-leads-container-second {
        width: 100%;
        float: left;
        box-shadow: 1px 2px 5px black;
        background-color: white;
        border-radius: 3px;
        padding-bottom: 10px;
        padding-bottom: 5px;
        margin-top: 10px;
    }

    #Send_Invoice_button,
    #Send_Itinerary_button,
    #Send_Pre-Receipt_button {
        width: max-content;
        height: max-content;
    }

    .div-container-heading {
        font-weight: 700;
        background-color: #35495a;
        color: white;
        padding: 3px;
        margin: 0px;
    }
</style>