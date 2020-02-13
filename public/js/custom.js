function changeStep(){

    // var num1 = document.getElementById("num1");
    // var pack1 = document.getElementById("pack");
    // pack1.style.top='0';
    // pack1.style.left='10px';
    // num1.append(pack1);
    // pack1.style.display="block";
    // document.getElementById("num2").style.color = "white";

    // document.getElementById("num2").className="pointer";
    document.getElementById("step1").style.display="none";
    document.getElementById("button1").style.display="block";
    document.getElementById("button1").style.margin="120px 0 0 0";
    document.getElementById("step2").style.display="block";
}


// function nextBtn1(){
//     document.getElementById("step2").style.display="none";
//     document.getElementById("step3").style.display="block";
//     // document.getElementById("step3").style.display="block";
// }

// function prevBtn1(){
//     document.getElementById("step3").style.display="none";
//     document.getElementById("step2").style.display="block";


// }



var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:

    if (n == (x.length -1)) {

        document.getElementById("nextBtn").setAttribute('id', 'subbtn');
        document.getElementById("subbtn").setAttribute('type', 'submit');
        document.getElementById("subbtn").innerHTML = "Submit";
    }
    else if (n == 0){
        document.getElementById("nextBtn").innerHTML = "Continue";
    }
    else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";

    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    //... and run a function that will display the correct step indicator:

}

function nextPrev(n) {
  showTab(currentTab);
    if(n==1) {
        var step = document.getElementsByClassName("step");
        step[currentTab +1 ].className = "step active";

    }else {
        var step = document.getElementsByClassName("step");
        step[currentTab ].className = step[currentTab ].className.replace(" active", "");
    }
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);

}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
//        if (valid) {
//            document.getElementsByClassName("step")[currentTab].className += " active";
//        }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
//        var i, x = document.getElementsByClassName("step");
//        for (i = 0; i < x.length; i++) {
//            x[i].className = x[i].className.replace(" active", "");
//        }

    //... and adds the "active" class on the current step:
//        x[n].className += " active";
}

function chkbxFunction(){
  var checkBox = document.getElementById("otherCheck");
  var text = document.getElementById("otherText");
  if (checkBox.checked == true){
    otherText.style.display = "block";
  } else {
    otherText.style.display = "none";
  }
}

function chkbxFunction2(){
  var checkBox = document.getElementById("lifeCheck");
  var text = document.getElementById("smallText");
  if (checkBox.checked == true){
    smallText.style.display = "block";
  } else {
    smallText.style.display = "none";
  }
}

function chkbxFunction3(){
  var checkBox = document.getElementById("InviteOthers");
  var text = document.getElementById("emailAddresses");
  if (checkBox.checked == true){
    emailAddresses.style.display = "block";
  } else {
    emailAddresses.style.display = "none";
  }
}
// var currentTab = 1;


// function showTab(n) {
//     // This function will display the specified tab of the form ...
//     var x = document.getElementsByClassName("tab");
//     var pack1 = document.getElementById("pack");
//     var num2 = document.getElementById("num2");
//     x[n].style.display = "block";

//         // $("pack1").clone().appendTo("num2");


//     // ... and fix the Previous/Next buttons:
//       document.getElementById("prevBtn").style.display = "inline";

//     if (n == (x.length - 1)) {
//       document.getElementById("nextBtn").innerHTML = "Submit";
//     } else {
//       document.getElementById("nextBtn").innerHTML = "Next";
//     }
//   }

//   // showTab(currentTab);

// function nextPrev(n) {
//     // This function will figure out which tab to display
//     var x = document.getElementsByClassName("tab");

//     // Exit the function if any field in the current tab is invalid:
//     // Hide the current tab:
//     x[currentTab].style.display = "none";

//     // Increase or decrease the current tab by 1:
//     currentTab = currentTab + n;
//     // if you have reached the end of the form... :
//     if (currentTab >= x.length) {
//       //...the form gets submitted:
//       document.getElementById("regForm").submit();
//       return false;
//     }
//     // Otherwise, display the correct tab:
//     showTab(currentTab);
//   }








//   function validateForm() {
//     // This function deals with validation of the form fields
//     var x, y, i, valid = true;
//     x = document.getElementsByClassName("tab");
//     y = x[currentTab].getElementsByTagName("input");
//     // A loop that checks every input field in the current tab:
//     for (i = 0; i < y.length; i++) {
//       // If a field is empty...
//       if (y[i].value == "") {
//         // add an "invalid" class to the field:
//         y[i].className += " invalid";
//         // and set the current valid status to false:
//         valid = false;
//       }
//     }
//     // If the valid status is true, mark the step as finished and valid:
//     if (valid) {
//       document.getElementsByClassName("step")[currentTab].className += " finish";
//     }
//     return valid; // return the valid status
//   }
