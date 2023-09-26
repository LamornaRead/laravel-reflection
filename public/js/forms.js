const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const email = document.getElementById('email');
const emailErr = document.getElementById('emailErr');
const fileInput = document.getElementById('image');
const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
const phoneFormat =  /^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;
const phone = document.getElementById('phone_number');



function validateMessage() {
    let fields = [document.getElementById('name'), 
                    document.getElementById('email'),
                    document.getElementById('comment')
                    ];
    let errMessage = [document.getElementById('nameErr'),
                    document.getElementById('emailErr'),
                    document.getElementById('commentErr')
                ];

    var err = 0;

    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
            errMessage[i].style.display = 'block';
        } else {
            fields[i].style.border = '';
            errMessage[i].innerHTML = '';
            errMessage[i].style.display = 'none';

            
            if(!emailFormat.test(email.value)) {
            err + 1;
            fields[i].style.border = '1px solid red'; 
            errMessage[1].style.display = 'block';
            errMessage[1].innerHTML = `Please fill out a valid email`;
            } else {
            fields[i].style.border = '';
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


function validateCompany() {
    let fields = [document.getElementById('name'), 
                    document.getElementById('email'),
                    document.getElementById('image'),
                    document.getElementById('website'),
                    ];
    let errMessage = [document.getElementById('nameErr'),
                    document.getElementById('emailErr'), 
                    document.getElementById('imageErr'), 
                    document.getElementById('websiteErr')
                ];

    var err = 0;
    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            if(fields[2]) {
                fields[2].style.border = '';
            } else {
                fields[i].style.border = '1px solid red';
            }
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
            errMessage[i].style.display = 'block';


        } else {
            fields[i].style.border = '';
            errMessage[i].innerHTML = '';
            errMessage[i].style.display = 'none'


            if(!emailFormat.test(email.value)) {
                err + 1;
            fields[1].style.border = '1px solid red';
            errMessage[1].style.display = 'block';
            errMessage[1].innerHTML = `Please fill out a valid email`;
            } else {
            fields[1].style.border = '';
            errMessage[1].style.display = 'none';
            errMessage[1].innerHTML = '';
            }

            if(!allowedExtensions.exec(fileInput.value)){
                err + 1;
                errMessage[2].style.display = 'block';
                errMessage[2].innerHTML = 'Please add a valid filetype';
                fileInput.value = '';
            }else{
                errMessage[2].style.display = 'none';
                errMessage[2].innerHTML = '';
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

function validateCompanyUpdate() {
    let fields = [document.getElementById('name'), 
        document.getElementById('email'),
        // document.getElementById('image'),
        document.getElementById('website'),
    ];
    let errMessage = [document.getElementById('nameErr'),
        document.getElementById('emailErr'), 
        document.getElementById('imageErr'), 
        document.getElementById('websiteErr')
    ];

    var err = 0;
    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';

            if(fields[2]) {
                fields[2].style.border = '';
            } else {
                fields[i].style.border = '1px solid red';
            }
            errMessage[i].innerHTML = `Please fill in ${fields[i].name}`;
            errMessage[i].style.display = 'block';


        } else {
            fields[i].style.border = '';
            errMessage[i].innerHTML = '';
            errMessage[i].style.display = 'none'


            if(!emailFormat.test(email.value)) {
                err + 1;
                fields[1].style.border = '1px solid red';
                errMessage[1].style.display = 'block';
                errMessage[1].innerHTML = `Please fill out a valid email`;
            } else {
                fields[1].style.border = '';
                errMessage[1].style.display = 'none';
                errMessage[1].innerHTML = '';
            }
            
            if (fileInput.value != '') {
                if(!allowedExtensions.exec(fileInput.value)){
                    err + 1;
                    errMessage[2].style.display = 'block';
                    errMessage[2].innerHTML = 'Please add a valid filetype';
                    // fileInput.value = '';
                }
            } else {
                errMessage[2].style.display = 'none';
                errMessage[2].innerHTML = '';
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

function validateEmployee() {
    let fields = [document.getElementById('first_name'), 
        document.getElementById('last_name'),
        document.getElementById('email'),
        document.getElementById('phone_number'),
    ];
    let errMessage = [document.getElementById('firstnameErr'),
        document.getElementById('lastnameErr'),
        document.getElementById('emailErr'),
        document.getElementById('phoneErr'),
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
                errMessage[2].style.display = 'block';
                errMessage[2].innerHTML = `Please fill out a valid email`;
            } else {
                errMessage[2].style.display = 'none';
                errMessage[2].innerHTML = '';
            }

            if(!phoneFormat.test(phone.value)) {
                err + 1;
                errMessage[3].style.display = 'block';
                errMessage[3].innerHTML = `Please fill out a valid phone number`;
            } else {
                errMessage[3].style.display = 'none';
                errMessage[3].innerHTML = '';
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