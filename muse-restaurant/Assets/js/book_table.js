window.onload = function(){
    var formHandle = document.forms[0];
    this.console.log(formHandle);
    formHandle.onsubmit = processForm;
    function processForm(evt){
        //alert("Form sent");
        // return false;
        evt.preventDefault();
        //window.history.back();
        var nameErrMsg = document.getElementById("bk_nameErr");
        var mobileErrMsg = document.getElementById("bk_numberErr");
        var emailErrMsg = document.getElementById("bk_emailErr");

        var nameRegex =  /^[a-zA-Z ]+$/;
        var mobileRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
        var get_user_name = document.getElementById("bk_full_name");
        var get_user_mobile = document.getElementById("bk_phone_number");
        var get_user_email = document.getElementById("bk_email");
        var get_user_date = document.getElementById("bk_date");
        var get_user_time = document.getElementById("bk_time");
        var get_user_persons = document.getElementById("bk_person");

        var set_user_name = document.getElementById("bk_thanks_input");
        var set_user_mobile = document.getElementById("bk_thanks_reminder_input");
        var set_user_date = document.getElementById("bk_user_date");
        var set_user_time = document.getElementById("bk_user_time");
        var set_user_persons = document.getElementById("bk_user_persons");
        //console.log(nameRegex.test(get_user_name.value));
        if(!nameRegex.test(get_user_name.value)){
            nameErrMsg.innerHTML = "*";
            console.log("invalid");
            return false;
        }
        else{
            set_user_name.innerHTML += get_user_name.value;
        }
        if(!mobileRegex.test(get_user_mobile.value)){
            mobileErrMsg.innerHTML = "*";
        }
        else{
            set_user_mobile.innerHTML += get_user_mobile.value;
        }
        if(!emailRegex.test(get_user_email.value)){
            emailErrMsg.innerHTML =  "*";
        }
        set_user_date.innerHTML = formatDate(get_user_date.value);
        set_user_time.innerHTML = get_user_time.value;
        set_user_persons.innerHTML = get_user_persons.value;

        function formatDate(dateInput) {
            var date = new Date(dateInput);
            if (!isNaN(date.getTime())) {
                return date.getDate() + 1 + '/' + date.getMonth() + '/' + date.getFullYear();
            }
        }
        $('.bk_form').css('display','none');
        $('.bk_thanks').css('display','block');
       
       
     }
}
// var nameValue = document.getElementById("bk_full_name");
       
        // var phoneValue = document.getElementById("bk_phone_number");
        // var emailValue = document.getElementById("bk_email");
        // var dateValue = document.getElementById("bk_date");
        // var timeValue = document.getElementById("bk_time");
        // var personValue  = document.getElementById("bk_person");
        
       