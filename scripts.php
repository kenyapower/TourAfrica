<!--header script starts here-->
<script>
    function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!--header script ends here here-->

<!--contact form script start here-->
<script>
    function validateForm() {

        document.querySelector('.status').innerHTML = "Sending...";

        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name'     : $('input[name=name]').val(),
            'email'    : $('input[name=email]').val(),
            'subject'  : $('input[name=subject]').val(),
            'message'  : $('textarea[name=message]').val(),
            'cmethod'  : $('input:radio[name=cmethod]:checked').val()
        };

        $.ajax({
            url : "mail.php",
            type: "POST",
            data : formData,
            success: function(data, textStatus, jqXHR)
            {

                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                    $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#status').text(jqXHR);
            }
        });

    }
</script>
<!--contact form script ends here-->

<!--contact form script start here-->
<!--<script>-->
<!--    function validateForm() {-->
<!--        var name =  document.getElementById('name').value;-->
<!--        if (name == "") {-->
<!--            document.querySelector('.status').innerHTML = "Name cannot be empty";-->
<!--            return false;-->
<!--        }-->
<!--        var email =  document.getElementById('email').value;-->
<!--        if (email == "") {-->
<!--            document.querySelector('.status').innerHTML = "Email cannot be empty";-->
<!--            return false;-->
<!--        } else {-->
<!--            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;-->
<!--            if(!re.test(email)){-->
<!--                document.querySelector('.status').innerHTML = "Email format invalid";-->
<!--                return false;-->
<!--            }-->
<!--        }-->
<!--        var subject =  document.getElementById('subject').value;-->
<!--        if (subject == "") {-->
<!--            document.querySelector('.status').innerHTML = "Subject cannot be empty";-->
<!--            return false;-->
<!--        }-->
<!--        var message =  document.getElementById('message').value;-->
<!--        if (message == "") {-->
<!--            document.querySelector('.status').innerHTML = "Message cannot be empty";-->
<!--            return false;-->
<!--        }-->
<!--        document.querySelector('.status').innerHTML = "Sending...";-->
<!--    }-->
<!--</script>-->
<!--contact form script ends here-->
