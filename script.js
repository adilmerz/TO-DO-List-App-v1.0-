
// Define global variables 

let fileName = "list.json"
let txtNewTask = document.querySelector("#txtNewTask")
let tasks = document.querySelector("#tasks")
let addTask = document.querySelector("#addTask")

//Define functions

//function for get data from file list.json 
function getData() {
    let xhttp = new XMLHttpRequest()
    let json = "";
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            json = JSON.parse(this.responseText)
            showList(json)
        }
    }
    xhttp.open("GET", fileName, true)
    xhttp.send()
}


//function for display taks
function showList(json) {
    let list = ""
    json.map((e) => {
        //create template of task
        list += `<div class="input-group-prepend p-1 border-0">
          <div class="input-group-text bg-white border-0">
            <input id="task-${e.id}" onclick="check(this)" value="${e.id}" type="checkbox" ${(e.active) ? "checked" : ""} >
           <label for="task-${e.id}" type="text" class="form-control btn  " >${e.task}</label>
           <label for="task-${e.id}" type="text" class="form-control btn  " >dated : ${e.time} </label>
           <a href="delete.php?id=${e.id}"  class="btn btn-danger">X</a>
           </div>
           <hr/>
        </div>`})

    //set HTML content in page 
    tasks.innerHTML = list
}


function check(cb) {
    let id = cb.value;
    window.location.href = "check.php?id=" + id;
}

getData()

