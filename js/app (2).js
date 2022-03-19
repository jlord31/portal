/*let portal_validation = () => {
    let fullName =         document.getElementById("name").value;
    let skillSet = document.getElementById("skillset").value;
    if(skillSet != "" && fullName != ""){
        alert("Looks good!!!")
    }
    else{
        alert("Please fill in all fields")
    }
}
*/

let contact_validation = () => {
    let fname =         document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let message = document.getElementById("message").value;
    if(fname != "" && lname != "" && message != ""){
        let link ="mailto:adepoju97@gmail.com" + "?cc=adepoju97@gmail.com" + "&subject=" + escape("Message from recruitment portal by " +fname +" " + lname) + "&body=" + escape(document.getElementById('message').value) ;
        window.location.href = link;
    }
    else{
        alert("Please fill in all fields");
    }
}




/*
  var uploadFile = function(docName, file)
  {
  var name =
  encodeURIComponent(file.name), type =
 file.type, fileReader = new
 FileReader(), getRequest = new
 XMLHttpRequest(), putRequest = new
 XMLHttpRequest();
 getRequest.open('GET', baseUrl +
 encodeURIComponent(docName), true);
 getRequest.send();
 getRequest.onreadystatechange =
 function(response) { if
 (getRequest.readyState == 4 &&
 getRequest.status == 200) { var doc =
 JSON.parse(getRequest.responseText);
 putRequest.open('PUT', baseUrl +
 encodeURIComponent(docName) + '/' +
 name + '?rev=' + doc._rev, true);
    putRequest.setRequestHeader('Content-
 Type', type);
 fileReader.readAsArrayBuffer(file);
 fileReader.onload = function
 (readerEvent)
{
putRequest.send(readerEvent.target.resul
t);
};
putRequest.onreadystatechange =
function(response) { if
(putRequest.readyState == 4)
{
console.log(putRequest);
}
};
}
};
}; */
