<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <title>best endings</title>
</head>
<body>

    <div>
        <p class="p1">Powered by <a href="https://www.BestEndings.com">BestEndings.com</a> – your source of education for end-of-life planning</p>
        <p class="p2"><b>When you complete the questions, a PDF will be emailed to you, for sharing with everyone who matters.</b></p>
        <p class="p3">Fields marked with an * are required</p>
    </div>

    <div class="ninja" id="ninja" style="">
        <div id="pack" class="pack" style="margin-left: 50px; display: none;">
            <div class="rectangle" style="margin-top: 11px;margin-left: 1px;"> </div>
            <div class="pointer" style="margin-left: 77px;margin-top: 2px;"> </div>
        </div>


        <div class="ninja-divs-field  nf-desc" id="ninja_divs_field_6_div_wrap" style="" rel="6" wfd-id="252"><p><!-- progressbar --></p>
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


        <!-- <ul id="progressbar" class="numbers" id="numbers">
            <li class="step" id="num1"><div style="font-size: 10px;padding-left: 3px; margin-bottom: 3px;">1</div></li>
            <li class="step" style=" margin-left: 90px; font-size: 10px; z-index: 78" id="num2"><div>2</div></li>
            <li class="step" style="margin-left: 80px; font-size: 10px;" id="num3"><div>3</div></li>
            <li class="step" style="margin-left: 90px; font-size: 10px;" id="num4"><div>4</div></li>
            <li class="step" style="margin-left: 110px; font-size: 10px;" id="num5"><div>5</div></li>
            <li class="step" style="margin-left: 100px; font-size: 10px;" id="num6"><div>6</div></li>
            <li class="step" style="margin-left: 105px; font-size: 10px;" id="num7"><div>7</div></li>
            <li class="step" style="margin-left: 105px; font-size: 10px;" id="num8"><div>8</div></li>
            <li class="step" style="margin-left: 80px; font-size: 10px;" id="num9"><div>9</div></li>
            <li class="step" style="margin-left: 80px; font-size: 10px;" id="num10"><div>10</div></li>
        </ul>

        <ul id="progressbar">
        <li style="padding-right: 40px;"> WHO AM I? </li>
        <li style="padding-right: 30px;"> MY HEALTH </li>
        <li style="padding-right: 20px;"> COMFORT CARE </li>
        <li style="padding-right: 30px;"> QUALITY OF LIFE </li>
        <li style="padding-right: 40px;"> PAUSE FOR THOUGHT </li>
        <li style="padding-right: 40px;"> DNR </li>
        <li style="padding-right: 15px;"> MEDICAL INTERVENTIONS </li>
        <li style="padding-right: 20px;"> BRAIN FUNCTION </li>
        <li style="padding-right: 20px;"> EVALUATION </li>
        <li> CONFIRM/SHARE </li>
        </ul>
        </div> -->


    <div class="stepBox">

        <form action="{{route('submitform')}}" method="POST" id="regdiv">
            @csrf
            <div class="tab" id="step1">
                <h2 class="stepBox_header">Step 1:</h2>
                <p><b>Which of these quotes best represent your wishes:</b></p>
                <img class="img_class" src="bestendings_pics\QuoteGr.png">
                <ul style="list-style: none; font-size: 14px; line-height: 1.7;">
                    <li>
                        <input type="radio" value="value1" name="step1"><label>“Do not go gentle into that good night, Old age should burn and <br>rage at close of day; Rage, rage against the dying of the light.” – Dylan Thomas</label><br>
                    </li>
                    <li>
                        <input type="radio" value="value2" name="step1"><label>“I’ve told my children that when I die, to release balloons in the sky to celebrate that I graduated: for me death is a graduation.” – Elizabeth Kubler Ross</label><br>
                    </li>
                    <li>
                        <input type="radio" value="value3" name="step1"><label>“To the organized mind, death is but the next great adventure.” – JK Rowling</label><br>
                    </li>
                    <li>
                        <input type="radio" value="value4" name="step1"><label>“Miss me, but let me go, for this is a journey we all must take” – Amy Louise Kerswell</label><br>
                    </li>

                </ul>




                    <!-- <input type="button" value="continue" class="next_btn" onclick="changeStep()"> -->
            </div>

            <div class="tab" id="step2" style="display: none;">
                <h2 class="stepBox_header">Step 2: How's your health now?</h2>
                <img class="img_class2" src="bestendings_pics\HealthGr.png">
                <div style="font-size: 14px; line-height: 1.7;">
                <p>Many people live with one or more health issues, and still consider<br> themselves healthy.</p>
                <p><b>Examples of chronic illness</b> diabetes, arthritis, rheumatoid disease, Crohn’s<br> disease, heart disease, mental illness, asthma, digestion, kidney disease,<br> diabetes.</p>
                <p><b>Examples of terminal or life-limiting illness</b> Dementia, Parkinson’s, ALS, MS, some cancers, Kidney Failure, Lung Disease,</p>
                <p>How would you describe your current health? (check all that apply)</p>

                </div>
                <label for="step2Checkbox" style="font-family: Verdana; font-size: 16px; font-weight: bold;">I describe myself as: (check all that apply) </label>
                <div style="font-size: 14px; line-height: 1.7;" id="step2Checkbox">
                <input type="checkbox" name="Healthy" value="Healthy">
                <label for="Healthy"> Healthy </label><br>
                <input type="checkbox" name="Healthy" value="Healthy">
                <label for="Healthy"> In good health </label><br>
                <input type="checkbox" name="Healthy" value="Healthy">
                <label for="Healthy"> Living with chronic illness </label><br>
                <input type="checkbox" name="Healthy" value="Healthy">
                <label for="Healthy"> Living with terminal illness </label><br>
                </div>

            </div>


            <div class="tab" id="step3" style="display: none;">
                <h2 class="stepBox_header">Step 3: Comfort Care</h2>
                <img class="img_class3" src="bestendings_pics\Comfort.png">
                <blockquote class="granger"><h3 style="padding-left: 20px;"><em>"See and treat patients as people, don't reduce<br> them to a disease."– Dr Kate Granger</em></h3></blockquote>
                <div style="font-size: 14px; line-height: 1.7;">
                    <p>Whether or not there’s a medical solution to make your life better, even if you can’t speak for yourself, your BestEndings Advance Directives can still include comfort care (also called <a href="https://bestendings.com/bestendings-advance-directives/">Palliative Care</a>).</p>
                    <label style="font-family: Verdana; font-weight: bold; font-size: 16px;">Comfort is important to me. If I can’t speak for myself, I want to be as free of suffering as possible. I direct the following comfort measures: (check all that apply)</label>
                    <br><input type="checkbox" name="Pain" value="pain">
                    <label for="pain">Pain medication</label><br>
                    <input type="checkbox" name="medication" value="medication">
                    <label for="medication">Pain medication, even if it hastens my death</label><br>
                    <input type="checkbox" name="Relieve" value="Relieve">
                    <label for="Relieve">Relieve shortness of breath</label><br>
                    <input type="checkbox" name="Clear" value="Clear">
                    <label for="Clear">Clear my airways</label><br>
                    <input type="checkbox" name="agitation" value="agitation">
                    <label for="agitation">Relieve agitation (feeling uncomfortable in my own skin)</label><br>
                    <input type="checkbox" name="constipation" value="constipation">
                    <label for="constipation">Relieve constipation</label><br>
                    <input type="checkbox" name="discomfort" value="discomfort">
                    <label for="discomfort">Relieve discomfort from infections </label><br>
                    <input type="checkbox" name="Mouth" value="Mouth">
                    <label for="Mouth">Mouth care (dry mouth, mouth sores, flossing) </label><br>
                    <input type="checkbox" name="Skin" value="Skin">
                    <label for="Skin">Skin care (bed sores, dry skin)</label><br>
                    <input type="checkbox" name="Posit" value="Posit">
                    <label for="Posit">Position for comfort</label><br>
                    <input type="checkbox" name="Splint" value="Splint">
                    <label for="Splint">Splint for comfort</label><br>
                    <input type="checkbox" name="Palliative" value="Palliative">
                    <label for="Palliative">Palliative chemotherapy (for comfort, not cure)</label><br>
                    <input type="checkbox" name="radiation" value="radiation">
                    <label for="radiation">Palliative radiation (for comfort, not cure)</label><br>
                    <input type="checkbox" name="surgery" value="surgery">
                    <label for="surgery">Palliative surgery (for comfort, not cure)</label><br>
                    <input type="checkbox" name="Complementary" value="Complementary">
                    <label for="Complementary">Complementary health care providers, for example Social Worker, Personal Support, Complementary Medicine (massage acupuncture), Spiritual Care</label><br>
                    <input type="checkbox" name="Other" value="Other" onclick="chkbxFunction()" id="otherCheck">
                    <label for="Other">Other personal requests</label><br>
                    <input type="checkbox" name="Life" value="Life" onclick="chkbxFunction2()" id="lifeCheck">
                    <label for="Life">Life’s small pleasures</label><br>
                    <br>
                </div>
                <div id="otherText" style="display: none;">
                    <p style="font-family: Verdana; font-weight: bold; font-size: 16px;">Other Requests</p>
                    <textarea class="txt1"></textarea><br>
                </div>
                <div id="smallText" style="display: none;">
                    <p style="font-family: Verdana; font-weight: bold; font-size: 16px;">Small Pleasures</p>
                    <textarea class="txt1"></textarea><br>
                </div>
            </div>

            <div class="tab" id="step4" style="display: none;">
            <h2 class="stepBox_header">Step 4: Quality of Life</h2>
            <img class="img_class4" src="bestendings_pics\QOLGr.png">
            <div style="font-size: 14px; line-height: 1.7;">
                <p>Any intervention or procedure may affect the <a href="https://bestendings.com/quality-life-comfort/">quality of life</a> you had before.</p>
                <p>Consider your quality of life now and the things that are important to you. If<br> you cannot speak for yourself, the instructions you leave with loved ones<br> about medical interventions and treatments may depend on:</p>
                <ul style="font-weight: bold; padding-left: 10px;">
                    <li>your overall health</li>
                    <li>your family health history</li>
                    <li>how long the intervention will be required</li>
                    <li>possible side effects or complications from the intervention</li>
                    <li>how long it may take to recover</li>
                    <li>how your quality of life will be affected when you recover</li>
                </ul>
            <p>You can also direct that you want to let nature take its course –Allow Natural Death (AND)  – while ensuring you are made comfortable.</p>
            </div>

            <div>
                <div id="ConsiderQuality">
                    <label class="radioLabel" for="ConsiderQuality">Considering quality of life, I consent to interventions or treatment if, when I recover, I can live independently</label><br>
                    <input class="yesNo4" type="radio" name="ConQual" value="yes">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual" value="no">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality1">
                    <label class="radioLabel" for="ConsiderQuality1">I consent to interventions or treatment if, when I recover, I can eat and drink on my own</label><br>
                    <input class="yesNo4" type="radio" name="ConQual1" value="yes1">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual1" value="no1">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality2">
                    <label class="radioLabel" for="ConsiderQuality2">I consent to interventions or treatment if, when I recover, I can go to the toilet by myself </label><br>
                    <input class="yesNo4" type="radio" name="ConQual2" value="yes2">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual2" value="no2">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality3">
                    <label class="radioLabel" for="ConsiderQuality3">I consent to interventions or treatment if, when I recover, my brain will function as before procedure</label><br>
                    <input class="yesNo4" type="radio" name="ConQual3" value="yes3">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual3" value="no3">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality4">
                    <label class="radioLabel" for="ConsiderQuality4">I consent to interventions or treatment if, when I recover, I need help to eat and drink </label><br>
                    <input class="yesNo4" type="radio" name="ConQual4" value="yes4">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual4" value="no4">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality5">
                    <label class="radioLabel" for="ConsiderQuality5">I consent to interventions or treatment if, when I recover, I need help going to the toilet</label><br>
                    <input class="yesNo4" type="radio" name="ConQual5" value="yes5">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual5" value="no5">No<br>
                </div>
            </div>
        <br>
            <div>
                <div id="ConsiderQuality6">
                    <label class="radioLabel" for="ConsiderQuality6">I consent to interventions or treatment if, when I recover, my quality of life is severely affected and I will need someone to take care of me </label><br>
                    <input class="yesNo4" type="radio" name="ConQual6" value="yes6">Yes<br>
                    <input class="yesNo4" type="radio" name="ConQual6" value="no6">No<br>
                </div>
            </div>
        <br>
