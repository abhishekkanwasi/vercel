<?php
session_start();
session_destroy();
include_once("../config.php");
include(ROOT . "connection.php");

if (isset($_POST['trek_Name_selected']) && isset($_POST['trek_Date_selected']) && isset($_POST['Trek-cost'])) {
    $Trek  = $_POST['trek_Name_selected'];
    $Date  = $_POST['trek_Date_selected'];
    $Price = $_POST['Trek-cost'];
    $Transport_Price = $_POST['Transport_Price'];
    $Rental_gear_Price = $_POST['Rental_gear_Price'];
    $back_pack_Price = $_POST['back_pack_Price'];
    $Zipline_Price = $_POST['Zipline_Price'];
} else {
    $Trek  = '';
    $Date  = '';
    $Price = '';
    $Transport_Price = '';
    $Rental_gear_Price = '';
    $back_pack_Price = '';
    $Zipline_Price = '';
}

?>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Trekveda - Booking </title>
    <meta name="description" content="Trekveda is one of the best trekking community that offers the best trekking experience, and make trekkers explore the mother nature and mountain views." />
    <meta name="keywords" content="Trekveda,Booking. trekking in India, trekking in Himalayas, trekking in Uttarakhand, trekking packages in india, trekking in sikkim, trekking in ladakh, best trekking places in india, himalayan trekking tours, trekking" />
    <meta name="author" content="Amit Kukreti">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="6RXEm45dLS9ToSO6TrSBLIhB4Oi8IkQv7YwgI4NVLwU" />
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo $root1 ?>/src/icons/Favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $root1 ?>/src/icons/apple-touch-icon-144x144-precomposed.png" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $root1 ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $root1 ?>/css/package.scss" type="text/css" />
    <link rel="stylesheet" href="<?php echo $root1 ?>/css/footer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $root1 ?>/css/header.css" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {
            $("#postaliddiv").click(function() {
                if ($(this).is(":checked")) {
                    $("#showpostaladssdiv").show();

                } else {
                    $("#showpostaladssdiv").hide();
                }
            });
        });
    </script>


    <script>
        $(window).on('load', function() {

            $("input", "#step2").addClass("ignore"); // do not validate #form2 input
            $("input", "#step3").addClass("ignore"); // do not validate #form2 input
            $("input", "#step4").addClass("ignore"); // do not validate #form2 input

        });
    </script>

    <script>
        var _0xa9fc = ["\x2E\x69\x67\x6E\x6F\x72\x65", "\x72\x65\x71\x75\x69\x72\x65\x64", "\x73\x68\x6F\x77", "\x23\x6C\x6F\x61\x64\x69\x6E\x67\x6D\x65\x73\x73\x61\x67\x65", "\x66\x6F\x72\x6D\x73\x75\x62\x6D\x69\x74\x61\x6A\x61\x78\x2E\x70\x68\x70", "\x50\x4F\x53\x54", "\x73\x75\x63\x63\x65\x73\x73", "\x68\x69\x64\x65", "\x23\x73\x75\x63\x65\x73\x73\x6D\x73\x67", "\x65\x72\x72\x6F\x72", "\x23\x65\x72\x72\x6F\x72\x6D\x73\x67", "\x61\x6A\x61\x78", "\x73\x63\x72\x6F\x6C\x6C\x54\x6F", "\x76\x61\x6C\x69\x64\x61\x74\x65", "\x23\x6D\x73\x66\x6F\x72\x6D", "\x70\x61\x72\x65\x6E\x74", "\x6E\x65\x78\x74", "\x66\x6F\x72\x6D", "\x69\x67\x6E\x6F\x72\x65", "\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73", "\x69\x6E\x70\x75\x74", "\x23\x73\x74\x65\x70\x32", "\x61\x63\x74\x69\x76\x65", "\x61\x64\x64\x43\x6C\x61\x73\x73", "\x69\x6E\x64\x65\x78", "\x66\x69\x65\x6C\x64\x73\x65\x74", "\x65\x71", "\x23\x70\x72\x6F\x67\x72\x65\x73\x73\x62\x61\x72\x20\x6C\x69", "\x23\x73\x74\x65\x70\x31", "\x63\x6C\x69\x63\x6B", "\x23\x73\x74\x65\x70\x6F\x6E\x65", "\x70\x72\x65\x76", "\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x31", "\x23\x73\x74\x65\x70\x33", "\x23\x73\x74\x65\x70\x74\x77\x6F", "\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x32", "\x23\x73\x74\x65\x70\x34", "\x23\x73\x74\x65\x70\x74\x68\x72\x65\x65", "\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x33", "\x3A\x63\x68\x65\x63\x6B\x65\x64", "\x69\x73", "\x23\x74\x65\x72\x6D\x73\x63\x6C\x73", "\x70\x72\x6F\x70", "\x23\x74\x65\x6D\x73\x61\x6E\x64\x63\x6F\x6E\x64\x65\x72\x72\x6F\x72", "\x6F\x6E", "\x23\x73\x74\x65\x70\x66\x6F\x75\x72", "\x72\x65\x61\x64\x79"];
        jQuery()[_0xa9fc[46]](function() {
            var _0xb70ex1 = jQuery(_0xa9fc[14])[_0xa9fc[13]]({
                ignore: _0xa9fc[0],
                rules: {
                    Name: _0xa9fc[1],
                    PersonCount: _0xa9fc[1],
                    Age: _0xa9fc[1],
                    Weight: _0xa9fc[1],
                    Height: _0xa9fc[1],
                    gender: _0xa9fc[1],
                    '\x67\x65\x6E\x64\x65\x72': {
                        required: true
                    },
                    Address: _0xa9fc[1],
                    Mobilenumber: _0xa9fc[1],
                    Email: _0xa9fc[1],
                    postalcode: _0xa9fc[1],
                    cityname: _0xa9fc[1]
                },

            });
            $(_0xa9fc[30])[_0xa9fc[29]](function() {
                current_fs = $(this)[_0xa9fc[15]]();
                next_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();
                if (_0xb70ex1[_0xa9fc[17]]()) {
                    $(_0xa9fc[20], _0xa9fc[21])[_0xa9fc[19]](_0xa9fc[18]);
                    $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);
                    $(_0xa9fc[28])[_0xa9fc[7]]();
                    $(_0xa9fc[21])[_0xa9fc[2]]();
                    window[_0xa9fc[12]](0, 0)
                }
            });
            $(_0xa9fc[32])[_0xa9fc[29]](function() {
                $(_0xa9fc[20], _0xa9fc[21])[_0xa9fc[23]](_0xa9fc[18]);
                current_fs = $(this)[_0xa9fc[15]]();
                previous_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();
                $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);
                $(_0xa9fc[21])[_0xa9fc[7]]();
                $(_0xa9fc[28])[_0xa9fc[2]]();
                window[_0xa9fc[12]](0, 0)
            });
            $(_0xa9fc[34])[_0xa9fc[29]](function() {
                current_fs = $(this)[_0xa9fc[15]]();
                next_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();
                if (_0xb70ex1[_0xa9fc[17]]()) {
                    $(_0xa9fc[20], _0xa9fc[33])[_0xa9fc[19]](_0xa9fc[18]);
                    $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);
                    $(_0xa9fc[21])[_0xa9fc[7]]();
                    $(_0xa9fc[33])[_0xa9fc[2]]();
                    window[_0xa9fc[12]](0, 0)
                }
            });
            $(_0xa9fc[35])[_0xa9fc[29]](function() {
                $(_0xa9fc[20], _0xa9fc[33])[_0xa9fc[23]](_0xa9fc[18]);
                current_fs = $(this)[_0xa9fc[15]]();
                previous_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();
                $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);
                $(_0xa9fc[33])[_0xa9fc[7]]();
                $(_0xa9fc[21])[_0xa9fc[2]]();
                window[_0xa9fc[12]](0, 0)
            });
            $(_0xa9fc[37])[_0xa9fc[29]](function() {
                current_fs = $(this)[_0xa9fc[15]]();
                next_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();
                if (_0xb70ex1[_0xa9fc[17]]()) {
                    $(_0xa9fc[20], _0xa9fc[36])[_0xa9fc[19]](_0xa9fc[18]);
                    $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);
                    $(_0xa9fc[33])[_0xa9fc[7]]();
                    $(_0xa9fc[36])[_0xa9fc[2]]();
                    window[_0xa9fc[12]](0, 0)
                }
            });
            $(_0xa9fc[38])[_0xa9fc[29]](function() {
                $(_0xa9fc[20], _0xa9fc[36])[_0xa9fc[23]](_0xa9fc[18]);
                current_fs = $(this)[_0xa9fc[15]]();
                previous_fs = $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();
                $(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);
                $(_0xa9fc[36])[_0xa9fc[7]]();
                $(_0xa9fc[33])[_0xa9fc[2]]();
                window[_0xa9fc[12]](0, 0)
            });
            $(_0xa9fc[45])[_0xa9fc[44]](_0xa9fc[29], function(_0xb70ex7) {
                if (_0xb70ex1[_0xa9fc[17]]()) {
                    if ($(_0xa9fc[41])[_0xa9fc[40]](_0xa9fc[39])) {
                        return true
                    } else {
                        $(_0xa9fc[41])[_0xa9fc[42]](_0xa9fc[1], true);
                        $(_0xa9fc[43])[_0xa9fc[2]]();
                        return false
                    }
                }
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#incheck').on('click', function(e) {
                $("#termscls").prop('checked', true);
                $("#temsandconderror").hide();
                window_ht();
            });
        });
    </script>

