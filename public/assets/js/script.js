const pswrdField = document.querySelector(".form input[type='password']"),
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  }else{
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
}

// Error Login

// const form = document.querySelector(".login form"),
// continueBtn = form.querySelector(".button input"),
// errorText = form.querySelector(".error-text");

// form.onsubmit = (e)=>{
//     e.preventDefault();
// }

// continueBtn.onclick = ()=>{
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "{{ url('/login') }}", true);
//     xhr.onload = ()=>{
//       if(xhr.readyState === XMLHttpRequest.DONE){
//           if(xhr.status === 200){
//               let data = xhr.response;
//               if(data === "success"){
//                 location.href = "users.php";
//               }else{
//                 errorText.style.display = "block";
//                 errorText.textContent = data;
//               }
//           }
//       }
//     }
//     let formData = new FormData(form);
//     xhr.send(formData);
// }