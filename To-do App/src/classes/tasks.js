
export class Task {
    constructor(){
        this.user=null;
        this.task=null;
    }
    setlistTask(user, task){
        let date = Date.now();
        const task_list = {user, task, date};
        const assignTask = [];  
        
            assignTask.push(task_list);
       
        console.log(assignTask);
    }


}