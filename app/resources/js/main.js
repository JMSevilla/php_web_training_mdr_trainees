const firstname = document.getElementById("txtfirstname");
const lastname = document.getElementById("txtlastname");

//JQuery
$("#btnOnSave").click(() => {
  //object
  let obj = {
    fname: firstname.value,
    lname: lastname.value,
    isbool: true,
  };
  clientRequest(obj).then((repository) => {
    console.log(repository);
  });
});

const clientRequest = (object) => {
  const promise = new Promise((resolve) => {
    $.post("app/Helper/helper.php", object, (response) => {
      resolve(response);
    });
  });
  return promise;
};
