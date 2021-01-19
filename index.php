<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Form</title>
    <style>
    /*User Form*/
.advanceduserform{
	max-width:700px;
	margin:0 auto;
	text-align:center;
	margin-top:50px;
	margin-bottom:120px;
	position:relative;
}
.advanceduserform label{
	display:block;
	font-weight:bold;
	margin-bottom:10px;
}
.advanceduserform form {
	display:flex;
	align-items:center;
	justify-content:center;
}
.advanceduserform form > div{
	position:absolute;
	top:0px;
	opacity:0;
	z-index:-1;
	transition:.5s all ease-in;
	box-sizing:border-box;
}
.advanceduserform form  #e1{
	opacity:1;
	z-index:1;
}
.advanceduserform form  div input{
	transition:.5s all linear;
	box-sizing:border-box!important;
    background:red;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
.advanceduserform form  div input.yes{
	background: #0090e3!important;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
.advanceduserform form  div input:hover{
	background:#ff8400;
	color:#000;
	font-weight:bold;
}
.advanceduserform form  div input.yes:hover{
	color:#000;
	font-weight:bold;
}
.advanceduserform .message{
	opacity:0;
	height:0px;
	transition:.5s all linear;
	z-index:-1;
}
.advanceduserform .message.danger-message{
	background:red;
	color:#222;
	font-weight:bold;
	padding:10px;
	border-radius:4px;
}
.advanceduserform .message.success-message{
	background:green;
	color:#fff;
	padding:10px;
	border-radius:4px;
	font-weight:bold;
}
.advanceduserform .message.active{
	opacity:1;
	height:auto;
	z-index:1;
}
    </style>
</head>
<body>
<div class="advanceduserform">
<form action="" method="post">
        <div id="e1">
            <label for="">Are you over 18 years old?</label>
            <input class="yes" type="button" name=""  value="ja"  onclick="showElement(this,'2');">
            <input type="button" name=""  value="nee" onclick="exitUser(this);">
        <br>
        </div>
        <div id="2">
            <label for="">Is there an emergency and are you looking for a home?</label>
            <input class="yes" type="button" name=""  value="ja"  onclick="showElement(this,'3');">
            <input type="button" name=""  value="nee" onclick="exitUser(this);">
        </div>

        <div id="3">
            <label for="children">Do you have children under the age of 18?</label>
            <input class="yes" type="button" name=""  value="ja"  onclick="showElement(this,'4');">
            <input type="button" name=""  value="nee" onclick="showElement(this,'5');">
        </div>

        <div id="4">
            <label for="withchild">Do you want to move to another home together with your child?</label>
            <input class="yes" type="button" name=""  value="ja"  onclick="showElement(this,'5');">
            <input type="button" name=""  value="nee" onclick="showElement(this,'5');">
        </div>

        <div id="5">
            <label for="partner">Do you have a partner?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'6');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'7');">
        </div>

        <div id="6">
            <label for="combinedincome">Is your combined income higher than € 47,325.- per year?</label>
            <input class="yes" type="button" name="combinedincome"  value="ja"  onclick="exitUser(this);">
            <input type="button" name="combinedincome"  value="nee" onclick="showElement(this,'8');">
        </div>

        <div id="7">
            <label for="partner">Is your income higher than € 34,050.- per year?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="exitUser(this);">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'9');">
        </div>

        <div id="8">
            <label for="partner">Does your ex-partner only stay in the house?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'9');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'9');">
        </div>

        <div id="9">
            <label for="partner">In which municipality do you want to apply for urgency?</label>
            <select name="municipality-area" id="municipality-area" onchange="showElement(this,'10');">
                <option value="" >municipality area 1</option>
                <option value="">municipality area 2</option>
            </select>
        </div>

        <div id="10">
            <label for="partner">How many years have you been registered in this municipality?</label>
            <select name="municipality-area" id="municipality-area" onchange="showElement(this,'11');">
                <option value="">Less than 1 year</option>
                <option value="">Longer than 1 year</option>
            </select>
        </div>

        <div id="11">
            <label for="partner">Do you live in this municipality?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'13');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'12');">
        </div>

        <div id="12">
            <label for="partner">What municipality do you live in?</label>
            <select name="municipality-area" id="municipality-area" onchange="showElement(this,'13');">
                <option value="">municipality area 1</option>
                <option value="">municipality area 2</option>
            </select>
        </div>

        <div id="13">
            <label for="partner">Do you have Dutch or European nationality?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'16');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'14');">
        </div>

        <div id="14">
            <label for="partner">What is your nationality?</label>
            <select name="municipality-area" id="municipality-area" onchange="showElement(this,'15');">
                <option value="">usa</option>
                <option value="">uk</option>
            </select>
        </div>

        <div id="15">
            <label for="partner">Is there a valid residence permit?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'14');">
            <input type="button" name="partner"  value="nee" onclick="exitUser(this);">
        </div>

        <div id="16">
            <label for="partner">Are you registered as a house-seeker?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'17');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'17');">
        </div>

        <div id="17">
            <label for="partner">Do you want to apply for a property due to a break-up or divorce?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'18');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'20');">
        </div>

        <div id="18">
            <label for="partner">Is there aggression or violence at home by your ex-partner?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'19');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'20');">
        </div>

        <div id="19">
            <label for="partner">Has a report been made to the police or a report has been made to a	
