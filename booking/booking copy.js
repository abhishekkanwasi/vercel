function totalise() {
  var qtd = document.getElementById("Trek_cost").value;
  var checkboxTransport = document.getElementById("myCheck_Transport");
  var checkboxRental_Gair = document.getElementById("myCheck_Rental_Gair");
  var checkboxbackpack = document.getElementById("myCheck_backpack");
  var checkboxZipline = document.getElementById("myCheck_Zipline");
  if (checkboxTransport.checked == true) {
    var transport_cost = document.getElementById("myCheck_Transport").value;
  } else {
    var transport_cost = 0;
  }

  if (checkboxRental_Gair.checked == true) {
    var Rental_cost = document.getElementById("myCheck_Rental_Gair").value;
  } else {
    var Rental_cost = 0;
  }

  if (checkboxbackpack.checked == true) {
    var backpack_cost = document.getElementById("myCheck_backpack").value;
  } else {
    var backpack_cost = 0;
  }

  if (checkboxZipline.checked == true) {
    var zipline_cost = document.getElementById("myCheck_Zipline").value;
  } else {
    var zipline_cost = 0;
  }

  var qtd = (
    parseFloat(qtd) +
    parseFloat(transport_cost) +
    parseFloat(Rental_cost) +
    parseFloat(backpack_cost) +
    parseFloat(zipline_cost)
  ).toFixed();

  document.getElementById("unitprice").innerHTML = qtd;
  document.getElementById("final_unit_price_id").value =
    document.getElementById("unitprice").innerHTML;
  var price = document.getElementById("no_of_people").value;
  var result = (price * qtd).toFixed(2);
  var coupon = document.getElementById("coupon_input").value;
  if (coupon == "SMMF02") {
    var discount = (result * 10) / 100;
  } else {
    var discount = (0).toFixed(2);
  }
  var subtotal = result - discount;
  var GST = (subtotal / 100) * 5;

  var TotalAmount = (subtotal + GST).toFixed(2);
  var deposit = document.getElementById("deposite_percentage").value;
  var Next_due;
  var payableAmount;
  if (deposit == "100") {
    payableAmount = TotalAmount;
    Next_due = (0).toFixed(2);
    document.getElementById("amount").value = TotalAmount;
  } else {
    payableAmount = (TotalAmount / 2).toFixed(2);
    Next_due = (TotalAmount - payableAmount).toFixed(2);
    document.getElementById("amount").value = TotalAmount / 2;
  }
  document.getElementById("deposite_percentage_id").value =
    document.getElementById("deposite_percentage").value;
  document.getElementById("next_due_id").value = Next_due;
  document.getElementById("payable_amount_id").value = payableAmount;
  document.getElementById("payable_amount").innerHTML = "INR  " + payableAmount;
  document.getElementById("next_due").innerHTML = "INR  " + Next_due;
  document.getElementById("first_amount_ID").value = result;
  document.getElementById("resultpaymentpreview").innerHTML = result;
  document.getElementById("Discount_Preview").innerHTML = "INR  " + discount;
  document.getElementById("Discount_hiddenInput_ID").value = discount;
  document.getElementById("SubTotal_hiddenInput_ID").value = subtotal;
  document.getElementById("GST_Preview").innerHTML = "INR " + GST;
  document.getElementById("GST_hiddenInput_ID").value = GST;
  document.getElementById("Total_Amount_Preview").innerHTML =
    "INR " + TotalAmount;
  document.getElementById("amount2").value = TotalAmount;
  document.getElementById("phonecopy").innerHTML =
    document.getElementById("phone").value;
  document.getElementById("hiddenTrekName").value =
    document.getElementById("Trek_name").value;
  document.getElementById("selected_trekcopy").innerHTML =
    document.getElementById("Trek_name").value;
  document.getElementById("selected_trekcopy2").innerHTML =
    document.getElementById("Trek_name").value;

  var TCheck = document.getElementById("Trek_name").value;
  var Tzipline = document.getElementById("check_row_Zipline");
  if (
    TCheck == "Kedartal Trek" ||
    TCheck == "Har Ki Dun Trek" ||
    TCheck == "Phulara Ridge Trek" ||
    TCheck == "Rupin Pass Trek" ||
    TCheck == "Test"
  ) {
    Tzipline.style.display = "";
  } else {
    Tzipline.style.display = "none";
  }

  var first = document.getElementById("firstname").value;
  var second = document.getElementById("lastname").value;
  document.getElementById("other1_name").value = first + " " + second;
  document.getElementById("other1_email").value =
    document.getElementById("Email").value;
  document.getElementById("other1_phone").value =
    document.getElementById("phone").value;
  document.getElementById("other1_state").value =
    document.getElementById("State").value;
  document.getElementById("coupen_code_hidden_id").value =
    document.getElementById("coupon_input").value;
  var err = document.getElementById("coupen_error");
  var sm1 = document.getElementById("smmf1");
  var sm2 = document.getElementById("smmf2");
  var sm3 = document.getElementById("smmf3");
  if (coupon == "" || coupon == "" || coupon == "") {
    err.style.display = "none";
  } else {
    if (coupon != "SMMF01" || coupon != "SMMF02" || coupon != "SMMF03") {
      err.style.display = "block";
    } else {
      err.style.display = "none";
    }
    err.style.display = "block";
  }
  if (coupon == "SMMF01") {
    sm1.style.display = "block";
    err.style.display = "none";
  } else {
    sm1.style.display = "none";
  }
  if (coupon == "SMMF02") {
    sm2.style.display = "block";
    err.style.display = "none";
  } else {
    sm2.style.display = "none";
  }
  if (coupon == "SMMF03") {
    sm3.style.display = "block";
    err.style.display = "none";
  } else {
    sm3.style.display = "none";
  }

  var trek = document.getElementById("Trek_name").value;
  var person = document.getElementById("no_of_people").value;
  var date = document.getElementById("Treking_date").value;
  var mainbtn = document.getElementById("Trek_detail_btn");
  if (trek != "" && person != "" && date != "" && date != "select date") {
    var i = 1;
    for (i = 1; i <= 20; i++) {
      var name = document.getElementById("other" + i + "_name").value;
      var email = document.getElementById("other" + i + "_email").value;
      var age = document.getElementById("other" + i + "_age").value;
      var phone = document.getElementById("other" + i + "_phone").value;
      var state = document.getElementById("other" + i + "_state").value;
      var height = document.getElementById("other" + i + "_height").value;
      var weight = document.getElementById("other" + i + "_weight").value;
      var other = document.getElementById("other" + i).style.display;
      if (other != "none") {
        if (
          name != "" &&
          email != "" &&
          age != "" &&
          phone != "" &&
          state != "" &&
          height != "" &&
          weight != ""
        ) {
          mainbtn.disabled = false;
          mainbtn.style.backgroundColor = "#33cc00;";
        } else {
          mainbtn.disabled = true;
        }
      }
    }
  } else {
    mainbtn.disabled = true;
  }
}
