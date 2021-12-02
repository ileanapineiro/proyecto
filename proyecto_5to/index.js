//selecting all required elements
const dropArea = document.querySelector(".drag-area");
const dragText = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const dragToUploadForm = document.querySelector("#dragToUploadForm");
const input = dropArea.querySelector("#inputFile");
let files; //this is a global variable and we'll use it inside multiple functions

dragToUploadForm.addEventListener("submit", (e) => {
  e.preventDefault();
  if (files) {
    e.submit();
  }
});
button.addEventListener("click", (e) => {
  input.click(); //if user click on the button then the input also clicked
});
input.addEventListener("change", function () {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  files = this.files;
  dropArea.classList.add("active");
  showFile(files); //calling function
  dropArea.classList.remove("active");
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (e) => {
  e.preventDefault();
  dropArea.classList.add("active");
  dragText.textContent = "Liberar para cargar el archivo";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", (e) => {
  e.preventDefault();
  dropArea.classList.remove("active");
  dragText.textContent = "Arrastrar y soltar para cargar el archivo";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (e) => {
  e.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  files = e.dataTransfer.files;
  showFile(files); //calling function
  dropArea.classList.remove("active");
  dragText.textContent = "Arrastrar y soltar para cargar el archivo";
});

function showFile(files) {
  if(files.length == undefined){
    prosessFile(files);
  }
  else{
    for(const file of files){
      prosessFile(files);
    }
  }
  
}

function prosessFile(files){
  const docType = file.type;
  const validExtensions = ["imagen/jpeg","imagen/jpg","imagen/png","imagen/gif"];
  if(validExtensions.includes(docType)){
    
    const fileReder = new FileReder();
    fileReder.addEventListener('Load', e =>{
      const image = 
        <div class ="file-container">
          <img alt= '${file.name}' width="50">
          <div class="status">
            <span>${file.name}</span>
            <span class="status-text">
              loading...
            </span>
          </div>
          </img>
        </div>
      ;
      const html =document.querySelector('#preview').innerHTML;
      document.querySelector('#preview').innerHTML = image + html;
    });
    
  }else{
    alert("formato incorrecto")
  }
}