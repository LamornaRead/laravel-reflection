const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const email = document.getElementById('email');


function validateMessage() {
    var fields = new Array(); 
    var fields = [document.getElementById('name'), 
                    document.getElementById('email'),
                    document.getElementById('comment'),
                    ];
    var errMessage = [document.getElementById('nameErr'),
                    document.getElementById('emailErr'), 
                    document.getElementById('commentErr')
                ];

    var err = 0;
    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
            errMessage[i].style.display = 'block';
        } else {
            errMessage[i].innerHTML = '';
            errMessage[i].style.display = 'none';

            if(!emailFormat.test(email.value)) {
                err + 1;
            errMessage[1].style.display = 'block';
            errMessage[1].innerHTML = `Please fill out a valid email`;
            } else {
            errMessage[1].style.display = 'none';
            errMessage[1].innerHTML = '';
            }
        }
    }



    if (err === 0) {
        console.log('form success');
    } else {
        console.log('form failed');
        return false;
    }

    return true;
}