Authority?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'20');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'20');">
        </div>

        <div id="20">
            <label for="partner">Does the current problematic situation arise directly from your living situation?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'21');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'21');">
        </div>

        <div id="21">
            <label for="partner">Do you have a medical condition?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'22');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'24');">
        </div>

        <div id="22">
            <label for="partner">What type of medical condition do you have?</label>
            <select name="municipality-area" id="municipality-area" onchange="showElement(this,'23');">
                <option value="">usa</option>
                <option value="">uk</option>
            </select>
        </div>

        <div id="23">
            <label for="partner">Because of your medical condition, it is necessary for you to move to another	
moved into a house?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'24');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'24');">
        </div>

        <div id="24">
            <label for="partner">Do you have a rental debt?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'25');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'26');">
        </div>

        <div id="25">
            <label for="partner">Have you made a payment scheme for your rental debt?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'26');">
            <input type="button" name="partner"  value="nee" onclick="exitUser(this);">
        </div>

        <div id="26">
            <label for="partner">Do you have problematic debts?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'28');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'30');">
        </div>

        <div id="28">
            <label for="partner">Can you make it difficult or not to pay for your property because of the debts?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'29');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'30');">
        </div>

        <div id="29">
            <label for="partner">Are these financial debts that make you unable to pay for your property</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'30');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'30');">
        </div>

        <div id="30">
            <label for="partner">Do you receive or provide informal care and therefore request urgency?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'31');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'32');">
        </div>

        <div id="31">
            <label for="partner">Is the distance between the carer and carer greater than 5	Km?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'32');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'32');">
        </div>

        <div id="32">
            <label for="partner">Are you staying in an emergency shelter?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showElement(this,'33');">
            <input type="button" name="partner"  value="nee" onclick="showElement(this,'33');">
        </div>

        <div id="33">
            <label for="partner">Have you actively responded to housing in the last 3 months?</label>
            <input class="yes" type="button" name="partner"  value="ja"  onclick="showNotification();">
            <input type="button" name="partner"  value="nee" onclick="showNotification();">
        </div>

    </form>
    <div class="danger-message message">Sorry , you are not eligble for residence	urgency</div>
    <div class="success-message message"> You are not eligble for residence	urgency</div>
</div>
    <script>
          /*Get the user out*/
          function exitUser(malebutton){
            /*Hide all input by default*/
            const allElement = document.querySelectorAll('form > div');
            allElement.forEach(element=>{element.style.opacity='0'; element.style.zIndex='-1'});
            const alertElement = document.querySelector('.danger-message');
            alertElement.innerHTML = "You are not eligble for residence	urgency. Thank you!";
            alertElement.classList.add("active");
        }
        
        /*Show the country option*/
        function showElement(sourceElement,destinationId){
            /*Hide all input by default*/
            const allElement = document.querySelectorAll('form > div');
            allElement.forEach(element=>{element.style.opacity='0'; element.style.zIndex='-1'});
            document.getElementById(destinationId).style.opacity = '1';
            document.getElementById(destinationId).style.zIndex = '1';
        }

        /*Send NOtification*/
        function showNotification(){
          /*Hide all input by default*/
            const allElement = document.querySelectorAll('form > div');
            allElement.forEach(element=>{element.style.opacity='0'; element.style.zIndex='-1'});
            const alertElement = document.querySelector('.success-message');
            alertElement.innerHTML = "You are eligble for residence	urgency. Thank you!";
            alertElement.classList.add("active");
        }
    </script>
</body>
</html>