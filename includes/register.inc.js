var email = document.getElementById('email');
var username = document.getElementById('username');
var password = document.getElementById('password');

email.addEventListener('input', function() {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // return re.test(email);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {

            var valid = re.test(String(email.value).toLowerCase());
            console.log(email.value);
            console.log(valid);

            if(!valid) {
                email.setAttribute("style", "border-color: red;");
            } else {
                email.setAttribute("style", "border-color: green;");
            }
        }
    }

    // eksekusi ajax
    xhr.open('GET','',true);
    xhr.send();
})