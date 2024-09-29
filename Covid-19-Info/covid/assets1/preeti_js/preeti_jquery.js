function check()
{
 	var question1=document.quiz.question1.value;
 	var question2=document.quiz.question2.value;
 	var question3=document.quiz.question3.value;
 	var question4=document.quiz.question4.value;
 	var correct=0;
 	 if(question1 == "option3")
 	 {
 	 	correct++;
 	 }
 	 if(question2 == "option3")
	{
		correct++;
	}
	if(question3 == "option1")
	{
		correct++;
	}
	if(question4 == "option1")
	{
		correct++;
	}

	var messages= ["Please take a corona test","Recommend you to 'Please self Qurantine for 7 days'",
					"Please answer the question"];
	var range;
	if(correct<1)
	{
		range=2;
	}
	if(correct>0 && correct<3)
	{
		range=1;
	}
	if(correct>2)
	{
		range=0;
	}
	if(correct==0)
	{
		range=2;
	}
	//document.getElementById("after_submit").style.visibility="visible";
	document.getElementById("message").innerHTML=messages[range];
	alert(messages[range]);
	document.getElementById("number_correct").innerHTML="you got" + correct + "correct";

}