</head>

<body>
    <?php include_once(ROOT . "header.php"); ?>
    <div class="container">
        <div class="col-md-12 px-0">
            <!-- multistep form -->
            <?php
            if ($Trek != '' && $Date != '' &&  $Price != '') {


            ?>
                <form class="form-horizontal form" id="msform" method="POST" action="booking.php">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Trip details</li>
                        <li>Add-on</li>
                        <li>Payment</li>
                    </ul>


                    <!-- fieldsets -->
                    <fieldset id="step1">


                        <div class="">
                            <h3 class="fs-subtitle text-bold"><?php echo  $Trek  ?></h5>
                        </div>

                        <h2 class="fs-title">Personal Details</h2>

                        <div class="row">
                            <div class="form-group required col-sm-6">
                                <label class="control-label col-sm-6"> Name: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="Name" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-6">
                                <label class="control-label col-sm-12">Email: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="Email" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12"> Contact: </label>
                                <div class="col-sm-12">
                                    <input type="tel" name="Mobilenumber" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12"> Age: </label>
                                <div class="col-sm-12">
                                    <input type="number" name="Age" min="5" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12">Weight (In kg.): </label>
                                <div class="col-sm-12">
                                    <input type="number" name="Weight" min="10" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12">Height (In Ft.): </label>
                                <div class="col-sm-12">
                                    <input type="number" name="Height" min="1" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-12">
                                <label class="control-label col-sm-12">Gender:</label>
                                <div class="col-sm-12">
                                    <label class="checkstyle">Male
                                        <input type="radio" name="gender" value="Male">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkstyle">Female
                                        <input type="radio" name="gender" value="Female">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkstyle">Other
                                        <input type="radio" name="gender" value="Other">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="gender" class="error" generated="true"></label>
                                </div>
                            </div>



                            <div class="form-group required col-sm-12">
                                <label class="control-label col-sm-12">Address: </label>
                                <div class="col-sm-12">
                                    <textarea type="text" name="Address" rows="3"></textarea>
                                </div>
                            </div>

                        </div>

                        <input style="float:right;" type="button" id="stepone" name="next" class="next action-button" value="Next" />

                    </fieldset>

                    <fieldset id="step2">

                        <h2 class="fs-title">Trip Detail</h2>

                        <div class="row">
                            <div class="form-group  col-sm-6">
                                <label class="control-label col-sm-12">Trip : </label>
                                <div class="col-sm-12">
                                    <input type="text" name="tourName" readonly hidden value="<?php echo $Trek ?>" />
                                    <h6 class="font-weight-bold"><?php echo $Trek ?></h6>
                                </div>
                            </div>

                            <div class="form-group  col-sm-3">
                                <label class="control-label col-sm-12">Price (per person) :</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tourPrice" id="UnitPrice" readonly hidden value="<?php echo $Price ?>" />
                                    <h6 class="font-weight-bold"><SPAN class="RupeeSign">&#8377;</SPAN> <?php echo $Price ?></h6>
                                </div>
                            </div>

                            <!-- <div class="form-group col-sm-3">
                            <label class="control-label col-sm-12">Days(D/N) :</label>
                            <div class="col-sm-12">
                                <input type="text" name="Days" readonly hidden  value="<?php echo  "0D/0N" ?>"/>
                                <h6 class="font-weight-bold"><?php echo  "0D/0N" ?></h6>
                            </div>
                        </div> -->

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12">No. Of Person : </label>
                                <div class="col-sm-12">
                                    <input type="number" name="PersonCount" id="personccountInput" min="1" value="1" />
                                </div>
                            </div>

                            <div class="form-group required col-sm-3">
                                <label class="control-label col-sm-12">Trip Date : </label>
                                <div class="col-sm-12">
                                    <input type="date" name="Trek_Date" value="<?php echo $Date ?>" readonly hidden />
                                    <h6 class="font-weight-bold"><?php echo $Date ?></h6>
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <label class="control-label col-sm-12">Message : </label>
                                <div class="col-sm-12">
                                    <textarea name="Message" row="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
                        <input style="float:right;" type="button" id="steptwo" name="next" class="next action-button" value="Next" />
                    </fieldset>


                    <fieldset id="step3">

                        <h2 class="fs-title">Addons :</h2>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><b>Add-on</b></th>
                                    <th scope="col"><b>Unit Price</b></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($Transport_Price == '' && $Rental_gear_Price == '' && $back_pack_Price == '' && $Zipline_Price == '') {
                                ?>
                                    <tr>
                                        <td colspan="4">Add-on not available</td>
                                    </tr>
                                <?php
                                }

                                if ($Transport_Price != '') {
                                ?>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Transport</td>
                                        <td><SPAN class="RupeeSign">&#8377;</SPAN> <span><?php echo $Transport_Price ?></spam>
                                        </td>
                                        <td><input type="checkbox" name="Transport" id="TransportADD" value="<?php echo $Transport_Price ?>" class="form-control" <?php if (isset($_POST['trasport_checkbox'])) echo "checked='checked'"; ?>></td>
                                    </tr>

                                <?php
                                }
                                if ($Rental_gear_Price != '') {
                                ?>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Rental Gears</td>
                                        <td><SPAN class="RupeeSign">&#8377;</SPAN> <span><?php echo $Rental_gear_Price ?></spam>
                                        </td>
                                        <td><input type="checkbox" name="Rental" id="RentalADD" value="<?php echo $Rental_gear_Price ?>" class="form-control" <?php if (isset($_POST['rental_checkbox'])) echo "checked='checked'"; ?>></td>
                                    </tr>

                                <?php
                                }

                                if ($back_pack_Price != '') {
                                ?>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Offloading</td>
                                        <td><SPAN class="RupeeSign">&#8377;</SPAN> <span><?php echo $back_pack_Price ?></spam>
                                        </td>
                                        <td><input type="checkbox" name="Offloading" id="OffloadingADD" value="<?php echo $back_pack_Price ?>" class="form-control" <?php if (isset($_POST['back_checkbox'])) echo "checked='checked'"; ?>></td>
                                    </tr>
                                    <?php
                                }
                                if ($Transport_Price != '') {
                                    $TCheck =  $Trek;
                                    if ($TCheck == "Kedartal Trek" || $TCheck == "Har Ki Dun Trek" || $TCheck == "Phulara Ridge Trek" || $TCheck == "Rupin Pass Trek" || $TCheck == "Test") {
                                    ?>
                                        <tr id="zipline_addon_row">
                                            <th scope="row">4</th>
                                            <td>Zip Line</td>
                                            <td><SPAN class="RupeeSign">&#8377;</SPAN> <span><?php echo $Zipline_Price ?></spam>
                                            </td>
                                            <td><input type="checkbox" name="ZIPADD" id="ZIPADD" value="<?php echo $Zipline_Price ?>" class="form-control" <?php if (isset($_POST['zipline_checkbox'])) echo "checked='checked'"; ?>></td>
                                        </tr>
                                <?php
                                    }
                                }

                                ?>

                            </tbody>
                        </table>

                        <div class="col-sm-12 px-0 addonCalculation">
                            <div class="row">
                                <div class="form-group  col-5">
                                    <label class="control-label col-sm-12 font-weight-bold">Trip:</label>
                                    <div class="col-sm-12"> <?php echo $Trek ?></div>
                                </div>
                                <div class="form-group  col-2">
                                    <label class="control-label col-sm-12 font-weight-bold">Person:</label>
                                    <div class="col-sm-12 PersonCount"> 1 </div>
                                </div>
                                <div class="form-group  col-3">
                                    <label class="control-label col-sm-12 font-weight-bold">Trip Cost:</label>
                                    <div class="col-sm-12 "><SPAN class="RupeeSign">&#8377;</SPAN><span class="UnitPrice"></span></div>
                                </div>
                                <div class="form-group  col-2">
                                    <label class="control-label col-sm-12 font-weight-bold">Total:</label>
                                    <div class="col-sm-12 "><SPAN class="RupeeSign">&#8377;</SPAN><span class="TotalPrice"></span></div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="col-md-6 float-right my-4 totalCalculationArea">
                            <table class="table table-borderless">
                                <tr>
                                    <td>GST</td>
                                    <td>5%</td>
                                    <td class="price_area"><SPAN class="RupeeSign">&#8377;</SPAN><span id="GST_VALUE"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td></td>
                                    <td class="price_area" ><SPAN class="RupeeSign">&#8377;</SPAN><span id="Total_VALUE"></span></td>
                                </tr>
                                <tr>
                                    <td>Transaction Charges</td>
                                    <td>3%</td>
                                    <td class="price_area"><SPAN class="RupeeSign">&#8377;</SPAN><span id="Transaction_Charges"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Grand Total</b></td>
                                    <td></td>
                                    <td class="price_area"><SPAN class="RupeeSign">&#8377;</SPAN><span id="Grand_Total"></span></td>
                                </tr>
                            </table>
                        </div>

                        
                            

                                <a href="https://trekveda.com/legal/Cancellation-Policy-1.pdf" target="_blank" style="text-decoration: none;" class="terms_text">
                                    <label style="padding-left: 30px;" class="checkstyle">I acknowledge that I have read, and do hereby accept the inclusion and exclusion,terms and conditions and cancellation policy before booking the trip.
                                        <input type="checkbox" id="termscls" name="termsclsname">
                                        <span class="checkmark"></span>
                                    </label>
                                </a>
                                <label id="temsandconderror" style="color:red;display:none;">Please Accept Terms & Conditions</label>

                       
                        <div class="col-12 ButtonArea">
                            <input type="button" name="previous" id="previous2" class="previous action-button" value="Previous" />
                            <input style="float:right;" type="submit" id="stepfour" name="submit" class="submitbutton" value="Payment" />
                        </div>


                    </fieldset>


                </form>
            <?php
            } else {
            ?>
                <div class="col-md-12 my-4 py-3">
                    <h1 class="text-center font-weight-bold my-4">Booking</h1>
                    <h4 class="text-center text-danger"> Please select the Trip first.</h4>
                    <div class="text-center">
                        <div>For Support :</div>
                        <div>Email: info@trekveda.com </div>
                        <div>Phone: +91 9821325153</div>
                    </div>

                </div>
            <?php

            }

            ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            totalise();
            $("#personccountInput").on('change', function() {
                $('.PersonCount').html($('#personccountInput').val());
                totalise();
            });

            $("#TransportADD,#OffloadingADD,#RentalADD,#ZIPADD").on('change', function() {
                totalise();
            });

            function totalise() {
                let personCount = $('#personccountInput').val();
                let UnitPrice = $('#UnitPrice').val();
                var TransportADD = $("#TransportADD");
                var OffloadingADD = $("#OffloadingADD");
                var RentalADD = $("#RentalADD");
                var ZipADD = $("#ZIPADD");
                if (TransportADD.prop('checked') === true) {
                    var transport_cost = TransportADD.val();

                } else {
                    var transport_cost = 0;
                }

                if (OffloadingADD.prop('checked') === true) {
                    var backpack_cost = OffloadingADD.val();
                } else {
                    var backpack_cost = 0;
                }

                if (RentalADD.prop('checked') === true) {
                    var Rental_cost = RentalADD.val();
                } else {
                    var Rental_cost = 0;
                }

                if (ZipADD.prop('checked') === true) {
                    var zipline_cost = ZipADD.val();
                } else {
                    var zipline_cost = 0;
                }

                var AddOnTotalUnit = (
                    parseFloat(transport_cost) +
                    parseFloat(Rental_cost) +
                    parseFloat(backpack_cost) +
                    parseFloat(zipline_cost)
                ).toFixed();


                let finalUnitPrice = parseFloat(UnitPrice) + parseFloat(AddOnTotalUnit);
                let finalTotalPrice = (finalUnitPrice * personCount);

                let GST_VALUE = (finalTotalPrice * 5) / 100;
                $('#GST_VALUE').html(currencyFormat1(GST_VALUE));

                let SubTotal = (finalTotalPrice + GST_VALUE);
                $('#Total_VALUE').html(currencyFormat1(SubTotal));
                let payUmoneyCharges = (SubTotal * 3) / 100;
                $('#Transaction_Charges').html(currencyFormat1(payUmoneyCharges));
                let Grand_Total = SubTotal + payUmoneyCharges;
                $('#Grand_Total').html(currencyFormat1(Grand_Total));

                $('.UnitPrice').html(currencyFormat1(finalUnitPrice));
                $('.TotalPrice').html(currencyFormat1(finalTotalPrice));


            }

            function currencyFormat1(id) {
                var x;
                x = id.toString();
                var lastThree = x.substring(x.length - 3);
                var otherNumbers = x.substring(0, x.length - 3);
                if (otherNumbers != '')
                    lastThree = ',' + lastThree;
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                return res;
            }

        });
    </script>

    <style>
        table>thead>tr>th {
            font-weight: 600 !important;
        }

        .error {
            color: red;
        }

        #Grand_Total {
            font-weight: 600;
        }

        @media (max-width: 1024px) {

            td,
            th,
            th b {
                font-size: 14px !important;
            }

            td,
            th{
            min-width: 60px;
            }
        }

        @media (max-width: 1024px) {

           
            .control-label,
            .action-button,
            .checkstyle,
            .previous,
            .submitbutton {
                font-size: 12px !important;padding: 10px;
            }

            .fs-title {padding: 10px;font-size: 16px;
            }

            .addonCalculation {
                font-size: 12px !important;padding: 3px;
            }
            .form-group{
                padding: 0px;
            }
        }

        @media (max-width: 768px) {

      

        }
        .totalCalculationArea ,.PolicyArea, .ButtonArea{
            position: relative !important;
        }
        .totalCalculationArea{
            position: relative !important;
        }
        .price_area{
            min-width: 100px;
        }

        .terms_text{
            font-size: 12px;
        }
    </style>

    <?php include_once(ROOT . "footer.php"); ?>

</body>

</html>