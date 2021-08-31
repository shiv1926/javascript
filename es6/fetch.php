<?php include('header.php'); ?>
<ul>
    xmlttprequest

    how to set header in fetch method
    how to send data, how to set method GET, POST, PUT, DELETE, UPDATE


    https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
    https://developer.mozilla.org/en-US/docs/Web/API/Body/json


    format
    .then((result) => {

    }).catch((err) => {

    });



    fetch("http://localhost/react_tutorial/nc-carport/api/get-menu.php")
    .then(
    (res) => {
    console.log('a');
    return res.json();
    }
    )
    .then(
    (resdata) => {
    console.log('b');
    console.log(resdata);
    }
    )
    .catch(
    (error) => {
    console.log('c');
    console.log(error);
    }
    );


</ul>
<?php include('footer.php'); ?>