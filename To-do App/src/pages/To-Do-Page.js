
import { Page } from "../framework/page.js";
import { Button } from "../UI/button.js";
import { textfield } from "../UI/Textfield.js";
import { Combox } from "../UI/combox.js";
import { list, Task } from "../classes/tasks.js";
import { Table } from "../UI/Table.js";
import { UserList } from "../classes/user-Info.js";
import { Hr } from "../UI/hr.js";


export class ToDoPage extends Page{
    constructor(){
        super('Add Task');
    }

    createElement(){
      super.createElement();
      let userData = (UserList);
      let headers = ['record','Date','name', 'task'];  

      let space = new Hr();
          space.appendToElement(this.element);

        let searchbar = new textfield("Task", "TaskInput");
          searchbar.appendToElement(this.element);

        let userCombo = new Combox(userData, 'userCombo');
          userCombo.appendToElement(this.element);
        
          space.appendToElement(this.element);
        let addTask = new Button("Add Task", "addTask");
        let styleStringAdd = 'btn btn-success col-4 col-md-4 col-sm-3 me-4 btn-lg';

          addTask.setStyleString(styleStringAdd);
          addTask.setType('su')
          addTask.appendToElement(this.element);

            addTask.element.click(()=>{ 

              let newObj = new Task();
              newObj.addTaskList();
              document.getElementById("userCombo").value="";
              document.getElementById("TaskInput").value="";

            }) 
            
      let styleStringEmpty = 'btn btn-primary me-4 btn-lg';
        let ShowTable = new Button("Show Table", "ShowTable");
        ShowTable.setStyleString(styleStringEmpty);
        ShowTable.appendToElement(this.element);
          ShowTable.element.click(()=>{
              console.log(list);
              if(list.length<=0){
                alert('Missing Data in Task Table, please assign a task.');
              } else{
                document.getElementById('ShowTable').disabled=true;
                let TaskTable = new Table('TaskTable', headers, list);
                TaskTable.appendToElement(this.element); 
              }
            })
      let styleStringRemove = 'btn btn-danger col-4 col-md-4 col-sm-3 me-4 btn-lg';
        let removeTask = new Button("Remove Task", "removeTask");      
          removeTask.setStyleString(styleStringRemove);
          removeTask.appendToElement(this.element);
          let table = document.getElementsByTagName('table').innerHTML;
          //testing to see if we can delete the table 
          removeTask.element.click(()=>{
            let recRemoveReq = prompt("Please enter the record to remove");
            console.log(list);
            console.log(recRemoveReq);
            list.splice(0,recRemoveReq);
            console.log(list);
            document.getElementById('ShowTable').disabled=false;           

          })

          space.appendToElement(this.element);
      let hr = new Hr('border border-primary border-3 opacity-75');
          hr.appendToElement(this.element);
          space.appendToElement(this.element);
          /*
      let refreshTable = new Button("Remove all Assigment", "DeleteTable");  
          refreshTable.setStyleString('btn btn-danger me-4 btn-lg  justify-content-md-end');
          refreshTable.appendToElement(this.element);
          refreshTable.element.click(()=>{
            let confirmation = confirm("are you sure you want to delete all the assigments");
            if(confirmation=true){
              location.reload();
            } else{
              
            }
            
          })*/
    }
    getElementString(){
      return '<div class="container text-center"></div>'
    }
    
}
 