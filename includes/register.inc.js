var email = document.getElementById('email');
var username = document.getElementById('username');
var password = document.getElementById('password');

// TODO: munculin pesan error

// validasi email
email.addEventListener('input', function() {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var xhr = new XMLHttpRequest();
    var valid = re.test(String(email.value).toLowerCase());
    xhr.onreadystatechange = function() {
        
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            
            console.log(email.value);
            console.log(valid);
            
            // kalo ga valid bordernya merah (belum ada pesan error)
            if(!valid) {
                email.setAttribute("style", "border-color: red;");
            
            } else { // kalo valid bordernya hijau
                email.setAttribute("style", "border-color: green;");
            }
        }
    }

    // eksekusi ajax
    xhr.open('GET','',true);
    xhr.send();
})

// validasi username + cek keunikan username
username.addEventListener('input', function() {
    const re = /[0-9A-Za-z_]+$/;

    var xhr = new XMLHttpRequest();
    var valid = re.test(String(username.value).toLowerCase());
    xhr.onreadystatechange = function() {
        
        if ( xhr.readyState == 4 && xhr.status == 200 ) {

            console.log(username.value);
            // console.log(valid);
            const exist = JSON.parse(xhr.responseText);

            if(!valid) {
                username.setAttribute("style", "border-color: red;");
                // kasih message kalo hanya terima huruf, angka dan _
                
            } else if(exist) {
                username.setAttribute("style", "border-color: red;");
                // kasih message kalo uname taken

            } else {
                username.setAttribute("style", "border-color: green;");
                // kasih message kalo uname avail
            }
        } else {

            username.setAttribute("style", "border-color: red;");
            // kasih pesan error
        }

    }

    xhr.open('GET','includes/validasiUname.php?u='+username.value,true);
    xhr.send();
})