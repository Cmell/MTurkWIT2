<html>
<meta charset="UTF-8">
<head>
  <title>Study Introduction</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://surveyjs.azureedge.net/1.0.13/survey.jquery.min.js"></script>
</head>
<body>
  <div id="surveyContainer" style="width:800px; margin:auto; padding:15px"></div>
</body>
<script>
document.body.style.backgroundColor = '#d9d9d9';
//TODO: change the link to the consent form.

<?php
echo "var mturkid='".$_GET['mturkid']."';";
 ?>
var surveyJSON = {
 "title": "Study Introduction",
 "focusFirstQuestionAutomatic": false,
 "pages": [
  {
   "name": "InformedConsent",
   "elements": [
    {
     "type": "html",
     "name": "WelcomeText",
     "html": "<h3>Welcome to the Study</h3>\n\n<p>\nYou are being asked to participate in a research project. As such, you are entitled to information concerning the study before you begin, and you must provide consent to participate. Please click the link below to review the consent information, and select \"I agree to participate\" if you consent to be a part of the study.\n</p>\n\n<a href=\"#\" onclick=\"window.open('./Resources/15-0511 Consent Form - MTurk2.pdf', 'Informed Consent');\">Click here to view the document. A new window may appear.</a>"
    },
    {
     "type": "radiogroup",
     "name": "ConsentQuestion",
     "title": "Do you agree to participate?",
     "isRequired": true,
     "choices": [
      {
       "value": "yes",
       "text": "Yes, I agree to participate."
      },
      {
       "value": "noconsent",
       "text": "No, I would not like to participate."
      }
     ]
    }
   ]
  },
  {
   "name": "NoConsentExit",
   "elements": [
    {
     "type": "html",
     "name": "Thanks1",
     "html": "<h3>Thank you!</h3>\n\n<p>\nThank you for your interest in our study! Because you did not consent to participate, there is no further action you should take. You may close this browser window.\n</p>"
    }
   ],
   "visibleIf": "{ConsentQuestion} != 'yes'"
  },
  {
   "name": "TakeTime",
   "elements": [
    {
     "type": "html",
     "name": "question1",
     "html": "<p>In this study we are interested in your ability to perform a speeded judgment.</p>\n\n<ul>\n <li>The task is challenging and requires your undivided attention.</li>\n <li>For this reason, you will need to complete the study in a quiet place where you will not be interrupted for a 15-20 minute window.</li>\n <li>You cannot complete the study on a mobile device.</li>\n</ul>"
    },
    {
     "type": "radiogroup",
     "name": "TimeToTakeQuestion",
     "title": "If you do not have the time or environment to complete the study right now please click the exit button below and you will be taken to the end of the study. Otherwise, click Continue with the study.",
     "isRequired": true,
     "choices": [
      {
       "value": "participate",
       "text": "Continue with the study."
      },
      {
       "value": "no",
       "text": "Exit the study."
      }
     ]
    }
   ],
   "visible": false,
   "visibleIf": "{ConsentQuestion} = 'yes'"
  },
  {
   "name": "NoTimeExit",
   "elements": [
    {
     "type": "html",
     "name": "question3",
     "html": "<h3>Thank you!</h3>\n\n<p>\nThank you for your interest in our study! Because you declined to participate, there is no further action you should take. You may close this browser window.\n</p>"
    }
   ],
   "visible": false,
   "visibleIf": "{TimeToTakeQuestion} = 'no'"
  }
 ],
 "showCompletedPage": false,
 "pagePrevText": "Back",
 "pageNextText": "Next",
 "completeText": "Next"
};
var survey = new Survey.Model(surveyJSON);
$("#surveyContainer").Survey({
  model:survey,
  onComplete:endIntro
});
function endIntro(survey) {
  // Test to make sure we should go on.
  if (survey.data.ConsentQuestion == 'yes' &&
  survey.data.TimeToTakeQuestion == 'participate') {
    window.location = './WIT/seqprime.php?mturkid='+mturkid;
  };
}
</script>
</html>
