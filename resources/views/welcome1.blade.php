<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    #ninja_forms_form_5_all_fields_wrap, #ninja_forms_form_23_all_fields_wrap {
        margin:0 90px;
    }
    div>label {
        font-family: Verdana;
        font-weight: bold;
    }

    fieldset {
        background-color: #f5f5f5;
        padding:30px;
    }
    .form-step {
        font-size:3em;
    }
    .step-0 {
        display: none;
    }
    .ninja-forms-field-description {
        font-size:12px;
    }
    .list-checkbox-wrap ul, .list-radio-wrap ul {
        list-style-type: none;
    }
    #ninja_forms_form_5_response_msg, #ninja_forms_form_23_response_msg {
        font-size:20px;
        margin:auto;
        max-width:400px;
    }
    .field-wrap.label-left label {
        display: inline;
    }
    #ninja_forms_field_77_options_span li {
        display: inline-block;
        padding-right:25px;
    }
    #ninja_forms_field_30_div_wrap {
        clear:both;
    }
    .ninja-forms-help-text {

    }
    #ninja_forms_field_85_div_wrap {
        display: inline;
    }
    #ninja_forms_form_5_cont, #ninja_forms_form_23_cont {
        margin: auto;
        position: relative;
        z-index: 1000;
        display: block;
    }
    #ninja_forms_form_5_cont fieldset, #ninja_forms_form_23_cont fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.4);
        padding: 5%;
        box-sizing: border-box;
        width: 90%;
        margin: 0 auto 5%;
        clear:both;
    }
    #ninja_forms_form_5_cont fieldset:not(:first-of-type), #ninja_forms_form_23_cont fieldset:not(:first-of-type) {
        display: none;
    }
    #ninja_forms_form_5_cont input, #ninja_forms_form_23_cont input {
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        color: #2C3E50;
        font-size: 13px;
    }
    .form-nav {
        clear:both;
    }
    #ninja_forms_field_86_div_wrap, #ninja_forms_field_87_div_wrap, #ninja_forms_field_92_div_wrap {
        width:auto;
        display: inline;
    }
    #ninja_forms_field_6 {
        width: 100%;
        background: #0b97dd;
        display: inline;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 15px 10px;
        text-align: center;
        font-size:1.4em !important;
    }
    #ninja_forms_field_6:hover {
        color: #ededed;
        box-shadow: 0 0 2px #ccc;
    }
    #ninja_forms_form_5_cont textarea, #ninja_forms_form_23_cont textarea {
        padding: 3px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        color: #2C3E50;
        font-size: 13px;
    }
    #ninja_forms_form_5_cont .action-button, #ninja_forms_form_23_cont .action-button {
        width: 47%;
        background: #27AE60;
        display: inline;
        font-size: 1.2em;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 16px 8px;
        text-align: center;
    }
    #ninja_forms_field_95 {
        width: 100%;
        background: #27AE60;
        display: inline;
        font-size: 1.6em !important;
        font-weight: bold;
        color: white !important;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 16px 8px;
        text-align: center;
    }
    #ninja_forms_form_5_cont .action-button:hover, #ninja_forms_form_23_cont .action-button:hover, #ninja_forms_form_5_cont .action-button:focus, #ninja_forms_form_23_cont .action-button:focus, #ninja_forms_field_95:hover {
        box-shadow: 0 0 2px #444, 0 0 2px #27AE60;
        color:#ededed;
    }
    #progressbar {
        padding-left: 0;
        overflow: hidden;
        counter-reset: step;
    }
    #progressbar li {
        list-style-type: none;
        text-transform: uppercase;
        text-align: center;
        font-size: 10px;
        width: 10%;
        float: left;
        line-height: 14px;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 20px;
        margin: 0 auto 5px auto;
    }
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
    }
    #progressbar li:first-child:after {
        content: none;
    }

    #progressbar li.active:before,  #progressbar li.active:after{
        background: #27AE60;
        color: white;
    }
    #progressbar li.finish:before,  #progressbar li.active:after{
        background: #27AE60;
        color: white;
    }
    .list-checkbox-wrap.label-left ul li {
        width:100%;
    }
    #ninja_forms_form_5_cont .center {
        text-align: center;
        float: none;
        width:100%;
        margin:30px auto;
        font-size:1.2em;
    }
    .previous {
        background:#ccc !important;
        border-color:#444;
    }
    .previous:hover {
        background:#a4a4a4 !important;
        border-color:#444;
    }
    .list-checkbox-wrap {
        margin-top: 20px;
    }

    @media screen and (max-width: 980px) {

        #ninja_forms_form_5_all_fields_wrap, #ninja_forms_form_23_all_fields_wrap {
            margin: 0;
        }


        #ninja_forms_form_5_cont fieldset, #ninja_forms_form_23_cont fieldset {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.4);
            padding: 10%;
            box-sizing:
            width: 90%;
            margin: 0 5%;
            clear:both;
        }
    }

    .entry-content img.alignleft {
        margin-right:40px;
    }

    .tab{
        display: none;
    }