<!-- {inja} -->
<h2 class="stepBox_header">Recovery time</h2>
<p class="normalText">How long it takes to recover may be something you wish to<br> consider. Recovery time after treatments can vary.</p><br>
<img class="img_class4_1" src="bestendings_pics\recoveryGr.png"><br>
<label for="recoveris" class="radioLabel">I consent to interventions or treatments if recovery is<br> expected to be</label>
<div id="recoveris">
    <ul class="normalText" style="list-style: none; font-family: 'PT Sans', Helvetica, Arial, Lucida, sans-serif;
}">
        <li>
            <input type="checkbox" name="oneto3" value="oneto3">
            <label for="oneto3">1 to 3 months</label><br>
        </li>
        <li>
            <input type="checkbox" name="threeTo6" value="threeTo6">
            <label for="threeTo6">3 to 6 months</label><br>
        </li>
        <li>
            <input type="checkbox" name="sixTo12" value="sixTo12">
            <label for="sixTo12">6 to 12 months</label><br>
        </li>
        <li>
            <input type="checkbox" name="anyP" value="anyP">
            <label for="anyP">any period of time</label><br>
        </li>
    </ul>
</div>
<br><input type="checkbox" name="Heroic" value="Heroic">
<label for="Heroic" class="radioLabel">I do NOT consent to any Heroic Measures, Proceedures or Treatments. My wish is to let nature take its course - Allow Natural Death (AND) - while ensuring my comfort.</label>
            </div>

            <div class="tab" id="step5" style="display: none;">
                <h2 class="stepBox_header">Step 5: You're halfway there!</h2>
                <img class="img_class5" src="bestendings_pics\halfway-.png">
                <div class="normalText2">
                    <p style="color: #008000;">You’ve answered 50% of the questionnaire.</p>
                    <p style="color: #008000;">Time to pause for thought. Here are a couple of things to keep in mind about the realities and complications of life’s end.</p>
                    <p style="color: #008000;">Unlike past generations, most people have not seen someone dying. We are not familiar with the process or stages of dying. The reality can be scary and upsetting</p>

                    <p><strong>Often the expectation is that modern medicine can offer a solution to everything.</strong></p>
                    <ul style="list-style-type:disc;">
                        <li><strong>
                            Medical professionals are sometimes solely focused on saving life at all costs. For many health professionals saving lives is the very reason they got into the business.
                        </strong></li>
                        <li><strong>
                            Comfort and peace of mind can be downplayed or considered less important than trying for a cure or extending life.
                        </strong></li>
                        <li><strong>
                            It may fall to you or your loved ones to make decisions about when life is worth prolonging.
                        </strong></li>
                        <li><strong>
                            Decisions about when to try to keep on keeping on can be difficult and heart-rending.
                        </strong></li>
                        <li><h2 style="text-align: center;">
                            <span style="color: #008000;">
                            <strong>
                            <i>"When you're walking through hell, keep on walking"</i> - Winston Churchill
                        </strong></span></h2>
                    </li>
                    </ul>
                </div>

            </div>

            <div class="tab" id="step6" style="display: none;">
                <h2 class="stepBox_header">Step 6: Revive me or Do Not Revive Me (DNR)</h2>
                <img src="bestendings_pics\DNRgr.png">
                <p>For some,<strong> saving or prolonging</strong> life is what's<strong> most important.</strong> For
                others,<strong>quality of life</strong> is what's most important. It can be hard for people (including family and friends)
                to accept your choice. That's why it is so important to<strong> share</strong> your wishes with your
                <strong>decision-maker</strong> (s) and<strong> everyone who matters</strong> to you.</p>

                <p>You can direct:<strong> Do Not Revive</strong> by Cardio Pulmonary Resuscitation (CPR);
                <strong>do not connect</strong> to a Breathing Machine.</p><br><br>

                <label class="label" for="DoNotDNR">
                    Do Not Revive me (DNR): I have considered the options, and my decision is to direct letting nature take its course – Allow Natural Death (AND) – while ensuring my comfort.
                </label>
                <div id="DoNotDNR">
                    <input type="checkbox" name="yesDNR" value="yesDNR">
                    <label for="yesDNR">Yes</label>
                </div>
            <br>
            <label for="Revivediv" class="label">DO revive me: if my heart stops, I consent to being revived by CPR (cardio-pulmonary resuscitation). </label>
                <div id="Revivediv">
                    <input type="radio" name="ReviveMe" value="ReviveMe">Revive me: <br>
                    I agree to CPR (cardio-pulmonary resuscitation)<br>
                    I understand that there’s a good chance CPR will leave me bruised and possibly with broken ribs<br>
                    <input type="radio" name="NotRevive" value="NotRevive">Do Not Revive me (DNR)<br>
                </div>
            <br>
            <div class="QuestionMark">
                <img src="bestendings_pics\question-ico.gif"  id="QuestionMark">
                <span class="tooltip">"Survival rates for CPR:
                    All hospital patients: 15% Frail elders:  <5% Individuals with advanced chronic illness: 1%> </span>
            </div>
        <br>
            <label for="holediv" class="label">If I stop breathing, I consent to a ventilator (breathing machine) tube down my throat and if necessary tracheostomy (hole in my neck) </label>
            <div id="holediv">
                <input type="radio" name="holeYes" value="holeYes">Yes<br>
                <input type="radio" name="holeNo" value="holeNo">No<br>
            </div>

            </div>

            <div class="tab" id="step7" style="display: none;">
                <h2 class="stepBox_header">Step 7: Life-prolonging medical Interventions</h2>
                <img src="bestendings_pics\MachineGr.png">
                <p>Along with<strong> CPR to restart your heart,</strong> and Breathing Machines when you're unable to breath on your own, there may be other life-prolonging interventions to consider, if you become too ill or injured to speak for yourself.</p>
               <p>One of the hardest decisions may be whether or not to supplement eating and drinking <strong>if you are unable to eat and drink on your own.</strong> </p>
               <p>Consider if you would consent to <strong>a feeding tube</strong> - whether in your nose, or stomach.</p>
               <p>If you want neither,  you can direct that you want to voluntarily<strong> stop eating and drinking </strong> (VSED)</p><br>

                <div>
                    <label for="prolong" class="label">To prolong my life, if I am unable to eat or drink, I consent to a feeding tube in the nose (NG)</label>
                    <div id="prolong">
                        <input type="radio" name="NGprolong" value="NGprolong">Yes<br>
                        <input type="radio" name="NGprolong" value="NGprolong">No<br>
                    </div>
                </div>
            <br>
                <div>
                    <label for="PEGprolong" class="label">To prolong my life, if I am unable to eat or drink, I consent to a feeding tube in the stomach (PEG)</label>
                    <div id="PEGprolong">
                        <input type="radio" name="PEGprolong" value="PEGprolong">Yes<br>
                        <input type="radio" name="PEGprolong" value="PEGprolong">No<br>
                    </div>
                </div>
            <br>
                <div class="QuestionMark">
                    <img src="bestendings_pics\question-ico.gif"  id="QuestionMark">
                    <span class="tooltip">Feeding tubes are not recommended for Dementia patients</span>
                </div>
            <br>
                <div>
                    <label for="VSEDprolong" class="label">I do NOT want to prolong my life using feeding tubes; I want the option to voluntarily stop eating and drinking (VSED)</label>
                    <div id="VSEDprolong">
                        <input type="radio" name="VSEDprolong" value="VSEDprolong">Yes<br>
                        <input type="radio" name="VSEDprolong" value="VSEDprolong">No<br>
                    </div>
                </div>
            <br>
                <p>While not every decision can be foreseen or planned, you can direct that your wish is to save and prolong your life.</p>
            <br>
                <div>
                    <label for="vegetativeProlong" class="label">I DO want my life saved and prolonged even if I am in a permanent vegetative state</label>
                    <div id="vegetativeProlong">
                        <input type="radio" name="vegetativeProlong" value="vegetativeProlong">Yes<br>
                        <input type="radio" name="vegetativeProlong" value="vegetativeProlong">No<br>
                    </div>
                </div>
            <br>
                <div>
                    <label for="brainProlong" class="label">I DO want my life saved and prolonged even if I am brain dead</label>
                    <div id="brainProlong">
                        <input type="radio" name="brainProlong" value="brainProlong">Yes<br>
                        <input type="radio" name="brainProlong" value="brainProlong">No<br>
                    </div>
                </div>
            <br>
                <div>
                    <label for="burdenProlong" class="label">I DO want my life saved and prolonged even if I won’t be able to live as before because my brain and abilities will be significantly damaged, and I am a burden on others </label>
                    <div id="burdenProlong">
                        <input type="radio" name="burdenProlong" value="burdenProlong">Yes<br>
                        <input type="radio" name="burdenProlong" value="burdenProlong">No<br>
                    </div>
                </div>
            <br>
            <label class="label" for="HeroicMeasures">
                I consent to Heroic Measures: I have considered my options, and I want my life saved and prolonged, while ensuring I am comfortable.
            </label>
            <div id="HeroicMeasures">
                <input type="checkbox" name="yesHeroicMeasures" value="yesHeroicMeasures">
                <label for="yesHeroicMeasures">Yes</label>
            </div>
            </div>

            <div class="tab" id="step8" style="display: none;">
                <h2 class="stepBox_header">Step 8: Dementia or other loss of Brain function</h2>
                <img src="bestendings_pics\BrainGr.png">
                <p><strong>Dementia</strong> (Alzheimer’s, Lewey body and Vascular Dementia ) over time, will likely rob you of your mental abilities</p>
                <p>Should you have <strong>a Stroke,</strong> or be diagnosed with a disease such as <strong>Parkinson’s </strong>you may not be able to speak for yourself in the event of a medical decision.</p>
                <p>A <strong>brain injury</strong> or <strong>accident</strong> can also leave your <strong>brain damaged.</strong></p>
                <p>If you are not competent to speak for yourself consider if you would like <strong>medical procedures</strong> or <strong>interventions to prolong your life.</strong></p>
                <p>If your wish is not to prolong your life, but rather to let nature take its course, your direction is to <p>Allow Natural Death</p> (AND) while ensuring your comfort.</p>

                <div>
                    <label for="AllowND" class="label">I have considered the options,and my wish is to let nature take its course – Allow Natural Death (AND) – while ensuring comfort </label>
                    <div id="AllowND">
                        <input type="radio" name="AllowND" value="AllowND">Yes<br>
                        <input type="radio" name="AllowND" value="AllowND">No<br>
                    </div>
                </div>
            <br>
            <p>If you have already been diagnosed with Dementia (Alzheimer's, Lewy Body or Vascular Dementia) and know you likely will become incompetent to speak for yourself, consider if you would want to be revived if your heart stops or you stop breathing.</p>
            <br>

            <div>
                <label for="eightStep1" class="label">As I've been diagnosed with Dementia and know I likely will become incompetent to speak for myself, I direct the following if my heart stops or I stop breathing: Revive me even if I no longer recognize my loved ones </label>
                <div id="eightStep1">
                    <input type="radio" name="eightStep1" value="eightStep1">Yes<br>
                    <input type="radio" name="eightStep1" value="eightStep1">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep2" class="label">Revive me even if I can no longer eat or drink by myself </label>
                <div id="eightStep2">
                    <input type="radio" name="eightStep2" value="eightStep2">Yes<br>
                    <input type="radio" name="eightStep2" value="eightStep2">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep3" class="label">Revive me even if I can no longer control my bladder (pee) or bowel (poop) movements</label>
                <div id="eightStep3">
                    <input type="radio" name="eightStep3" value="eightStep3">Yes<br>
                    <input type="radio" name="eightStep3" value="eightStep3">No<br>
                </div>
            </div>
        <br>
                <div>
                <label for="eightStep4" class="label">Revive me even if I've become disoriented and wander</label>
                <div id="eightStep4">
                    <input type="radio" name="eightStep4" value="eightStep4">Yes<br>
                    <input type="radio" name="eightStep4" value="eightStep4">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep5" class="label">Revive me even if I am often violent or disruptive </label>
                <div id="eightStep5">
                    <input type="radio" name="eightStep5" value="eightStep5">Yes<br>
                    <input type="radio" name="eightStep5" value="eightStep5">No<br>
                </div>
            </div>
        <br>
            <p>If  you stop breathing do you want these heroic interventions to  save or prolong your life?</p>
            <div>
                <label for="eightStep6" class="label">If I can't breathe on my own, I consent to Mechanical ventilation (breathing machine) </label>
                <div id="eightStep6">
                    <input type="radio" name="eightStep6" value="eightStep6">Yes<br>
                    <input type="radio" name="eightStep6" value="eightStep6">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep7" class="label">If necessary, I consent to a Traechostomy (breathing tube inserted via hole in your neck)</label>
                <div id="eightStep7">
                    <input type="radio" name="eightStep7" value="eightStep7">Yes<br>
                    <input type="radio" name="eightStep7" value="eightStep7">No<br>
                </div>
            </div>
        <br>
            <p>If your condition or illness progresses to the point where you can’t eat or drink on your own, consider if you would you want nutrition via feeding tubes to prolong your life.</p>
            <div>
                <label for="eightStep8" class="label">If I can't eat or drink on my own, I consent to a Feeding tube in the nose (NG)</label>
                <div id="eightStep8">
                    <input type="radio" name="eightStep8" value="eightStep8">Yes<br>
                    <input type="radio" name="eightStep8" value="eightStep8">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep9" class="label">If I can't eat or drink on my own, I consent to a Feeding tube in my stomach (PEG)</label>
                <div id="eightStep9">
                    <input type="radio" name="eightStep9" value="eightStep9">Yes<br>
                    <input type="radio" name="eightStep9" value="eightStep9">No<br>
                </div>
            </div>
        <br>
            <img src="bestendings_pics\question-ico.gif">
            <p>If you can't speak for yourself, consider if you would like these common life-prolonging interventions and treatments:</p>
            <div>
                <label for="eightStep10" class="label">To prolong my life, I consent to Dialysis</label>
                <div id="eightStep10">
                    <input type="radio" name="eightStep10" value="eightStep10">Yes<br>
                    <input type="radio" name="eightStep10" value="eightStep10">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep11" class="label">To prolong my life I consent to antibiotics for infections (eg bladder,chest)</label>
                <div id="eightStep11">
                    <input type="radio" name="eightStep11" value="eightStep11">Yes<br>
                    <input type="radio" name="eightStep11" value="eightStep11">No<br>
                </div>
            </div>
        <br>
            <div>
                <label for="eightStep12" class="label">Along with any treatment, proceedure or interventions, please ensure my comfort</label>
                <div id="eightStep12">
                    <input type="radio" name="eightStep12" value="eightStep12">Yes<br>
                    <input type="radio" name="eightStep12" value="eightStep12">No<br>
                </div>
            </div>
        <br>
            </div>

            <div class="tab" id="step9" style="display: none;">
                <h2 class="stepBox_header">Step 9: Evaluation </h2>
                <img src="bestendings_pics\EvalGr.png" >
                <p>Before the last step,  please help us make this process better. Your evaluation and input is very much valued!</p>
                <label for="Directives" class="label">BestEndings Advance Directives step-by-step div was easy to use</label>
                <div id="Directives">
                    <ul style="list-style: none;">
                        <li>
                         <input type="checkbox" name="DirectivesYes" value="DirectivesYes">
                         <label for="DirectivesYes"></label>Yes<br>
                        </li>
                        <li>
                         <input type="checkbox" name="DirectivesNo" value="DirectivesNo">
                         <label for="DirectivesNo"></label>No<br>
                     </li>
                        <li>
                         <input type="checkbox" name="DirectivesSomewhat" value="DirectivesSomewhat">
                            <label for="DirectivesSomewhat"></label>Somewhat<br>
                     </li>
                 </ul>
                </div>
            <br>
                <label for="sevenTOone" class="label">BestEndings Advance Directives was helpful: 7 being the most helpful</label>
                <div id="sevenTOone">
                    <input type="radio" name="seven" value="seven">7 &nbsp &nbsp
                    <input type="radio" name="six" value="six">6 &nbsp &nbsp
                    <input type="radio" name="five" value="five">5 &nbsp &nbsp
                    <input type="radio" name="four" value="four">4 &nbsp &nbsp
                    <input type="radio" name="three" value="three">3 &nbsp &nbsp
                    <input type="radio" name="two" value="two">2 &nbsp &nbsp
                    <input type="radio" name="one" value="one">1 &nbsp &nbsp
                </div>
            <br>
            <label for="InfoDirectives" class="label">Indivation on BestEndings Advance Directives was:</label>
                <div id="InfoDirectives">
                    <ul style="list-style: none;">
                        <li>
                         <input type="checkbox" name="Helpful" value="Helpful">
                         <label for="Helpful"></label>Helpful<br>
                        </li>
                        <li>
                         <input type="checkbox" name="someHelpful" value="someHelpful">
                         <label for="someHelpful"></label>Somewhat helpful<br>
                     </li>
                        <li>
                         <input type="checkbox" name="Missing" value="Missing">
                            <label for="Missing"></label>Missing the following:<br>
                     </li>
                 </ul>
                </div>
                <br>
                <label for="moreInfo" class="label">I would like more indivation on:</label>
                <div id="moreInfo">
                    <ul style="list-style: none;">
                        <li>
                         <input type="checkbox" name="LongTerm" value="LongTerm">
                         <label for="LongTerm">Long Term Care</label><br>
                        </li>
                        <li>
                         <input type="checkbox" name="HomeCare" value="HomeCare">
                         <label for="HomeCare">Home Care</label><br>
                        </li>
                        <li>
                         <input type="checkbox" name="FuneralPlann" value="FuneralPlann">
                            <label for="FuneralPlann">Funeral Planning</label><br>
                        </li>
                        <li>
                            <input type="checkbox" name="EstatePlann" value="EstatePlann">
                               <label for="EstatePlann">Estate Planning</label><br>
                        </li>
                        <li>
                            <input type="checkbox" name="LegacyPlann" value="LegacyPlann">
                               <label for="LegacyPlann">Legacy Planning</label><br>
                        </li>
                 </ul>
                </div>
            </div>

            <div class="tab" id="step10" style="display: none;">
                <h2 class="stepBox_header">Step 10: Last step. Confirm you're of sound mind Way to go. You made to the end.</h2>
                <img src="bestendings_pics\DoneGr.png">
                <p><strong>Now you just have to confirm you’re of sound mind. Easy, right?</strong></p>
                <label for="dateInput" class="label">Date</label>
                <input type="text" placeholder="09/02/2020" id="dateInput"><br>
                <br><div id="FirstLastName"> <strong>I</strong> <input type="text" placeholder="First Name *">&nbsp &nbsp <input type="text" placeholder="Last Name *"> <label for="FirstLastName" class="label"> am competent *</label> </div> <br>

                <ul style="list-style: none;">
                    <li>
                     <input type="checkbox" name="ownDecisions" value="ownDecisions">
                     <label for="ownDecisions">I am able to make my own decisions and am not being forced or influenced.</label><br>
                    </li>
                    <li>
                     <input type="checkbox" name="acceptConsequences" value="acceptConsequences">
                     <label for="acceptConsequences">I am a competent adult who understands and accepts the consequences of my decisions.</label><br>
                    </li>
                    <li>
                     <input type="checkbox" name="healthChange" value="healthChange">
                        <label for="healthChange">As my health changes, my options and decisions may change</label><br>
                    </li>
                    <li>
                        <input type="checkbox" name="soundMind" value="soundMind">
                           <label for="soundMind">know that while I’m of sound mind, I can change these decisions whenever I want</label><br>
                    </li>
                    <li>
                        <input type="checkbox" name="possibleSituation" value="possibleSituation">
                           <label for="possibleSituation">I can’t plan for or consider decisions for every possible health situation, so I will explain what’s important to me for living</label><br>
                    </li>
             </ul>
                    <br>
                <label for="EmailAddress">Thank you for completing your BestEndings Advance Directives. If your health changes or you learn more about your end-of-life journey, you can always complete a new BestEndings Advance Directives.</label>
                <input type="text" placeholder="Email Address *" id="EmailAddress">
                <br>
                <p>where to send your BestEndings Advance Directives</p>
                <input type="checkbox" name="InviteOthers" value="InviteOthers" id="InviteOthers" onclick="chkbxFunction3()">
                <label for="InviteOthers" class="label"> Invite others to create their own BestEndings Advance Directives. Add emails to share your BestEndings Advance Directives </label><br>
                <div id="emailAddresses" style="display: none;">
                    <label for="emailAddress1" class="label">email address</label>
                    <input type="text" id="emailAddress1"><br>
                    <label for="emailAddress1" class="label">email address</label>
                    <input type="text" id="emailAddress1"><br>
                    <label for="emailAddress1" class="label">email address</label>
                    <input type="text" id="emailAddress1"><br>
                </div>


            </div>


              <div id="button1">
                <div style="float:right;">
                  <button style="display: none;" class="prevBtn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="nextBtn" style="display: none" type="submit" id="subBtn" onclick="nextPrev(1)">Submit</button>
                  <button class="nextBtn" type="button" id="nextBtn" onclick="nextPrev(1)">Continue</button>

                </div>
              </div>
    </form>
    </div>
    </div>
</body>
</html>
