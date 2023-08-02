<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contact Us.css">
</head>
<body>
    <div id="navBar">
    <div id="logo"><a style="color: rgb(249 115 22)">VITAP Hospitals</a></div>
        <div id="secondHalf">
            <div class="nav"><a href="welcome.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <div class="nav"><button class="button2" ><a href="logout.php" style="color : white">Logout</a></button></div>
            
        </div>
    </div>
    <h1><u>FAQ's</u></h1>
    <div id="Box">
        <div class="boxOut">
            <div class="visible"> 1. What is tele-consultation ?</div>
            <div class="invisible"> 
                The clinical video modality of tele-health platform using interactive live video technology allows a health care provider who is not located in the same location as a patient to view, diagnose, monitor, and treat medical conditions of the patient in real time. 
            </div>
        
        </div>
        <div class="boxOut">
            <div class="visible"> 2. What device do I need to use?</div>
            <div class="invisible">
                The application is best viewed in Chrome browser in your computer. You may also use iPad, iPhone, Android phones.</div>
        </div>
        <div class="boxOut">
            <div class="visible"> 3. What happens if my device is not working or there is a problem logging in to the application?</div>
            <div class="invisible"> 
                We recommend using Chrome browser for best technical experience. Log in at least 5-7 minutes before your appointment time. However, if you are still unable to connect because of a technical issue, please notify a member of our team immediately. They will help you reschedule your appointment.</div>
        </div>
        <div class="boxOut">
            <div class="visible"> 4. Do I have to wait before I begin my tele- consultation?</div>
            <div class="invisible">
                The waiting time will depend on the number of patients waiting in the queue ahead of you. We strive to keep waiting times short and to ensure that everyone is able to see a doctor within 15 minutes. If the estimated queue times exceed 15 minutes, our staff will prompt you and ask if you wish to reschedule your appointment.</div>
            
        </div>
        <div class="boxOut">
            <div class="visible"> 5. Is recording of  Tele-Consultation permitted?</div>
            <div class="invisible">
                Any recording whether audio or video during the video consultation, in whole or in part, by any of the administrator, the patient or the doctor is strictly prohibited.</div>
            
        </div>
        <div class="boxOut">
            <div class="visible"> 6. What if I want to reschedule or cancel an appointment?</div>
            <div class="invisible">
                You can reschedule or cancel an appointment directly on tele-consultation platform by providing certain information. Alternatively, you can call a member of our team to help you with the rescheduling or cancellation.</div>
            
        </div>
        <div class="boxOut">
            <div class="visible"> 7. What is your refund policy?</div>
            <div class="invisible">
                First off, we hope that you don’t have to book and cancel an appointment with us. But, in case you still need to do that we will be happy to consider you. You may either use the credit towards your next appointment or allow us 28 working days to return it to the original mode of payment. Please note that the refund of handling charges is not possible. In addition, you might have to incur a small of cancellation. </div>
            
        </div>
        <script>
            $(".boxOut").on("click", function () {
                $(".boxOut").removeClass("active");
                $(this).addClass("active");
            });
            $(".visible").on("click", function () {
                $(".visible").removeClass("active");
                $(this).addClass("active");
            });
        </script>
    </div>
    <h1>Still Having a Query?</h1>
    <div id="query">
        <form action="">
            <div class="form-example">
                <label for="name">Enter your name: </label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-example">
                <label for="email">Enter your email: </label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-example">
                <label for="tentacles">Enter phone number :</label>
                <input type="tel" id="phNum" name="phNum" required>
            </div>
            <div class="form-example">
                <label for="ChooseQuery">Choose Query Type:</label>
                <select name="Query Type" id="ChooseQuery">
                    <option value="">--Please choose an option--</option>
                    <option value="NONE">Enquiry</option>
                    <option value="IIT">Feedback</option>
                    <option value="NIT">Complaint</option>
                </select>
            </div>
            <div class="form-example">
                <label for="Enter query">Enter Your Query:</label><br>
                <textarea name="Feedback" placeholder="please enter your query" rows="10" cols="90" required></textarea>
            </div>
            <input type="submit" value="submit" style="width: 300px; margin-left: 230px; color: rgb(249 115 22);">

        </form>
    </div>

</body>
</html>