</style>
<body>
<div class="et_pb_section et_section_regular" wfd-id="155">
    <div class="et_pb_row" wfd-id="156">
        <div class="et_pb_column et_pb_column_4_4" wfd-id="157">
            <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left" wfd-id="158">
                <div id="ninja_forms_form_5_cont" class="ninja-forms-cont" wfd-id="159">
                    <div id="ninja_forms_form_5_wrap" class="ninja-forms-form-wrap" wfd-id="160">
                        <div id="ninja_forms_form_5_response_msg" style="" class="ninja-forms-response-msg " wfd-id="267"></div>

                        <form id="regForm" action="{{route('formm')}}" method="post">
                                <div class="ninja-forms-field  nf-desc" id="ninja_forms_field_6_div_wrap" style="" rel="6" wfd-id="252"><p><!-- progressbar --></p>
                                    <ul id="progressbar" wfd-id="253">
                                        <li class="step active">Who am I?</li>
                                        <li class="step">My Health</li>
                                        <li class="step">Comfort Care</li>
                                        <li class="step">Quality of Life</li>
                                        <li class="step">Pause for Thought</li>
                                        <li class="step">DNR</li>
                                        <li class="step">Medical Interventions</li>
                                        <li class="step">Brain Function</li>
                                        <li class="step">Evaluation</li>
                                        <li class="step">Confirm/Share</li>
                                    </ul>
                                </div>

                                    <div class="tab" id="ninja_forms_field_8_div_wrap">
                                        <h2>Step 1:&nbsp;
                                            <a href="https://www.bestendings.com/wp-content/uploads/2015/10/QuoteGr.png">
                                                <img class="alignright wp-image-1949 size-full" src="https://www.bestendings.com/wp-content/uploads/2015/10/QuoteGr-e1445786248423.png" alt="QuoteGr" width="175" height="137">
                                            </a>
                                        </h2>

                                        <div class="field-wrap list-radio-wrap label-left" >
                                            <label for="ninja_forms_field_9" id="ninja_forms_field_9_label" class="" wfd-id="250">
                                                Which of these quotes best represent your wishes:
                                            </label>
                                            <span id="ninja_forms_field_9_options_span" class="" rel="9" wfd-id="240">
                                            <ul wfd-id="241">
                                                <li wfd-id="248">
                                                    <label id="ninja_forms_field_9_0_label" class="ninja-forms-field-9-options" style="" for="ninja_forms_field_9_0" wfd-id="249">
                                                        <input id="ninja_forms_field_9_0" name="ninja_forms_field_9" type="radio" class="ninja-forms-field "
                                                               value="“Do not go gentle into that good night, Old age should burn and
                                                               rage at close of day; Rage, rage against the dying of the light.” –  Dylan Thomas" rel="9" wfd-id="597">
                                                        “Do not go gentle into that good night, Old age should burn and  rage at close of day; Rage, rage against the dying of the light.” –
                                                        Dylan Thomas
                                                    </label>
                                                </li>
                                                <li wfd-id="246"><label id="ninja_forms_field_9_1_label" class="ninja-forms-field-9-options" style="" for="ninja_forms_field_9_1" wfd-id="247"><input id="ninja_forms_field_9_1" name="ninja_forms_field_9" type="radio" class="ninja-forms-field " value="“I’ve told my children that when I die, to release balloons in the  sky to celebrate that I graduated: for me death is a graduation.” –  Elizabeth Kubler Ross" rel="9" wfd-id="596">“I’ve told my children that when I die, to release balloons in the  sky to celebrate that I graduated: for me death is a graduation.” –  Elizabeth Kubler Ross
                                                    </label>
                                                </li>
                                                <li wfd-id="244">
                                                    <label id="ninja_forms_field_9_2_label" class="ninja-forms-field-9-options" style="" for="ninja_forms_field_9_2" wfd-id="245">
                                                        <input id="ninja_forms_field_9_2" name="ninja_forms_field_9" type="radio" class="ninja-forms-field " value="“To the organized mind, death is but the next great adventure.” – JK  Rowling" rel="9" wfd-id="595">
                                                        “To the organized mind, death is but the next great adventure.” – JK  Rowling
                                                    </label>
                                                </li>
                                                <li wfd-id="242">
                                                    <label id="ninja_forms_field_9_3_label" class="ninja-forms-field-9-options" style="" for="ninja_forms_field_9_3" wfd-id="243">
                                                        <input id="ninja_forms_field_9_3" name="ninja_forms_field_9" type="radio" class="ninja-forms-field " value="“Miss me, but let me go, for this is a journey we all must take” – Amy Louise Kerswell" rel="9" wfd-id="594">
                                                        “Miss me, but let me go, for this is a journey we all must take” – Amy Louise Kerswell
                                                    </label>
                                                </li>
                                            </ul>
                                        </span>
                                        </div>
                                        {{--<div >--}}
                                            {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                            {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                        {{--</div>--}}
                                    </div>

                            <div class="tab">
                                strep 2

                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>


                            <div class="tab">
                                        <h2>
                                            Step 3: How's your health now?
                                            <a href="https://www.bestendings.com/wp-content/uploads/2015/10/HealthGr.png">
                                                <img class="alignright size-full wp-image-1950" src="https://www.bestendings.com/wp-content/uploads/2015/10/HealthGr.png"
                                                     alt="HealthGr" width="190" height="144">
                                            </a>
                                        </h2>
                                        <p>Many people live with one or more health issues, and still consider themselves healthy.</p>
                                        <p>
                                            <strong>
                                                Examples of chronic illness
                                            </strong>
                                            diabetes, arthritis, rheumatoid disease, Crohn’s disease, heart disease, mental illness, asthma, digestion, kidney disease, diabetes.</p>
                                        <p><strong>Examples of terminal or life-limiting illnes</strong>s Dementia, Parkinson’s, ALS, MS, some cancers, Kidney Failure, Lung Disease,</p>
                                        <p>How would you describe&nbsp;your current health? (check all that apply)</p>

                                        <label for="ninja_forms_field_12" id="ninja_forms_field_12_label" class="">I describe myself as: (check all that apply) 				</label>
                                        <span id="ninja_forms_field_12_options_span" class="" rel="12">
                                            <ul>
                                                <li>
                                                    <label id="ninja_forms_field_12_0_label" class="ninja-forms-field-12-options" style="">
                                                        <input id="ninja_forms_field_12_0" name="ninja_forms_field_12[]" type="checkbox"
                                                               class="ninja-forms-field  ninja_forms_field_12" value="Healthy" rel="12" wfd-id="588">
                                                        Healthy
                                                    </label>
                                                </li>
                                                <li>
                                                    <label id="ninja_forms_field_12_1_label" class="ninja-forms-field-12-options" style="">
                                                        <input id="ninja_forms_field_12_1" name="ninja_forms_field_12[]" type="checkbox"
                                                               class="ninja-forms-field  ninja_forms_field_12" value="In good health" rel="12" wfd-id="587">
                                                        In good health
                                                    </label>
                                                </li>
                                                <li>
                                                    <label id="ninja_forms_field_12_2_label" class="ninja-forms-field-12-options" style="">
                                                        <input id="ninja_forms_field_12_2" name="ninja_forms_field_12[]" type="checkbox"
                                                               class="ninja-forms-field  ninja_forms_field_12" value="Living with chronic illness" rel="12" wfd-id="586">
                                                        Living with chronic illness
                                                    </label>
                                                </li>
                                                <li>
                                                    <label id="ninja_forms_field_12_3_label" class="ninja-forms-field-12-options" style="">
                                                        <input id="ninja_forms_field_12_3" name="ninja_forms_field_12[]" type="checkbox"
                                                               class="ninja-forms-field  ninja_forms_field_12" value="Living with terminal illness" rel="12" wfd-id="585">
                                                        Living with terminal illness
                                                    </label>
                                                </li>
                                            </ul>
                                        </span>
                                        {{--<div >--}}
                                            {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                            {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                        {{--</div>--}}
                            </div>
                            <div class="tab">
                                step 44
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 55
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 66
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 77
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 88
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 99
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>

                            <div class="tab">
                                step 10
                                {{--<div >--}}
                                    {{--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                                    {{--<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
                                {{--</div>--}}
                            </div>
                            <div >
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
    </div> <!-- .et_pb_row -->
</div>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length -1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            console.log(x.length -1);
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:

    }

    function nextPrev(n) {
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
</script>
</body>
</html>
