const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const email = document.getElementById('email');
const emailErr = document.getElementById('emailErr');
const fileInput = document.getElementById('image');
const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
const phoneFormat =  /^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;
const phone = document.getElementById('phone_number');


function validateCompany() {
    let fields = [document.getElementById('name'), 
                    document.getElementById('email'),
                    document.getElementById('image'),
                    document.getElementById('website'),
                    ];
    let errMessage = document.getElementById('imageErr');

    let err = 0;

    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            
            if(fields[2]) {
                fields[2].style.border = '';
            } else {
                fields[i].style.border = '1px solid red';
            }
            errMessage.innerHTML = `Please fill in ${fields[2].name}`;
            errMessage.style.display = 'block';

        } else {
            fields[i].style.border = '';

            if(!emailFormat.test(email.value)) {
                err + 1;
                fields[1].style.border = '1px solid red';

            } else {
                fields[1].style.border = '';
            }

            if(!allowedExtensions.exec(fileInput.value)){
                err + 1;
                errMessage.style.display = 'block';
                errMessage.innerHTML = 'Please add a valid filetype';
                // fileInput.value = '';
            } else {
                errMessage.style.display = 'none';
                errMessage.innerHTML = '';
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
    let errMessage = document.getElementById('imageErr');

    let err = 0;

    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';

            if(fields[2]) {
                fields[2].style.border = '';
            } else {
                fields[i].style.border = '1px solid red';
            }
        } else {
            fields[i].style.border = '';

            if(!emailFormat.test(email.value)) {
                err + 1;
                fields[1].style.border = '1px solid red';
            } else {
                fields[1].style.border = '';
            }

            if (fileInput.value != '') {
                if(!allowedExtensions.exec(fileInput.value)){
                    err + 1;
                    errMessage.style.display = 'block';
                    errMessage.innerHTML = 'Please add a valid filetype';
                    // fileInput.value = '';
                }
            } else {
                errMessage.style.display = 'none';
                errMessage.innerHTML = '';
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

    let err = 0;

    for (var i = 0; i < fields.length; i++) {
        if(fields[i].value == "") {
            err++
            fields[i].style.border = '1px solid red';
            
        } else {
            fields[i].style.border = '';

            if(!emailFormat.test(email.value)) {
                err + 1;
                fields[2].style.border = '1px solid red';
            } else {
                fields[2].style.border = '';
            }

            if(!phoneFormat.test(phone.value)) {
                err + 1;
                fields[3].style.border = '1px solid red';
            } else {
                fields[3].style.border = '';
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