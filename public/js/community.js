const nome = document.querySelector(".name input");
const cognome = document.querySelector(".surname input");
const form = document.getElementById("form");
const section = document.querySelector("section");
console.log(form);
form.addEventListener("submit", search);

function search(event) {
  let nome = form.querySelector('#name').querySelector('input').value;
  let cognome = form.querySelector('#surname').querySelector('input').value;
  
  fetch("/community/cerca/"+encodeURIComponent(nome)+"/"+encodeURIComponent(cognome)).then(onResponse).then(onJson);
  event.preventDefault();
}

function onResponse(response) {
  console.log("on response");

  console.log(response);

  return response.json();
}

function onJson(json) {

  if (form.querySelector(".mess") !== null)
    form
      .parentNode.querySelector(".mess")
      .remove();

  section.innerHTML="";

  if(json.length == 0){
    const mess = "utente non esistente";
    const element = document.createElement("div");
    element.innerText = mess;
    element.classList.add("mess");
    if (form.querySelector(".mess") === null)
      form.appendChild(element);
    return;
  }

  
  console.log(json);
for(let i of json){

  const view = document.createElement("div");
  view.classList.add('view');

  const nomecompl = document.createElement("div");

  const email = document.createElement("div");

  const dataNascita = document.createElement("div");

  const n_likes = document.createElement("div");

  nomecompl.textContent = i.user.nome +" "+i.user.cognome;
  email.textContent = i.user.email;
  dataNascita.textContent = i.user.data_nascita;
  n_likes.textContent = "likes messi: "+ i.nlikes;

  section.appendChild(view);
  view.appendChild(nomecompl);
  view.appendChild(email);
  view.appendChild(dataNascita);
  view.appendChild(n_likes);

  view.classList.remove('hidden');
}
}
