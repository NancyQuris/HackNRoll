@extends('layouts.app')

@section('title', 'Personality Test')

@section('content')

<link rel="stylesheet" href="/css/testform.css">

<form action="/answer" method = "POST" style="border:1px solid #ccc">
  @csrf
  <div class="container">
    <h1>Personality Test</h1>
    <p>Please answer all questions to get your personality.</p>
    <p>"1" Strongly Disagree; "2" Disagree; "3" Neutral; "4" Agree; "5" Strongly Agree</p>
    <hr>

    <label for="Q1"><b>q1. You consider yourself more practical than creative.</b></label><br>
    <input type="radio" value="choice1" name="q1" required> 1
    <input type="radio" value="choice2" name="q1" required> 2
    <input type="radio" value="choice3" name="q1" required> 3
    <input type="radio" value="choice4" name="q1" required> 4
    <input type="radio" value="choice5" name="q1" required> 5<br>

    <label for="Q2"><b>q2. People can rarely upset you.</b></label><br>
    <input type="radio" value="choice1" name="q2" required> 1
    <input type="radio" value="choice2" name="q2" required> 2
    <input type="radio" value="choice3" name="q2" required> 3
    <input type="radio" value="choice4" name="q2" required> 4
    <input type="radio" value="choice5" name="q2" required> 5<br>

    <label for="Q3"><b>q3. Your travel plans are usually well thought out.</b></label><br>
    <input type="radio" value="choice1" name="q3" required> 1
    <input type="radio" value="choice2" name="q3" required> 2
    <input type="radio" value="choice3" name="q3" required> 3
    <input type="radio" value="choice4" name="q3" required> 4
    <input type="radio" value="choice5" name="q3" required> 5<br>

    <label for="Q4"><b>q4. It is often difficult for you to relate to other people’s feelings.</b></label><br>
    <input type="radio" value="choice1" name="q4" required> 1 
    <input type="radio" value="choice2" name="q4" required> 2
    <input type="radio" value="choice3" name="q4" required> 3
    <input type="radio" value="choice4" name="q4" required> 4
    <input type="radio" value="choice5" name="q4" required> 5<br>

    <label for="Q5"><b>q5. Your mood can change very quickly.</b></label><br>
    <input type="radio" value="choice1" name="q5" required> 1
    <input type="radio" value="choice2" name="q5" required> 2
    <input type="radio" value="choice3" name="q5" required> 3
    <input type="radio" value="choice4" name="q5" required> 4
    <input type="radio" value="choice5" name="q5" required> 5<br>
    
    <label for="Q6"><b>q6. You are usually highly motivated and energetic.</b></label><br>
    <input type="radio" value="choice1" name="q6" required> 1
    <input type="radio" value="choice2" name="q6" required> 2
    <input type="radio" value="choice3" name="q6" required> 3
    <input type="radio" value="choice4" name="q6" required> 4
    <input type="radio" value="choice5" name="q6" required> 5<br>

    <label for="Q7"><b>q7. You often feel as if you have to justify yourself to other people.</b></label><br>
    <input type="radio" value="choice1" name="q7" required> 1
    <input type="radio" value="choice2" name="q7" required> 2
    <input type="radio" value="choice3" name="q7" required> 3
    <input type="radio" value="choice4" name="q7" required> 4
    <input type="radio" value="choice5" name="q7" required> 5<br>

    <label for="Q8"><b>q8. Winning a debate matters less to you than making sure no one gets upset.</b></label><br>
    <input type="radio" value="choice1" name="q8" required> 1
    <input type="radio" value="choice2" name="q8" required> 2
    <input type="radio" value="choice3" name="q8" required> 3
    <input type="radio" value="choice4" name="q8" required> 4
    <input type="radio" value="choice5" name="q8" required> 5<br>

    <label for="Q9"><b>q9. Your home and work environments are quite tidy.</b></label><br>
    <input type="radio" value="choice1" name="q9" required> 1
    <input type="radio" value="choice2" name="q9" required> 2
    <input type="radio" value="choice3" name="q9" required> 3
    <input type="radio" value="choice4" name="q9" required> 4
    <input type="radio" value="choice5" name="q9" required> 5<br>

    <label for="Q10"><b>q10. You do not mind being at the center of attention.</b></label><br>
    <input type="radio" value="choice1" name="q10" required> 1
    <input type="radio" value="choice2" name="q10" required> 2
    <input type="radio" value="choice3" name="q10" required> 3
    <input type="radio" value="choice4" name="q10" required> 4
    <input type="radio" value="choice5" name="q10" required> 5<br>

    <label for="Q11"><b>q11. You find it easy to stay relaxed even when there is some pressure.</b></label><br>
    <input type="radio" value="choice1" name="q11" required> 1
    <input type="radio" value="choice2" name="q11" required> 2
    <input type="radio" value="choice3" name="q11" required> 3
    <input type="radio" value="choice4" name="q11" required> 4
    <input type="radio" value="choice5" name="q11" required> 5<br>

    <label for="Q12"><b>q12. You do not usually initiate conversations.</b></label><br>
    <input type="radio" value="choice1" name="q12" required> 1
    <input type="radio" value="choice2" name="q12" required> 2
    <input type="radio" value="choice3" name="q12" required> 3
    <input type="radio" value="choice4" name="q12" required> 4
    <input type="radio" value="choice5" name="q12" required> 5<br>

    <label for="Q13"><b>q13. You rarely do something just out of sheer curiosity.</b></label><br>
    <input type="radio" value="choice1" name="q13" required> 1
    <input type="radio" value="choice2" name="q13" required> 2
    <input type="radio" value="choice3" name="q13" required> 3
    <input type="radio" value="choice4" name="q13" required> 4
    <input type="radio" value="choice5" name="q13" required> 5<br>

    <label for="Q14"><b>q14. You feel superior to other people.</b></label><br>
    <input type="radio" value="choice1" name="q14" required> 1
    <input type="radio" value="choice2" name="q14" required> 2
    <input type="radio" value="choice3" name="q14" required> 3
    <input type="radio" value="choice4" name="q14" required> 4
    <input type="radio" value="choice5" name="q14" required> 5<br>

    <label for="Q15"><b>q15. Being organized is more important to you than being adaptable.</b></label><br>
    <input type="radio" value="choice1" name="q15" required> 1
    <input type="radio" value="choice2" name="q15" required> 2
    <input type="radio" value="choice3" name="q15" required> 3
    <input type="radio" value="choice4" name="q15" required> 4
    <input type="radio" value="choice5" name="q15" required> 5<br>

    <label for="Q16"><b>q16. You find it difficult to introduce yourself to other people.</b></label><br>
    <input type="radio" value="choice1" name="q16" required> 1
    <input type="radio" value="choice2" name="q16" required> 2
    <input type="radio" value="choice3" name="q16" required> 3
    <input type="radio" value="choice4" name="q16" required> 4
    <input type="radio" value="choice5" name="q16" required> 5<br>

    <label for="Q17"><b>q17. You often get so lost in thoughts that you ignore or forget your surroundings.</b></label><br>
    <input type="radio" value="choice1" name="q17" required> 1
    <input type="radio" value="choice2" name="q17" required> 2
    <input type="radio" value="choice3" name="q17" required> 3
    <input type="radio" value="choice4" name="q17" required> 4
    <input type="radio" value="choice5" name="q17" required> 5<br>

    <label for="Q18"><b>q18. You try to respond to your e-mails as soon as possible and cannot stand a messy inbox.</b></label><br>
    <input type="radio" value="choice1" name="q18" required> 1
    <input type="radio" value="choice2" name="q18" required> 2
    <input type="radio" value="choice3" name="q18" required> 3
    <input type="radio" value="choice4" name="q18" required> 4
    <input type="radio" value="choice5" name="q18" required> 5<br>

    <p>By answering the questions you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
       <button type="submit" class="submitButton">Submit</button>
    </div>
  </div>
</form>


@endsection