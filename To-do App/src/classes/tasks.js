export const list=[];
export class Task{
	constructor(name, task, date){
		this.name =name;
		this.task = task;
        this.date =date;
       
	}
    
 addTaskList(){
  
  let name = document.getElementById("userCombo").value;
  let task =  document.getElementById("TaskInput").value;
  let date =  new Date();
  let finalDate = `${date.getMonth()}/${date.getDate()}/${date.getFullYear()} @ ${date.getHours()}:${date.getMinutes()}`;

  let newTask = new Task(name, task, finalDate)
  list.push(newTask)
   return list;
}    


}
